<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return view('posts.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.formPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'isi' => 'required|min:50',
            'tanggal' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
        ]);

        $imageName = null;
        if($request->photo){
            $imageName = time().'.'.$request->file('photo')->extension();
            $request->photo->storeAs('public/images', $imageName);
        }

        Post::create([
            'title' => $request->title,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'User Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        $relatedPosts = Post::where('id', '!=', $id)->take(5)->get();
        return view('posts.showPost',compact('post','relatedPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:5',
            'isi' => 'required|min:50',
            'tanggal' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
        ]);

        if($request->photo){
            $imageName = time().'.'.$request->file('photo')->extension();
            $request->photo->storeAs('public/images', $imageName);

            //delete old photo
            $path = storage_path('app/public/images/'.$post->image);
            if(File::exists($path)){
                File::delete($path);
            }
            $post->image = $imageName;
        }

        $post->title = $request->title;
        $post->isi = $request->isi;
        $post->tanggal = $request->tanggal;
        $post->penulis = $request->penulis;
        $post->kategori = $request->kategori;

        $post->update();
        return redirect()->route('posts.index')->with('success', 'Post Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try{
            $post->delete();


            return redirect()->route('posts.index')->with('success', 'Post Deleted');
            }catch (Exception $e) {
                return $e->getMessage();
            }
    }
}
