@extends('layouts.home')

@section('title','Barbers - ' .  $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords', $setting->keywords )

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{ asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>Our Barbers</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Our Barbers</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="barbers" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>MEET OUR BABRER TEAM</small>
                        <h3>OUR BARBERS</h3>
                    </div>
                </div><!-- end title -->

                <div class="row dev-list text-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{ asset('assets')}}/uploads/barber_team_01.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Soren Bo Bostian</h3>
                                <small>The Founder</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop Company.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{ asset('assets')}}/uploads/barber_team_03.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Bryan Saftler</h3>
                                <small>The Barber</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Market.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{ asset('assets')}}/uploads/barber_team_02.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-title">
                                <h3>Matthew Bayliss</h3>
                                <small>The Barber</small>
                            </div>
                            <!-- end title -->
                            <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Website.</p>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
