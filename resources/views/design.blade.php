@extends('layouts.base')

@section('content')
    <main>
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.3d')</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row page-img">
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/1.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/1.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/2.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/2.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/3.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/3.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/4.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/4.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/5.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/5.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/6.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/6.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/7.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/7.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/8.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/8.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/3d/9.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/3d/9.jpg"></div></a>
                </div>
            </div>
        </div>


    </main>
    <div id="particles-js" class="particle"></div>
@endsection

@section('altlinks')

@endsection
