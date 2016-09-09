<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PostController extends Controller {

  public function __construct () {

    $this->middleware('auth');

  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index () {
    // load all posts
    $posts = Post::orderBy('id', 'desc')->paginate(5);

    // load view with posts inside
    return view('posts.index')->withPosts($posts);
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create () {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store (Request $request) {
    //validate the data
    $this->validate($request, [
      'title' => 'required|max:60',
      'slug' => 'required|alpha_dash|min:5|max:60|unique:posts,slug',
      'body' => 'required',
    ]);

    // store in the database
    $post = new Post();
    $post->title = $request->title;
    $post->slug = $request->slug;
    $post->body = $request->body;

    $post->save();

    Session::flash('success', 'The blog post was successfully saved.');

    return redirect()->route('posts.show', $post->id);

  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show ($id) {
    $post = Post::find($id);
    return view('posts.show')->with('post', $post);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit ($id) {
    //find the post in the database and save it as a variable
    $post = Post::find($id);
    //return da view
    return view('posts.edit')->withPost($post);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update (Request $request, $id) {

    // validate the data
    $post = Post::find($id);

    if ($request->input('slug') ==  $post->slug) {
      $this->validate($request, [
        'title' => 'required|max:60',
        'body' => 'required',
      ]);
    } else {
      $this->validate($request, [
        'title' => 'required|max:60',
        'slug' => 'required|alpha_dash|min:5|max:60|unique:posts,slug',
        'body' => 'required',
      ]);
    }

    // save data to the database
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->slug = $request->input('slug');
    $post->body = $request->input('body');

    $post->save();

    // set flash data with success message
    Session::flash('success', 'The blog post was successfully saved.');
    // redirect with flash data
    return redirect()->route('posts.show', $post->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy ($id) {
    //delete post from database
    $post = Post::find($id);
    $post->delete();

    // set flash message that post is deleted
    Session::flash('success', 'The blog post was succesfully deleted.');

    //redirect to home
    return redirect()->route('posts.index');
  }
}
