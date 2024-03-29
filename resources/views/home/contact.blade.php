@extends('layouts.home')

@section('title','Contact - ' .  $setting->title)
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
                                <h1>Contact</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div class="row">
            <div class="col-md-6">
                <div id="contact" class="section wb">
                    <div class="container">
                        <div class="section-title row text-center">
                            <br> <br>
                            {!! $setting->contact !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="contact" class="section wb">
                    <div class="container">
                        <div class="section-title row text-center">

                            <div class="col-md-9 offset-md-2">
                                <small>LET'S MAKE AN CONTACT FOR YOUR LIFE</small>
                                <h3>Contact US</h3>
                            </div>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-md-9 offset-md-2">
                                <div class="contact_form">
                                    <div id="message"></div>
                                    @include('home.message')
                                    <form class="row" action="{{route('sendmessage')}}" method="post">
                                        @csrf
                                        <fieldset class="row row-fluid">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="name" id="name"
                                                       class="form-control"
                                                       placeholder="First Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="surname" id="surname" class="form-control"
                                                       placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" name="email" id="email" class="form-control"
                                                       placeholder="Your Email">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                       placeholder="Your Phone">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="subject" id="subject" class="form-control"
                                                       placeholder="Subject">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" name="message" id="message" rows="6"
                                                      placeholder="Give us more details.."></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button
                                                    class="btn btn-light btn-radius btn-brd grd1 effect-1 form-control"
                                                    type="submit" value="SEND" id="submit">
                                                    Gönder
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
        </div>
    </div>
@endsection
