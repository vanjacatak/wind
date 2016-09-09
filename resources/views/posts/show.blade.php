@extends('layouts.main')

@section('title', '- View post')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>

      <p class="lead">
        {{ $post->body }}
      </p>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label>Url :</label>

          <p><a href="{{ $post->singleViewUrl() }}">{{ url($post->slug) }}</a></p>
        </dl>

        <dl class="dl-horizontal">
          <label>Created At:</label>

          <p>{{ date('d.m.Y H:i', strtotime($post->created_at)) }}</p>
        </dl>

        <dl class="dl-horizontal">
          <label>Last updated At:</label>

          <p>{{ date('d.m.Y H:i', strtotime($post->updated_at)) }}</p>
        </dl>

        <hr>

        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], [
            'class' => 'btn btn-primary btn-block',
            ]) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {{ Form::close() }}
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
