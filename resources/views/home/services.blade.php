@extends('layouts.home')

@section('title','Services - ' .  $setting->title)
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
                                <h1>Our Services</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Our Services</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="services" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>WELCOME TO THE OUR BARBER SHOP</small>
                        <h3>OUR SERVICES</h3>
                        <hr class="grd1">
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                            non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_01.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>beard, mustache care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
                                at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_02.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>detailed feather cleaning</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_03.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>facial and skin care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_04.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>studio shots</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
                                at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_05.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>forming the beard</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_06.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>hair wash</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection