@extends('layouts.base')

@section('content')
@if(session()->has('SendMail'))
                <div class="alert alert-success">
                    <script>alert('Նամակը Ուղղարկված է։ Շնորհակալություն'); </script>
                </div>
        @endif



<main>


    <section class="banner" id="banner">
        <div class="swiper-container baner">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex">
                    <img src="/lessons/img/slide1.jpg" class="w-100">
                    <div class="m-auto sliderText">
                        ÆÜîºðÜºî ¶àì²¼¸ Î²ÚøºðÆ ²è²æÊ²Ô²òàôØ SEO ²è²æÊ²Ô²òàôØ
                    </div>
                </div>
                <div class="swiper-slide d-flex">
                    <img src="/lessons/img/slide1.jpg" class="w-100">
                    <div class="m-auto sliderText">
                        ÆÜîºðÜºî ¶àì²¼¸ Î²ÚøºðÆ ²è²æÊ²Ô²òàôØ SEO ²è²æÊ²Ô²òàôØ
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <div class="d-flex justify-content-center flex-wrap align-items-center py-2 py-md-3">
        <a href="#" class="button call-order mx-2 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center buttonIcon mr-2">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            @lang('global.order-site')
        </a>
        <a href="#" class="button call-order mx-2 d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#basicExampleModal">
            <div class="d-flex justify-content-center align-items-center buttonIcon mr-2">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            @lang('global.order-call')
        </a>
    </div>

    <section class="about py-2 py-md-4" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow slideInLeft" data-wow-offset="10">
                    <iframe width="100%" height="315px" src="https://www.youtube.com/embed/YdQyHaki7Gk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 wow slideInRight" data-wow-offset="10">
                    <div style="height: 315px; background-color: rgba(255,255,255,.5); padding: 1rem;">
                        <p class="about__text">
                            @lang('global.waveAbout')
                        </p>
                        <div class="about__text__wave" >
                            <h2>@lang('global.waveAboutRespect')</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="my-2">

        <div class="container">
            <h1 class="text-center service__title">
                <span>@lang('global.CreateWebPage')</span>
            </h1>


            <div class="row my-5">
                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon1.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">@lang('global.createLendingTitle')</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">@lang('global.createLendingText')</p>

                            <hr>

                            <h5>@lang('global.start') 50.000 @lang('global.price')</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon2.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">@lang('global.createCorporateTitle')</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">@lang('global.createCorporateText')</p>

                            <hr>

                            <h5>@lang('global.start') 100.000 @lang('global.price')</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon3.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">@lang('global.createSaleTitle')</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">@lang('global.createSaleText')</p>

                            <hr>

                            <h5>@lang('global.start') 150.000 @lang('global.price')</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade ">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon4.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">WordPress CMS</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">@lang('global.createWordpresText')</p>


                            <h5>@lang('global.start') 200.000 @lang('global.price')</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="service py-2 py-md-4" id="service">
        <div class="container">
            <h2 class="text-center service__title">
                <span>@lang('global.Our_services')</span>
            </h2>

            <div class="row py-2 py-md-4">
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70">
                        <h3>@lang('global.Web_services')</h3>
                        <p>@lang('global.Web_dev')</p>
                        <p>@lang('global.Web_design')</p>
                        <p>@lang('global.Site_service')</p>
                        <p>@lang('global.Technical_audit')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.1s">
                        <h3>@lang('global.SEO_optimization')</h3>
                        <p>@lang('global.Key_words')</p>
                        <p>@lang('global.Semantic_core')</p>
                        <p>@lang('global.Internal_optimization')</p>
                        <p>@lang('global.External_optimization')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.2s">
                        <h3>@lang('global.Internet_marketing')</h3>
                        <p>@lang('global.Social_media_marketing')</p>
                        <p>@lang('global.Marketing_analysis')</p>
                        <p>@lang('global.Internet_advertising')</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.3s">
                        <h3>@lang('global.Time_monitoring')</h3>
                        <p>@lang('global.Host_server')</p>
                        <p>@lang('global.Site_recovery')</p>
                        <p>@lang('global.Domain_registration')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.4s">
                        <h3>@lang('global.Graphic_design')</h3>
                        <p><a href="logoPage.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>@lang('global.logo')</a></p>
                        <p><a href="visit.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>@lang('global.card')</a></p>
                        <p><a href="3ddesign.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>@lang('global.3d')</a></p>
                        <p><a href="banner.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>@lang('global.Banner_creation')</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.5s">
                        <h3>@lang('global.IOS_Android')</h3>
                        <p><a href="https://play.google.com/store/apps/details?id=com.birthright"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Birthright Connect</a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=com.hikearmenia"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>HIKE Armenia</a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=com.learnbat.showme"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Show Me Interactive</a></p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="blog-top" id="blog-top">
        <h2 class="text-center service__title">
            <span>@lang('global.news')</span>
        </h2>
        <div class="container py-4">
            <div class="row justify-content-around">
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <a href="{{route('blog')}}" class="button blog-button">@lang('global.view-more')</a>
    </section>

    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('global.order-call')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1">@lang('global.Your_name')</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="form2" class="form-control phone">
                        <label for="form2">@lang('global.Your_email')</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button">@lang('global.send')</button>
                </div>
            </div>
        </div>
    </div>

    <a class="call-us" href="tel:+37477789786">
        <div id="callme">
            <div id="callmeMain">
                <i class="fa fa-phone m-auto"></i>
            </div>
        </div>
    </a>


</main>
<div id="particles-js" class="particle"></div>

@endsection
