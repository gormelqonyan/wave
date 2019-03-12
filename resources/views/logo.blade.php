@extends('layouts.base')

@section('content')
    <main>
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.logo')</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row page-img">
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/1.png" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/1.png"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/2.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/2.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/3.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/3.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/4.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/4.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/5.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/5.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/6.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/6.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/7.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/7.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/10.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/10.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/11.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/11.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/logo/12.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/logo/12.jpg"></div></a>
                </div>
            </div>
        </div>


    </main>
    <div id="particles-js" class="particle"></div>

@endsection

@section('altlinks')


<!-- //js -->
<!-- simpleLightbox -->



@endsection
