@extends('layouts.base')

@section('content')

    <main>
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.card')</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row page-img">
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/1.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/1.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/2.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/2.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/4.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/4.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/5.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/5.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/6.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/6.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/7.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/7.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/8.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/8.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/9.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/9.jpg"></div></a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="img/visit/10.jpg" data-lightbox="mygallery">
                        <div class="page-item"><img src="/lessons/img/visit/10.jpg"></div></a>
                </div>
            </div>
        </div>


    </main>
    <div id="particles-js" class="particle"></div>
@endsection

@section('script')

@endsection
