@extends('layouts.base')
@section('title')
    {{$blog->locName()}}
@endsection
@section('content')

    <main>
        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('blog')}}">@lang('global.Blog')</a></li>
                    <li class="breadcrumb-item active">{{$blog->locName()}}</li>
                </ol>
            </nav>
        </div>

        <section class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-view">
                            <div class="blog-view-img">
                                <img src="{{asset('/images/posts/'.$blog->image)}}" rel="{{$blog->locName()}}">
                            </div>
                            <div class="blog-view-title">
                                <h4>{{$blog->locName()}}</h4>
                            </div>
                            <div class="blog-view-body">
                                <?= $blog->desc();?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-view-offer d-flex d-lg-block justify-content-between flex-wrap ">
                            @if(!empty($blogs))
                                @foreach($blogs as $blog1)
                                    <a href="{{route('blog-view',['url'=>$blog1->urls()])}}">
                                        <div class="blog-view-offer-item">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    <div class="blog-view-offer-item-img">
                                                        <img src="{{asset('/images/posts/'.$blog1->image)}}" rel="{{$blog1->locName()}}">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="blog-view-offer-item-body">
                                                        <h4>{{$blog1->locName()}}</h4>
                                                        <p> <?= $blog1->desc() ?></p>
                                                    </div>

                                                    <div class="blog-view-offer-item-footer d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <p class="ml-2">{{ date("d:m:Y", strtotime($blog1->created_at))}}</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                            <p class="ml-2">{{$blog1->view}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </section>



    </main>
    <div id="particles-js" class="particle"></div>

@endsection
