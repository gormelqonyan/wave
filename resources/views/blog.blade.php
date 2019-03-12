@extends('layouts.base')

@section('content')

    <main>
        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">´Éá·</li>
                </ol>
            </nav>
        </div>

        <div class="container py-4">
            <div class="row justify-content-around">
                @if(!empty($blogs))
                    @foreach($blogs as $blog)

                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <a href="{{route('blog-view',['locale'=>\Illuminate\Support\Facades\App::getLocale(),'url'=>$blog->urls()])}}">
                                <div class="blog-box">
                                    <div class="blog-img">

                                        <img src="{{asset('/images/posts/'.$blog->image)}}">
                                    </div>
                                    <div class="blog-body">
                                        <div class="blog-title">
                                            <h4 class="text-center">{{$blog->locName()}}</h4>
                                        </div>
                                        <div class="blog-title">
                                            <p><?= substr($blog->desc(),0 , 200); ?>...</p>
                                        </div>
                                    </div>
                                    <div class="blog-footer d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p class="ml-2">{{ date("d:m:Y", strtotime($blog->created_at))}}</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <p class="ml-2">{{$blog->view}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif


            </div>
            <div class="row justify-content-around">
                {{$blogs->links()}}
            </div>
        </div>





    </main>
    <div id="particles-js" class="particle"></div>

@endsection
