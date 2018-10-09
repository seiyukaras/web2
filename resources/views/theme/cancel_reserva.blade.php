@extends('theme.main')
@section('title', 'Cancelar Reservacion')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(/images/bg/03.jpg);">
    <div class="container">
        <div class="row text-center intro-title">
            <h1 class="text-orange">Reservacionesn</h1>
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
<form method="POST" action="{{action('ReservaController@cancelReserva', $reserva)}}">
@csrf
{{ method_field('DELETE') }}
<section class="pricing-grid page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-separator">
                        <i class="glyph-icon flaticon-food-27"></i>
                    </div>
                    <h2 class="text-black"> <span class="text-orange">Cancelar</span> reservacion</h2>
                    <p>Puede cancelar o no la reservacion!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="pricing-table col-md-10">
            <div class="pricing-title">
                <span class="text-light-gray">Por favor, ingrese el por que se cancela</span>
            </div>
            <div class="row col-md-12">
                <span class="col-md-3 text-light-gray"><cite>Nombre</cite></span>
                <span class="col-md-3 text-light-gray"><cite>Correo</cite></span>
                <span class="col-md-2 text-light-gray"><cite>Teléfono</cite></span>
                <span class="col-md-2 text-light-gray"><cite>Día</cite></span>
                <span class="col-md-2 text-light-gray"><cite>Hora</cite></span>
            </div>
            <div class="row pricing-title col-md-12">
                <span class="col-md-3 text-light-gray">{{ $reserva->name }}</span>
                <span class="col-md-3 text-light-gray">{{ $reserva->email }}</span>
                <span class="col-md-2 text-light-gray">{{ $reserva->phone }}</span>
                <span class="col-md-2 text-light-gray">{{ $reserva->getDiaFormat() }}</span>
                <span class="col-md-2 text-light-gray">{{ $reserva->getHoraFormat() }}</span>
            </div>
            <div class="contact-form col-md-12 mb-60">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row form-field">
                        <i class="fa fa-pencil"></i>
                        <textarea class="input-message placeholder" placeholder="Comentario*" rows="7" name="message"></textarea>
                    </div>

                    <div class="pricing-button"><button class="button" type="submit" onclick="return confirm('Esta seguro que desea cancelar la RESERVACION?')">Cancelar Reservacion</button></div>
                        
                 </div>
                <div class="col-md-3"></div>
            </div>
            <div class="col-md-12 mt-50">
                <div class="pricing-icon">
                    <i class="glyph-icon flaticon-cake-piece-with-cream"></i>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<!--=================================
 reservation --> 
@endsection