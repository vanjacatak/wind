@extends('layouts.main')

@section('title', '- About')

@section('content')

@include('partials._headerImage', [
'title' => 'About us',
])

  <div class="main-container">

    <div class="container">

      <div class="row fadeIn animated">

        <div class="col-md-6">

          <img src="images/aboutus2.jpg" alt="" class="img-responsive">

        </div>

        <div class="col-md-6">

          <h2 class="title-style-2">ABOUT WIND WATERSPORTS <span class="title-under"></span></h2>

          <p>
            Wind Watersports is not just a company or a job - it is a long term family tradition of
            working in the field of  water sports which started all the way in 1998.
          </p>
          <p>
            It all began in Baška, a small place on island Krk, when tourists where offered with banana,
            tube and waterski rides. That is how a humble offer of sports and recreational activities on
            Baška's beach was enriched with something completely new and attractive. Water sports soon
            became pretty popular, and took the throne of being something locals and tourists could not avoid.
            No later than 2000, a new boat was acquired and it was equipped specifically for parasailing rides,
            which made it one of the first boats of that kind along the Adriatic coast.
            That gave the opportunity for all the visitors to see the landscape from bird's eye view.
            As the years passed, parasailing became our specialty, and our rich experience inspired us
            to design, produce and offer our own products – parasails and professional equipment for it.
          </p>
          <p>
            Today we can say that we live of and live for the water sports during the entire year,
            we are developing and upgrading every day, we learn, we make mistakes, and in the end, we prosper.
            It is our wish to constantly  improve our products and services, and to strive to make water sports
            more secure all around Croatia, and therefore make them a quality touristic activity.
          </p>

          <p>
            <b>Wind Watersports</b>
          </p>

        </div>

      </div> <!-- /.row -->

    </div> <!-- /.about-us -->

  </div>
@endsection
