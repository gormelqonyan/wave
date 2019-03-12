@extends('layouts.base')

@section('content')

    <main style="background: #222;">

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('web',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}">@lang('global.Courses')</a></li>
                    <li class="breadcrumb-item active">{{$lesson->name}}</li>
                </ol>
            </nav>
        </div>

        <section class="courses-about py-4">
            <div class="container">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
                     aria-multiselectable="true">

                    <ul class="list-unstyled d-flex justify-content-center pt-5 courses-svg">
                        <li>

                                <img src="{{asset('images/categories/'.$lesson->image)}}" alt="{{$lesson->locName()}}">

                        </li>


                    </ul>

                    <h2 class="text-center  py-4 px-3">{{$lesson->locName()}}</h2>

                    <hr class="mb-0">

                    <!-- Accordion card -->
                    @if(!empty($lesson->childrens))
                        @foreach($lesson->childrens as $children)
                            <div class="card courses-viev-accordion">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="heading4">
                                    <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse{{$children->id}}" aria-expanded="true"
                                       aria-controls="collapse4">
                                        <h4 class="mb-0 py-2 text-center">
                                            {{$children->locName()}}
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </h4>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapse{{$children->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                                    <div class="card-body py-3">
                                        <h5 class="text-center">@lang('global.during-lesson')</h5>
                                        <?= $children->desc(); ?>
                                    </div>
                                </div>
                            </div>
                    <!-- Accordion card -->
                        @endforeach
                    @endif



                </div>
                <!--/.Accordion wrapper-->
            </div>
        </section>


    </main>

@endsection
@section('script')
    <script type="text/javascript" src="/lessons/js/plugin/typed.min.js"></script>
@endsection
