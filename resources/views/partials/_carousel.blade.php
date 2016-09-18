<!-- Carousel ================================================== -->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
<?php //todo: kada odlučimo što ćemo sa textom na slideru, promjeniti ga i eventualno staviti neki link.. za sada
//todo: komentiran ?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#homeCarousel" data-slide-to="1"></li>
    <li data-target="#homeCarousel" data-slide-to="2"></li>
    <li data-target="#homeCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">

    <div class="item active">

      <img src="images/slider/wind-slider-1.jpg" alt="">

      <div class="container">

        <div class="carousel-caption">


        </div> <!-- /.carousel-caption -->

      </div>

    </div> <!-- /.item -->


    <div class="item ">

      <img src="images/slider/wind-slider-8.jpg" alt="">

      <div class="container">

        <div class="carousel-caption">

          {{--<h2 class="carousel-title bounceInDown animated slow">Enjoy watersports in Baška</h2>--}}

        </div> <!-- /.carousel-caption -->

      </div>

    </div> <!-- /.item -->


    <div class="item ">

      <img src="images/slider/wind-slider-3.jpg" alt="">

      <div class="container">

        <div class="carousel-caption">

          {{--<h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>--}}
          {{--<h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>--}}
          {{--<a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>--}}

        </div> <!-- /.carousel-caption -->

      </div>

    </div> <!-- /.item -->

    <div class="item ">

      <img src="images/slider/wind-slider-6.jpg" alt="">

      <div class="container">

        <div class="carousel-caption">

          {{--<h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>--}}
          {{--<h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>--}}
          {{--<a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>--}}

        </div> <!-- /.carousel-caption -->

      </div>

    </div> <!-- /.item -->

  </div>

  <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
    <span class="fa fa-angle-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
    <span class="fa fa-angle-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div><!-- /.carousel -->
