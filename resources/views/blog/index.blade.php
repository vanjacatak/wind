@extends('layouts.main')

@section('title', '- $post->title ')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Blog</h1>
    </div>
  </div>

  @foreach($posts as $post)
    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <h2>{{ $post->title }}</h2>
        <h5>Published: {{ date('d F Y', strtotime($post->created_at)) }}</h5>

        <p>
          {{ substr($post->body, 0, 250) }}
          {{ strlen($post->body) > 250 ? '...' : ''}}
        </p>

        <a href="{{ $post->singleViewUrl() }}" class="btn btn-primary">Read more</a>
      </div>
    </div>
  @endforeach

  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
  </div>
@endsection
