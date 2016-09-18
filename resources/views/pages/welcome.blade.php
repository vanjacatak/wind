@extends('layouts.main')

@section('title', '- Homepage')

@section('content')

  @include('partials._carousel')

  <div class="section-home about-us fadeIn animated">

    <div class="container">

      <?php //todo: Kada service bude gotov onda ćemo smanjiti broj rijeci tkao da se nevidi cijeli text, a link na
      //todo: stranicu o servicu ce biti pod "Read More"! ?>
      <div class="row">

        <h2 class="title-style-1"><strong>Our Services</strong><span class="title-under"></span></h2>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <h3 class="title-style-3"><strong>Parasailing</strong></h3>
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/services/mala7.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                Baška is one of the most beatiful places on Croatian coast with its extraordinary landscape and nature.
                The best way to experience the bay is to fly above it, where you can see everything from the bird's eye view.
                The calmness, the quietness and the amazing view is the best way to relax during your holiday.
                {{--<a>Read More</a>--}}
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <h3 class="title-style-3"><strong>Watersports</strong></h3>
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/services/mala8.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                Summer vacation means trying out sea related activities, and it is impossible to imagine a seaside summer
                resort without water sports such as tubes, couch and mattress. Different kinds of tubes give you different
                adrenaline rides. For those who are not fans of extreme sports there is couch, while tubes and mattress
                are made for the adrenaline lovers.
                {{--<a>Read More</a>--}}
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 col-sm-12 home-info">

          <div class="row">
            <h3 class="title-style-3"><strong>Parasailing equipment</strong></h3>
            <div class="col-md-12 col-sm-4 animate-onscroll fadeIn">
              <img src="images/services/mala6.jpg" class="img-responsive img-rounded" alt="">
            </div>

            <div class="col-md-12 col-sm-8">
              <div class="test">
                After years and years of experience, we can say that we have learned a lot, which made us see the room
                for improvements in the parasailing area. We have started making our own custom made parasails and the gear
                that goes with it, such as harnesses and tripleizers. We can proudly say that our guests are flying
                exclusively on our own parasailing equipment.
                {{--<a>Read More</a>--}}
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div> <!-- /.about-us -->

  <div class="section-home fadeIn animated" style="background-color: #aae2f7;">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-sm-12 home-info">

          <div class="video-text">
            <strong>Still not sure what to do on your vacation?</strong>
            <br>
            <strong>Watch our video and get pumped to try out our activities!</strong>
          </div>

        </div>

        <div class="col-md-6 col-sm-12 home-info">

          <div class="video-container animate-onscroll fadeIn">
            <iframe style="border: 3px solid black;" width="560" height="315"
              src="https://www.youtube.com/embed/CZ3Rn0OS_Dw" frameborder="0" allowfullscreen>

            </iframe>
          </div>

        </div>

      </div>

    </div>

  </div> <!-- /.about-us -->

  <?php //todo: UNCOMMENT kada postovi budu gotovi! ?>

  {{--<div class="section-home home-reasons">--}}

    {{--<div class="container">--}}

      {{--<div class="row">--}}

        {{--<h2 class="title-style-1">Latest news <span class="title-under"></span></h2>--}}

        {{--@foreach($posts as $post)--}}

          {{--<div class="col-md-6 col-sm-6">--}}

            {{--<a href="{{ $post->singleViewUrl() }}">--}}

              {{--<div class="reasons-col animate-onscroll fadeIn">--}}

                {{--<img src="images/reasons/we-fight-togother.jpg" alt="">--}}

                {{--<div class="reasons-titles">--}}

                  {{--<h3 class="reasons-title">{{ $post->title }}</h3>--}}

                {{--</div>--}}

                {{--<div class="on-hover hidden-xs">--}}
                  {{--{{ substr($post->body, 0, 800) }}--}}
                  {{--{{ strlen($post->body) > 700 ? '...' : '' }}--}}
                {{--</div>--}}

              {{--</div>--}}

            {{--</a>--}}

          {{--</div>--}}

        {{--@endforeach--}}

      {{--</div>--}}

    {{--</div>--}}

  {{--</div> <!-- /.home-reasons -->--}}

@endsection
