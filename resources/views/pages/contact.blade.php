@extends('layouts.main')

@section('title', '- Contact')

@section('content')

@include('partials._headerImage', [
'title' => 'Contact us',
])


<div class="main-container fadeIn animated">

    <div class="container">

      <div class="row">

        <div class="col-md-7 col-sm-12 col-form">

          <h2 class="title-style-2">CONTACT US <span class="title-under"></span></h2>

          <form action="php/mail.php" class="contact-form ajax-form">

            <div class="row">

              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name*" required>
              </div>

              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
              </div>

            </div>

            <div class="form-group">
              <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
            </div>

            <div class="form-group alerts">

              <div class="alert alert-success" role="alert">

              </div>

              <div class="alert alert-danger" role="alert">

              </div>

            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right">Send message</button>
            </div>

            <div class="clearfix"></div>

          </form>

        </div>

        <div class="col-md-4 col-md-offset-1 col-contact">

          <h2 class="title-style-2"> WIND WATERSPORTS CONTACTS <span class="title-under"></span></h2>
          <p>
            If you have any questions, feel free to contact us.
          </p>

          <div class="contact-items">

            <ul class="list-unstyled contact-items-list">
              <li class="contact-item">
                <span class="contact-icon">
                  <i class="fa fa-map-marker"></i>
                </span>
                Dvori Narca 4, Baška, Croatia
              </li>
              <li class="contact-item">
                <span class="contact-icon">
                  <i class="fa fa-phone"></i>
                </span>
                +385 92 125 1507
              </li>
              <li class="contact-item">
                <span class="contact-icon">
                  <i class="fa fa-envelope"></i>
                </span>
                windwatersports@gmail.com
              </li>
            </ul>
          </div>



        </div>

      </div> <!-- /.row -->


    </div>



  </div>

  <div id="contact-map" class="contact-map">

  </div>
@endsection

@section('scripts')

  <!-- Google map  -->
  <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places&key=AIzaSyCHXOGjFGt8q0XYl7MAN_Nx2pqnkvcea6E"
    type="text/javascript"></script>

@endsection
