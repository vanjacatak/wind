@extends('layouts.main')

@section('title', '- Homepage')

@section('content')

  @include('partials._carousel')

  <div class="section-home about-us fadeIn animated">

    <div class="container">

      <div class="row">

        <h2 class="title-style-1">Our Services<span class="title-under"></span></h2>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/parasail1.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                Plaid mumblecore mustache portland, blog shabby chic PBR&B craft beer snackwave pickled fingerstache umami
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...sdsd
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                <a>Read More</a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/parasail1.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                Plaid mumblecore mustache portland, blog shabby chic PBR&B craft beer snackwave pickled fingerstache umami
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...sdsd
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                <a>Read More</a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/parasail1.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                Plaid mumblecore mustache portland, blog shabby chic PBR&B craft beer snackwave pickled fingerstache umami
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...sdsd
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                keffiyeh. Coloring book glossier woke scenester blue bottle. blaballbalb lab alb alb lab alb abalba...
                <a>Read More</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div> <!-- /.about-us -->

  <hr>

  <div class="section-home about-us fadeIn animated">

    <div class="container">

      <div class="row">

        <h2 class="title-style-1">Media<span class="title-under"></span></h2>

        <div class="col-md-6 col-sm-12 home-info">

          <div class="video-container animate-onscroll fadeIn">
            <iframe style="border: 3px solid black;" width="560" height="315"
              src="https://www.youtube.com/embed/CZ3Rn0OS_Dw" frameborder="0" allowfullscreen>

            </iframe>
          </div>

        </div>

        <div class="col-md-6 col-sm-12 home-info">

          <div class="animate-onscroll fadeIn">
            <img src="images/parasail1.jpg" class="img-responsive" alt="">
          </div>
        </div>

      </div>

    </div>

  </div> <!-- /.about-us -->

  <hr>

  <div class="section-home home-reasons">

    <div class="container">

      <div class="row">

        <h2 class="title-style-1">Latest news <span class="title-under"></span></h2>

        @foreach($posts as $post)

          <div class="col-md-6 col-sm-6">

            <a href="{{ $post->singleViewUrl() }}">

              <div class="reasons-col animate-onscroll fadeIn">

                <img src="images/reasons/we-fight-togother.jpg" alt="">

                <div class="reasons-titles">

                  <h3 class="reasons-title">{{ $post->title }}</h3>

                </div>

                <div class="on-hover hidden-xs">
                  {{ substr($post->body, 0, 800) }}
                  {{ strlen($post->body) > 700 ? '...' : '' }}
                </div>

              </div>

            </a>

          </div>

        @endforeach

      </div>

    </div>

  </div> <!-- /.home-reasons -->

@endsection
