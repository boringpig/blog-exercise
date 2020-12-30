<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('post-list', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post-edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/post-list');
    }

    public function delete($id)
    {
        Post::destroy($id);

        return redirect('/post-list');
    }

    public function create()
    {
        return view('post-create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
