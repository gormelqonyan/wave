@extends('layouts.base')
@section('title')
    @lang('global.bann_title')
@endsection
@section('metadesc')
    @lang('global.bann_desc')
@endsection
@section('keywords')
    @lang('global.bann_key')
@endsection
@section('content')

    <main>
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.banner')</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row page-img">
                <div class="col-sm-6 col-lg-4">
                    <a href="img/banner/1.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/banner/1.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/banner/2.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/banner/2.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/banner/3.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/banner/3.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/banner/4.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/banner/4.jpg"></div></a>
                </div>
            </div>
        </div>


    </main>
    <div id="particles-js" class="particle"></div>
@endsection

@section('altlinks')

@endsection
