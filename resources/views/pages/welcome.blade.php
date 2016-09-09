@extends('layouts.main')

@section('title', '- Homepage')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome!</h1>

        <div class="testic">
          ASDFM
        </div>

        <p class="lead">Thank you for visiting our site!</p>

        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">

      @foreach($posts as $post)
        <div class="post">
          <h3>{{ $post->title }}</h3>

          <p>
            {{ $post->body }}
          </p>
          <a href="{{ $post->singleViewUrl() }}" class="btn btn-primary">Read more</a>
        </div>
      @endforeach

    </div>
    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
      Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji.
      Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo
      tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska.
    </div>
  </div>
@endsection
