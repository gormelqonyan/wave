@extends('layouts.base')
@section('title')
    @lang('global.web_title')
@endsection
@section('metadesc')
    @lang('global.web_desc')
@endsection
@section('content')
    <main style="background: #222;">

        <section class="courses__banner" id="courses__banner">
            <div class="blackBg"></div>
            <h1 id="typed"></h1>
        </section>

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.Courses')</li>
                </ol>
            </nav>
        </div>

        <section class="courses__content py-4">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-around">
                    @if(!empty($lessons))
                        @foreach($lessons as $lesson)
                            <a href="{{route('lesson',['locale'=>\Illuminate\Support\Facades\App::getLocale(),'url'=>$lesson->urls()])}}" class="wow zoomIn" data-wow-offset="100">
                                <div class="courses-item">
                                    <div class="courses-show d-flex align-items-center">
                                        <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                        <p>@lang('global.view-more')</p>
                                    </div>
                                    <div class="courses-img">
                                        <img src="{{asset('images/categories/'.$lesson->image)}}" rel="{{$lesson->locName()}}" alt=" @lang('global.web_image_alt')">
                                    </div>
                                    <div class="courses-title">
                                        <p>{{$lesson->locName()}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- <div id="particles-js" class="particle"></div> -->
    </main>

@endsection
