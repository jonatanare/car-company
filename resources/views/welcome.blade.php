@extends('layouts.app')

@section('content')

<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>
<div class="culmn">
    @include('includes.header')




    <!--home Section -->
    <section id="home" class="home">
        <div class="overlay">
            <div class="home_skew_border">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>Our Clients Are Our First Priority</h3>
                                        <h1>WELCOME TO <span class="car">CAR</span> <span class="company">COMPANY</span></h1>
                                        <div class="separator"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley
                                            of type and scrambled it to make a type specimen book.</p>
                                        <div class="home_btn">
                                            <a href="{{ url('/estrena')}} " class="btn btn-lg m_t_10">¡ESTRENA UN AUTO!</a>
                                            <a href="#" class="btn btn-default">ARRENDAMIENTO</a>
                                        </div>

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


    <!--feature section -->
    <section id="feature" class="feature sections">
        <div class="container">
            <div class="row">
                <div class="main_feature text-center">

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon">
                                <i class="fa fa-clone"></i>
                            </div>

                            <h4>SEGURIDAD</h4>
                            <div class="separator3"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                Lorem Ipsum has been the industry.</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon">
                                <i class="fa fa-heart-o"></i>
                            </div>

                            <h4>CONFIANZA</h4>
                            <div class="separator3"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                Lorem Ipsum has been the industry.</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>
                            <h4>ATENCIÓN 24/7</h4>
                            <div class="separator3"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                Lorem Ipsum has been the industry.</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon">
                                <i class="fa fa-comments-o"></i>
                            </div>

                            <h4>SOPORTE GRATIS</h4>
                            <div class="separator3"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                Lorem Ipsum has been the industry.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End of container -->
    </section>
    <!--End of feature Section -->
    <hr />


    <!-- History section -->
    <section id="history" class="history sections">
        <div class="container">
            <div class="row">
                <div class="main_history">
                    <div class="col-sm-6">
                        <div class="single_history_img">
                            <img src="{{asset('/images/nosotros.jpg')}}" alt="Nuestra Compañia" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single_history_content">
                            <div class="head_title">
                                <h2>NOSOTROS</h2>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal
                                distribution of letters, as opposed to using 'Content here, content here', making it
                                look like readable English. Many desktop publishing packages and web page editors
                                now use
                                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>

                            <a href="#" class="btn btn-lg">LEER MÁS</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of row -->
        </div>
        <!--End of container -->
    </section>
    <!--End of history -->


    <!-- service Section -->
    <section id="service" class="service">
        <div class="container-fluid">
            <div class="row">
                <div class="main_service">
                    <div class="col-md-6 col-sm-12 no-padding">

                        <div class="single_service single_service_text text-right">
                            <div class="head_title">
                                <h2>OUR SERVICES</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">

                                        <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                            <article class="single_service_right_text">
                                                <h4>AUTOS NUEVOS</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->

                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">

                                        <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                            <article class="single_service_right_text">
                                                <h4>FINANCEAMIENTO</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->

                                <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                    <div class="row">

                                        <div
                                            class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1 margin-bottom-20">
                                            <article class="single_service_right_text">
                                                <h4>MENSUALIDADES</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ip sum has been the industry's standard dummy text ever.
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-sm-1 col-xs-1">
                                            <figure class="single_service_icon">
                                                <i class="fa fa-heart"></i>
                                            </figure><!-- End of figure -->
                                        </div>
                                    </div>
                                </div><!-- End of col-sm-12 -->

                            </div>
                        </div>
                    </div><!-- End of col-sm-6 -->

                    <div class="col-md-6 col-sm-12 no-padding">
                        <figure class="single_service single_service_img">
                            <div class="overlay-img"></div>
                            <img src="{{asset('/images/services.jpg')}}" alt="" />
                        </figure><!-- End of figure -->
                    </div><!-- End of col-sm-6 -->

                </div>
            </div><!-- End of row -->
        </div><!-- End of Container-fluid -->
    </section><!-- End of service Section -->


    {{-- <section id="portfolio" class="portfolio sections">
        <div class="container-fluid">
            <div class="row">
                <div class="main_portfolio">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h2>RECENT WORKS</h2>
                            <div class="subtitle">
                                It has survived not only five centuries, but also the leap scrambled it to make a
                                type.
                            </div>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="work_menu text-center">
                        <div id="filters" class="toolbar mb2 mt2">
                            <button class="btn-md fil-cat filter active" data-filter="all">ALL</button>/
                            <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">WEB
                                DESIGN</button>/
                            <button class="btn-md fil-cat filter" data-rel="design" data-filter=".design">PRINT
                                DESIGN</button>/
                            <button class="btn-md fil-cat filter" data-rel="flyers"
                                data-filter=".flyers">ANIMATION</button>/
                            <button class="btn-md fil-cat filter" data-rel="bcards"
                                data-filter=".bcards">ART</button>/
                            <button class="btn-md fil-cat filter" data-rel="photo"
                                data-filter=".photo">PHOTOGRAPHY</button>/
                            <button class="btn-md fil-cat filter" data-rel="video"
                                data-filter=".video">VIDEO</button>
                        </div>

                    </div>

                    <div style="clear:both;"></div>
                    <div id="portfoliowork">
                        <div class="single_portfolio tile scale-anm web grid-item-width2 video">
                            <img src="assets/images/pf1.jpg" alt="" />
                            <a href="assets/images/pf1.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards photo">
                            <img src="assets/images/pf2.jpg" alt="" />
                            <a href="assets/images/pf2.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm web video">
                            <img src="assets/images/pf3.jpg" alt="" />
                            <a href="assets/images/pf3.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm web photo">
                            <img src="assets/images/pf4.jpg" alt="" />
                            <a href="assets/images/pf4.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards design">
                            <img src="assets/images/pf5.jpg" alt="" />
                            <a href="assets/images/pf5.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                        <div class="single_portfolio tile scale-anm flyers video design">
                            <img src="assets/images/pf6.jpg" alt="" />
                            <a href="assets/images/pf6.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm photo flyers">
                            <img src="assets/images/pf7.jpg" alt="" />
                            <a href="assets/images/pf7.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                        <div class="single_portfolio tile scale-anm bcards video">
                            <img src="assets/images/pf8.jpg" alt="" />
                            <a href="assets/images/pf8.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div style="clear:both;"></div>
                </div>
            </div>
        </div><!-- End off container -->
    </section> <!-- End off Work Section --> --}}



    <!-- Study Section -->
    <section id="calcular" class="study text-center wow fadeIn" data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="container">
            <div class="row">
                <div class="main_study_area sections">
                    <div class="head_title text-center">
                        <h2>ESTRENA UN AUTO</h2>
                        <div class="subtitle">
                            A brief story about how this process works, keep an eye till the end.
                        </div>
                        <div class="separator"></div>
                    </div>
                    <div class="single_study_content">
                        <div class="col-sm-7">
                            <div class="single_study_slid_area">

                                <div class="single_study_text">
                                    <div class="study_slider">
                                        <div class="item">
                                            <div class="s_study_icon">
                                                <i class="fa fa-lightbulb-o"></i>
                                            </div>
                                            <h4>Cotiza tu auto</h4>
                                            <div class="separator3"></div>
                                                <form action="{{ url('/')}}" method="post" id="formid">
                                                    @csrf
                                                    <div
                                                        class="">
            
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="mount" class="text-start">Precio del Vehículo</label>
                                                                    <input type="number" class="form-control" name="mount" required="">
                                                                </div>
                                                            </div>
                                                        </div>
            
            
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="termins">Término en meses</label>
                                                                    <input type="number" class="form-control" name="termins"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="interests">Tasa de Intereses</label>
                                                                    <input type="number" class="form-control" name="interests"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="initial_payment" class="text-start">Pago Inicial</label>
                                                                    <input type="number" class="form-control" name="initial_payment" required="">
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


                        <div class="single_study_right_img">
                            <div class="col-sm-5">
                                <div class="single_study_img">
                                    <img src="{{asset('/images/car-keys.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End off row -->
        </div><!-- End off Container -->
    </section><!-- End off Study Section -->
  


    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>Conctactanos</h2>
                            <div class="subtitle">
                                Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
                                quam nec.
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="main_contact_info">
                                    <div class="row">
                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>Dirección</h3>
                                                        <h4>Av. La Luna, Cancun, Quintana Roo. #77500</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>LLAMANOS</h3>
                                                        <h4>+ 880 168 109 1425</h4>
                                                        <h4>+ 0216809142</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>EMAIL</h3>
                                                        <h4>jobs@talentscode.com</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
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

    <section id="trial" class="trial text-center wow fadeIn" data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="main_trial_area">
            <div class="video_overlay sections">
                <div class="container">
                    <div class="row">
                        <div class="main_trial">
                            <div class="col-sm-12">
                                <h2>Estrena un Auto <span>¡AHORA!</span></h2>
                                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis neque doloribus est. !</h4>
                                <div class="home_btn">
                                    <a href="{{ url('/estrena')}} " class="btn btn-lg m_t_10">¡ESTRENA UN AUTO!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of Trial section -->

    @include('includes.footer')
</div>

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
@endsection