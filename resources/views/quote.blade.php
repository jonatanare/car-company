@extends('layouts.app')

@section('content')
@include('includes.header')

<div class="culmn">

    <section  class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>Reporte de Pagos</h2>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <h4 class="text-center">Tus mensualidades</h4>
                                    <div class="separator3"></div>
                                        <form id="formid">
                                            @foreach( $quotes as $quote)
                                            <div
                                                class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
    
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="mount" step="any" class="text-start">Precio del Vehículo</label>
                                                            <input type="number" value="{{ $quote->mount}}" class="form-control" name="mount" required="" disabled>
                                                        </div>
                                                    </div>
                                                </div>
    
    
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="termins">Término en meses</label>
                                                            <input type="number" step="any" value="{{ $quote->termins}}" class="form-control" name="termins"
                                                                required="" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="interests">Tasa de Intereses</label>
                                                            <input type="number" step="any" value="{{ $quote->interests}}" class="form-control" name="interests"
                                                                required="" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="initial_payment" class="text-start">Pago Inicial</label>
                                                            <input type="number" step="any" value="{{ $quote->initial_payment}}" class="form-control" name="initial_payment" required="" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Pagos Mensuales:</label> <h4> ${{ $quote->quote}}</h4>
                                                    </div>
                                                </div>
    
                                                <div class="">
                                                    <button class="btn btn-secundary btn-lg btn_main_trial_area">DESCARGAR Reporte</button>
                                                    <a href="{{ url('/estrena')}} " class="btn btn-default btn-atras">IR ATRAS</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of contact section -->

</div>

@endsection