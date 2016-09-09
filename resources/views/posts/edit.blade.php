@extends('layouts.main')

@section('title', '- Edit post')

@section('content')

  <div class="row">

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

      {{ Form::label('slug', 'Slug') }}
      {{ Form::text('slug', null, ['class' => 'form-control input-lg']) }}

      {{ Form::label('body', 'Body', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <dd>{{ date('d.m.Y H:i', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last updated At:</dt>
          <dd>{{ date('d.m.Y H:i', strtotime($post->updated_at)) }}</dd>
        </dl>

        <hr>

        <div class="row">
          <div class="col-sm-6">
            {{ Form::submit('Save changes', ['class' => 'btn btn-success btn-block']) }}
          </div>
          <div class="col-sm-6">
            <a class="btn btn-danger btn-block" href="{{ URL::previous() }}">Cancel</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            {{ Html::linkRoute('posts.index', 'See all posts', [], [
              'class' => 'btn btn-default btn-block btn-h1-spacing',
            ]) }}
          </div>
        </div>

      </div>
    </div>
    {!! Form::close() !!}
  </div>

@endsection
