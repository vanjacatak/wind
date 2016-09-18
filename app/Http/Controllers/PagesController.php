<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request as Request;

class PagesController extends Controller {

  public function getIndex () {

    $posts = Post::orderBy('id', 'asc')
      ->take(2)
      ->get();

    return view('pages.welcome', [
      'posts' => $posts,
    ]);

  }

  public function getAbout () {

    $firstName = 'Vanja';
    $lastName = 'Chatak';

    $fullName = $firstName . ' ' . $lastName;
    $email = 'vanjacatak@yahoo.com';
    $data = [
      'fullName' => $fullName,
      'email' => $email,
    ];
    return view('pages.about')->withData($data);

  }

  public function getContact () {

    return view('pages.contact');

  }

  public function postContact () {


  }

}
