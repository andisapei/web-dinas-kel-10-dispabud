<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wisata;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        $wisatas = Wisata::paginate(6);
        $users = User::paginate(3);
        $posts = Post::paginate(6);
        return view('publik.home', compact('users','wisatas','posts'));
    }
    public function wisatas()
    {
        $wisatas = Wisata::paginate(1);
        return view('publik.publik-wisata', compact('wisatas'));
    }
    public function wisatasShow(string $id)
    {
        $wisatas = Wisata::find($id);
        return view('publik.publik-show-wisata', compact('wisatas'));
    }

    public function posts()
    {
        $posts = Post::paginate(2);
        return view('publik.publik-posts', compact('posts'));
    }
    public function postsShow(string $id)
    {
        $posts = Post::find($id);
        $relatedPosts = Post::where('id', '!=', $id)->take(3)->get();
        return view('publik.publik-show-posts', compact('posts', 'relatedPosts'));
    }

    public function contact()
    {
        return view('publik.contact');
    }
}
