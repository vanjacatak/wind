@extends('layouts.main')

@section('title', '- Create new post')

@section('stylesheets')

  {!! Html::style('css/parsley.css')  !!}

@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <h1>Create new post</h1>
      <hr>

      {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '',)) !!}
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, [
          'class' => 'form-control',
          'data-parsley-required' => '',
          'data-parsley-minlength' => 3,
          'data-parsley-maxlength' => 60,
      ]) }}

      {{ Form::label('slug', 'Slug:') }}
      {{ Form::text('slug', null, [
          'class' => 'form-control',
          'data-parsley-required' => '',
          'data-parsley-minlength' => 3,
          'data-parsley-maxlength' => 60,
      ]) }}

      {{ Form::label('body', 'Post body:') }}
      {{ Form::textarea('body', null, [
          'class' => 'form-control',
          'data-parsley-required' => '',
          'data-parsley-minlength' => 20,
      ]) }}

      {{ Form::submit('Create post', [
          'class' => 'btn btn-success btn-lg btn-block',
          'style' => 'margin-top: 20px;',
      ]) }}
      {!! Form::close() !!}

    </div>
  </div>

@endsection

@section('scripts')

  {!! Html::script('js/parsley.min.js')  !!}}

@endsection
