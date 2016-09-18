<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post as Post;

class BlogController extends Controller {

  public function getIndex () {

    $posts = Post::orderBy('created_at', 'asc')->paginate(4);

    return view('blog.index', [
      'posts' => $posts,
    ]);

  }

  public function getSingle ($slug) {

    $post = Post::where('slug', $slug)->first();

    return view('blog.single', [
      'post' => $post,
    ]);

  }

}
