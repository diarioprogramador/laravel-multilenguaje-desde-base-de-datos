<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    public function create(){

        return  view('posts.create');
    }

    public function show(){

        return view('posts.show');
    }

    public function store(StorePostRequest $request){

        Post::create($request->validated());

        return redirect()->route('index');
    }

    public function edit(Post $post){

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){

        $data = $request->validate([
            'title_en' => 'required',
            'body_en' => 'required',
            'title_es' => 'required',
            'body_es' => 'required'
        ]);

        $post->title_en = $data['title_en'];
        $post->body_en = $data['body_en'];
        $post->title_es = $data['title_es'];
        $post->body_es = $data['body_es'];

        $post->save();

        return redirect()->route('index');
    }

    public function destroy(Post $post, Request $request){

        $post->delete();

        return redirect()->route('index');
    }
}
