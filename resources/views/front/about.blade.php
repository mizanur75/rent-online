@extends('layouts.front.app')

@section('title', 'About')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/')}} ">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/about')}} "> About Us</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	


    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{asset('front/img/about-img.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 about-right">
                    <h1>Connected
                    with Large Network</h1>
                    <h4>We are here to listen from you deliver exellence</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
                    </p>
                    <a class="text-uppercase primary-btn" href="#">Get Details</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-about Area -->

    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Image Gallery that we like to share</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>					
            <div class="row">
                <div class="col-lg-4 single-gallery">
                    <a href="{{asset('front/img/g1.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g1.jpg')}}" alt=""></a>
                    <a href="{{asset('front/img/g4.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g4.jpg')}}" alt=""></a>
                </div>	
                <div class="col-lg-4 single-gallery">
                    <a href="{{asset('front/img/g2.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g2.jpg')}}" alt=""></a>
                    <a href="{{asset('front/img/g5.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g5.jpg')}}" alt=""></a>						
                </div>	
                <div class="col-lg-4 single-gallery">
                    <a href="{{asset('front/img/g3.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g3.jpg')}}" alt=""></a>
                    <a href="{{asset('front/img/g6.jpg')}}" class="img-gal"><img class="img-fluid" src="{{asset('front/img/g6.jpg')}}" alt=""></a>
                </div>				
            </div>
        </div>	
    </section>
    <!-- End image-gallery Area -->		

    <!-- Start reviews Area -->
    <section class="reviews-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Clientâ€™s Reviews</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>					
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Cody Hines</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Chad Herrera</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Andre Gonzalez</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Jon Banks</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Landon Houston</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Nelle Wade</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>																															
            </div>
        </div>	
    </section>
    <!-- End reviews Area -->			

    <!-- Start home-calltoaction Area -->
    <section class="home-calltoaction-area relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center section-gap">
                <div class="col-lg-8">
                    <h1>Experience Great Support</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
                <div class="col-lg-4 btn-left">
                    <a href="#" class="primary-btn">Reach Our Support Team</a>
                </div>
            </div>
        </div>	
    </section>
    <!-- End home-calltoaction Area -->	
@endsection