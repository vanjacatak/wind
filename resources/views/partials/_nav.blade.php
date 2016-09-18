<header class="main-header">


  <nav class="navbar navbar-static-top">

    <div class="navbar-top">

      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-xs-12">

            <ul class="list-unstyled list-inline header-contact">
              <li> <i class="fa fa-phone"></i> <a href="tel:+385 92 125 1507">+385 92 125 1507 </a> </li>
              <li> <i class="fa fa-envelope"></i>
                <a href="mailto:windwatersports@gmail.com">windwatersports@gmail.com</a>
              </li>
            </ul> <!-- /.header-contact  -->

          </div>

          <div class="col-sm-6 col-xs-12 text-right">

            <ul class="list-unstyled list-inline header-social">

              <li>
                <a href="https://www.facebook.com/windwatersports/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
              <li>
                <a href="https://www.youtube.com/channel/UCspnNzfukEcwN-IhfBaUlEQ" target="_blank">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
            </ul> <!-- /.header-social  -->

          </div>


        </div>
      </div>

    </div>

    <div class="navbar-main">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="index.html">
            <img src="images/logo/logo-small2.jpg" alt="">
          </a>

        </div>

        <div id="navbar" class="navbar-collapse collapse pull-right">

          <ul class="nav navbar-nav">

            <li><a class="{{ Request::is('/') ? 'is-active' : '' }}" href="/">HOME</a></li>
            <li><a class="{{ Request::is('about') ? 'is-active' : '' }}" href="/about">ABOUT</a></li>
            <?php //todo: uncomment when service part is done! ?>
            {{--<li class="has-child"><a href="#">SERVICES</a>--}}

              {{--<ul class="submenu">--}}
                {{--<li class="submenu-item"><a href="#">Causes list </a></li>--}}
                {{--<li class="submenu-item"><a href="#">Single cause </a></li>--}}
                {{--<li class="submenu-item"><a href="#">Single cause </a></li>--}}
                {{--<li class="submenu-item"><a href="#">Single cause </a></li>--}}
              {{--</ul>--}}

            {{--</li>--}}
            <?php //todo: uncomment when gallery is done! ?>
            {{--<li><a href="#">GALLERY</a></li>--}}
            <li><a class="{{ Request::is('contact') ? 'is-active' : '' }}" href="/contact">CONTACT</a></li>

          </ul>

          {{--@if (Auth::check())--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
              {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                  {{--aria-haspopup="true" aria-expanded="false">--}}
                  {{--Hello {{ Auth::user()->name }}--}}
                  {{--<span class="caret"></span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                  {{--<li><a href="{{ route('posts.index') }}">Posts</a></li>--}}
                  {{--<li><a href="#">Another action</a></li>--}}
                  {{--<li><a href="#">Something else here</a></li>--}}
                  {{--<li role="separator" class="divider"></li>--}}
                  {{--<li><a href="{{ route('logout') }}">Log out</a></li>--}}
                {{--</ul>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--@else--}}
            {{--<a class="btn btn-default" href="{{ route('login') }}">Login - maknut kasnije</a>--}}
          {{--@endif--}}

        </div> <!-- /#navbar -->

      </div> <!-- /.container -->

    </div> <!-- /.navbar-main -->


  </nav>

</header> <!-- /. main-header -->
