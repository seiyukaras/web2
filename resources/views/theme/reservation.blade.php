@extends('theme.main')
@section('title', 'Reservation')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
 <div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">Reservation</h1>
      <p class="text-white">Make online reservation</p>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="#">reservation</a> <i class="fa fa-angle-double-right"></i></li>
        <li><span>Reservation form</span></li>
     </ul>
    </div>
  </div>
</div>
 
 <!--=================================
 intro bg -->

<!--=================================
 reservation -->
<form class="form-horizontal" action="{{ action('ReservaController@createReserva') }}" method="post">
@csrf
<section class="reservation">
 <div class="page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="section-title text-center">
      <div class="title-separator">
     <i class="glyph-icon flaticon-food-27"></i>
      </div>
        <h2> <span class="text-orange">Make </span> Reservation</h2>
        <p>We provide free, secure and instantly confirmed online reservation.</p>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-10  col-lg-offset-1">
         <div class="contact-form">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-pencil"></i>
                <input class="web placeholder{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Nombre..." name="name" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-phone"></i>
                <input class="web placeholder{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" placeholder="Teléfono..." name="phone" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-envelope-o"></i>
                <input class="web placeholder{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Correo..." name="email" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="datepicker">
                <i class="fa fa-calendar add-on"></i>
                <input data-format="yyyy/MM/dd" type="text" placeholder="Seleccione el Día..." class="web placeholder{{ $errors->has('dia') ? ' is-invalid' : '' }}" name="dia" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dia') }}</strong>
                                    </span>
                                @endif
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="timepicker">
                <i class="fa fa-clock-o icon-time add-on"></i>
                <input data-format="hh:mm:ss" type="text" placeholder="Seleccione la Hora..." class="web placeholder{{ $errors->has('hora') ? ' is-invalid' : '' }}" name="hora" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hora') }}</strong>
                                    </span>
                                @endif
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                  <i class="fa fa-user"></i>
                  <input class="web placeholder{{ $errors->has('personas') ? ' is-invalid' : '' }}" type="text" placeholder="Cantidad de Personas..." name="personas" required>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('personas') }}</strong>
                                    </span>
                                @endif
                 </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
              <div class="form-submit mt-10 mb-30 text-center">
                 <button class="button uppercase" type="submit">Reservar una mesa</button>
              </div>
              </div>
            </div>
            <div class="bottom-text text-center">You can also call : + <span class="text-orange"><strong> (+53) 22669336</strong></span> to make a reservation.</div>
            </div> 
      </div>
   </div>
  </div>
 </div>
</section>
</form>
<!--=================================
 reservation --> 
@endsection