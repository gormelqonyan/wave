@extends('layouts.base')
@section('title')
    @lang('global.port_title')
@endsection
@section('metadesc')
    @lang('global.port_desc')
@endsection
@section('keywords')
    @lang('global.port_key')
@endsection
@section('content')
    <main>

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.Portfolio')</li>
                </ol>
            </nav>
        </div>

        <section class="portfolio my-4" id="portfolio">
            <h1 class="section__title py-2">
                <span>@lang('global.Our_portfolio')</span>
            </h1>

            <div class="container">
                <div class="about-info py-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="http://syshevskiydvor.ru/" >
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">сущевский двор</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/syshevskiydvor-min-min.jpg" >
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="http://tntesakan.am/">
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70" data-wow-delay="0.2s">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">TNTESAKAN</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/tntesakan-min.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="https://siongroup.am/">
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70" data-wow-delay="0.4s">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">SION GROUP</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/siongroup.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="https://anau.am/">
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70" data-wow-delay="0.6s">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">ANAU</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/anau-min-min.jpg">
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="http://tata-parikmakherski.ru/?fbclid=IwAR3_tpKjz3kJQMODd-PW8DA8Sh7bGh7LXkcZE-yxfU-ZEo7M2asbdxm-PdE">
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70" data-wow-delay="0.8s">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">TATA-PARIKMAKHERSKI</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/tata.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            <a href="http://syshevskiydvor.ru/">
                                <div class="portfolio-box wow zoomIn" data-wow-offset="70" data-wow-delay="1s">
                                    <div class="portfolio-box-hover d-flex"></div>
                                    <h4 class="m-auto text-center">car rental in germany</h4>
                                    <img alt="@lang('global.port_image_alt')" src="/lessons/img/screencapture-min-min.jpg">
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </main>
    <div id="particles-js" class="particle"></div>
@endsection
