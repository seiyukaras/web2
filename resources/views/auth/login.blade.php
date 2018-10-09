@extends('layouts.app')

@section('content')
<section class="pricing-grid page-section-ptb">
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="container">
    <div class="col-md-3"></div>
                    <div class="pricing-table col-md-6">
                        <div class="pricing-title">
                            <h2>Login</h2>
                            <span class="text-light-gray">Por favor, ingrese sus datos</span>
                        </div>
                        <div class="contact-form col-md-12 mb-60">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <div class="form-field">
                                <i class="fa fa-pencil"></i>
                                <input class="web placeholder{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Correo..." name="email" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-field">
                                <i class="fa fa-key"></i>
                                <input class="web placeholder{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Contraseña..." name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="pricing-button"><button class="button" type="submit">Acceder</button></div>
                        
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="col-md-12 mt-50">
                            <div class="pricing-icon">
                                <i class="glyph-icon flaticon-cake-piece-with-cream"></i>
                            </div>
                        </div>
                    </div>
    <div class="col-md-3"></div>
</div>
</form>
</section>
@endsection
