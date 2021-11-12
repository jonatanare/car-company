@extends('layouts.app')

@section('content')
@include('includes.header')

    <!--home Section -->
    <section id="home" class="home_estrena">
        <div class="overlay">
            <div class="home_skew_border">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>Our Clients Are Our First Priority</h3>
                                        <h1>ESTRENA CON <span class="car">CAR</span> <span class="company">COMPANY</span></h1>
                                        <div class="separator"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrooldown">
                    <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--End of home section -->

<div class="culmn">
    <section  class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>Calcula tus mensualidades</h2>
                            <div class="subtitle">
                                Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
                                quam nec.
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <div class="separator3"></div>
                                                <form action="{{ url('/quote') }}" method="post" id="formid">
                                                    @csrf
                                                    <div
                                                        class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
            
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="mount" class="text-start">Precio del Vehículo</label>
                                                                    <input type="number" step="0.1" class="form-control" name="mount" required="">
                                                                </div>
                                                            </div>
                                                        </div>
            
            
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="termins">Término en meses</label>
                                                                    <input type="number" step="0.1" class="form-control" name="termins"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="interests">Tasa de Intereses</label>
                                                                    <input type="number" step="0.1"  class="form-control" name="interests"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="initial_payment" class="text-start">Pago Inicial</label>
                                                                    <input type="number" step="0.1" class="form-control" name="initial_payment" required="">
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                        <div class="">
                                                            <button class="btn btn-lg btn_main_trial_area">CALCULAR</button>
                                                        </div>
                                                    </div>
                                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of contact section -->

    <section  class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>Contacta un Vendedor</h2>
                            <div class="subtitle">
                                Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
                                quam nec.
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <form action="#" id="formid">
                                        @csrf
                                        <div
                                            class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="First Name" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="7"
                                                    placeholder="Message"></textarea>
                                            </div>

                                            <div class="">
                                                <input type="submit" value="SEND MESSAGE" class="btn btn-lg btn_main_trial_area">
                                            </div>
                                        </div>
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