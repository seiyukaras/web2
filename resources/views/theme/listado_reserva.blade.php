@extends('theme.main')
@section('title', 'Listado de Reservaciones')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(/images/bg/03.jpg);">
    <div class="container">
        <div class="row text-center intro-title">
            <h1 class="text-orange">Reservaciones</h1>
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
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-separator">
                        <i class="glyph-icon flaticon-food-27"></i>
                    </div>
                    <h2 class="text-black"> <span class="text-orange">Libro de</span> reservaciones</h2>
                    <p>Puede confirmar, cancelar o eliminar reservaciones antiguas!</p>
                </div>
            </div>
        </div>
        <form action="{{ action('ReservaController@listReserva')}}" method="get">
        <div class="contact-form">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 flex content-between">
                    <div class="form-field" id="datepickersearch" style="margin-right: 5px;">
                        <i class="fa fa-calendar add-on"></i>
                        <input data-format="yyyy/MM/dd" type="text" placeholder="Buscar por día..." class="web placeholder" name="searchday">
                    </div>
                    <button class="button btn btn-fab btn-round" type="submit"><i class="fa fa-search add-on"></i></button>
                </div>
            </div>
        </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover table-striped border-t-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Teléfono</th>
                        <th>Personas</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservas as $reserva)
                        <tr>
                            <td class="align-middle">{{ $reserva->id }}</td>
                            <td class="align-middle">{{ $reserva->name }}</td>
                            <td class="align-middle">{{ $reserva->email }}</td>
                            <td class="align-middle">{{ $reserva->getDiaFormat() }}</td>
                            <td class="align-middle">{{ $reserva->getHoraFormat() }}</td>
                            <td class="align-middle">{{ $reserva->phone }}</td>
                            <td class="text-center align-middle">{{ $reserva->personas }}</td>
                            <td class="text-center align-middle">
                                <div class="flex content-between">
                                    @if ($reserva->estado == 1)
                                    <form action="{{action('ReservaController@confirmReserva', $reserva)}}" method="post">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <button type="submit" data-toggle="tooltip" title="Confirmar reservación" class="button btn btn-fab btn-round" style="margin-right: 5px;"><i class="fa fa-check-square-o fa-lg"></i></button>
                                    </form>
                                    <a data-toggle="tooltip" title="Cancelar reservación" class="button btn btn-fab btn-round" href="{{ route('cancelarReserva', ['id' => $reserva->id]) }}" style="margin-right: 5px;"><i class="fa fa-remove fa-lg"></i></a>
                                    @endif
                                    @if ($reserva->estado == 2)
                                    <form action="{{action('ReservaController@destroy', $reserva)}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button data-toggle="tooltip" class="button btn btn-fab btn-round" title="Eliminar reservación" onclick="return confirm('Esta seguro que desea cancelar la RESERVACION?')" type="submit">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $reservas->links() }}
    </div>
</section>
<!--=================================
 reservation --> 
@endsection