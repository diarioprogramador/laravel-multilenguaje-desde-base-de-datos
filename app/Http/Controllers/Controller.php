<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $locale = app()->getLocale();

        $posts = Post::select(['id', 'title_' . $locale, 'body_' . $locale])->latest()->where('title_' . $locale, '!=', '')->take(12)->get();

        return view('posts.index', compact('posts'));
    }
}
