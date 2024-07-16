<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisatas = Wisata::paginate(4);
        return view('wisatas.wisata', compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'create wisata';
        return view('wisatas.formWisata', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_wisata' => 'required|min:5',
            'deskripsi' => 'required|min:50',
            'lokasi' => 'required',
            'harga_tiket' => 'required',
            'jam_operasional' => 'required',
            'fasilitas' => 'required',
            'kontak' => 'required|min:11',
        ]);

        $imageName = null;
        if($request->photo){
            $imageName = time().'.'.$request->file('photo')->extension();
            $request->photo->storeAs('public/images', $imageName);
        }

        Wisata::create([
            'nama_wisata' => $request->nama_wisata,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'harga_tiket' => $request->harga_tiket,
            'jam_operasional' => $request->jam_operasional,
            'fasilitas' => $request->fasilitas,
            'kontak' => $request->kontak,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $wisata = Wisata::find($id);
        return view('wisatas.showWisata',compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'Edit Wisata';
        $wisata =Wisata::find($id);
        return view('wisatas.editWisata', compact('wisata','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
    $request->validate([
        'nama_wisata' => 'required|min:4',
        'deskripsi' => 'min:50',
        'lokasi' => 'required',
        'harga_tiket' => 'required',
        'jam_operasional' => 'required',
        'fasilitas' => 'required',
        'kontak' => 'required|min:11',
    ]);
    if($request->photo){
        $imageName = time().'.'.$request->file('photo')->extension();
        $request->photo->storeAs('public/images', $imageName);

        //delete old photo
        $path = storage_path('app/public/images/'.$wisata->image);
        if(File::exists($path)){
            File::delete($path);
        }
        $wisata->image = $imageName;
    }
    $wisata->nama_wisata = $request->nama_wisata;
    $wisata->deskripsi = $request->deskripsi;
    $wisata->lokasi = $request->lokasi;
    $wisata->harga_tiket = $request->harga_tiket;
    $wisata->jam_operasional = $request->jam_operasional;
    $wisata->fasilitas = $request->fasilitas;
    $wisata->kontak = $request->kontak;

    $wisata->update();
    return redirect()->route('wisatas.index')->with('success', 'Wisata Update');

}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Wisata $wisata)
{
    try{
        $wisata->delete();


        return redirect()->route('wisatas.index')->with('success', 'Wisata Deleted');
        }catch (Exception $e) {
            return $e->getMessage();
        }
}
}
