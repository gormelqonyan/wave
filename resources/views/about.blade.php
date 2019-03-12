@extends('layouts.base')

@section('content')


    <main>

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage',['locale'=>\Illuminate\Support\Facades\App::getLocale()])}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">@lang('global.About')</li>
                </ol>
            </nav>
        </div>

        <section class="aboutUs my-4" id="aboutUs">
            <h1 class="section__title py-2">
                <span>@lang('global.About')</span>
            </h1>

            <div class="container">
                <div class="about-info py-4">
                    <p>@lang('global.About_us_text1')</p>
                    <p>@lang('global.About_us_text2')</p>
                </div>
            </div>
        </section>

        <section class="team my-4" id="team">
            <h2 class="section__title py-2"><span>@lang('global.Special_team')</span></h2>
            <div class="container">
                <div class="swiper-container team-carusel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="/lessons/img/Arshak.jpg">
                                </div>
                                <div class="team-name text-center py-2">
                                    <h5>²ñß³Ï ´³µ³Û³Ý</h5>
                                    <p>¶ÉË³íáñ ïÝûñ»Ý</p>
                                </div>
                                <div class="team-about">
                                    <p>Ô»Ï³í³ñáõÙ »Ù ÁÝÏ»ñáõÃÛ³Ý ÁÝ¹Ñ³Ýáõñ ·áñÍáõÝ»áõÃÛáõÝÁ: ÆÝÓ Ñ³Ù³ñ Ï³ñ¨áñ ¿, áñ ³Ù»Ý µ³Ý ³ßË³ïÇ Þí»ó³ñ³Ï³Ý Å³Ù³óáõÛóÝ»ñÇ ÝÙ³Ý: ²í³ñï»É »Ù èáõë³Ï³Ý î»ËÝÇÏ³Ï³Ý ÆÝëïÇïáõïÁ §ÆÝýáñÙ³óÇáÝ Ñ³Ù³Ï³ñ·»ññ ¨ ï»ËÝáÉá·Ç³Ý»ñ¦ Ù³ëÝ³·ÇïáõÃÛ³Ùµ:</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="/lessons/img/Vahag.jpg">
                                </div>
                                <div class="team-name text-center py-2">
                                    <h5>ì³Ñ³·Ý Â³¹»õáëÛ³Ý</h5>
                                    <p>¶ÉË³íáñ ïÝûñ»ÝÇ ï»Õ³Ï³É</p>
                                </div>
                                <div class="team-about">
                                    <p>²í³ñï»É »Ù üñ³ÝÏýáõñ¹Ç ÚáÑ³Ý ìáÉýñ³Ý· ¶ÛáÃ»Ç ³Ýí³Ý Ñ³Ù³Éë³ñ³ÝÁ §îÝï»ë³·ÇïáõÃÛáõÝ¦ Ù³ëÝ³·ÇïáõÃÛ³Ùµ: Ø»Í ÷áñÓ áõÝ»Ù ³ÝÓÝ³Ï³½ÙÇ Ï³é³í³ñÙ³Ý Ñ³ñóáõÙ: WAVE-IT-áõÙ ½µ³ÕíáõÙ »Ù ïÝï»ë³Ï³Ý ·áñÍáõÝ»ÝáõÃÛ³Ý ¨ ³Ýíï³Ý·áõÃÛ³Ý Ï³é³í³ñÙ³Ùµ:ë</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="/lessons/img/Violeta.jpg">
                                </div>
                                <div class="team-name text-center py-2">
                                    <h5>ìÇáÉ»ï àõñ³½³»í³</h5>
                                    <p>¶ÉË³íáñ Ù³ñù»ÃáÉá·</p>
                                </div>
                                <div class="team-about">
                                    <p>WAVE-IT ÁÝÏ»ñáõÃÛáõÝáõÙ ½µ³ÕíáõÙ »Ù ëáóÇ³É³Ï³Ý ó³Ýó»ñáõÙ Ñ³×³Ëáñ¹Ý»ñÇ Ý³Ë³·Í»ñÇ ³é³çË³Ë³óÙ³Ùµ, ÏáÝï»Ýï Ý³Ë³·Í»ñÇ ëï»ÕÍÙ³Ù³µ, ï³ñµ»ñ áõÕÕáõÃÛáõÝÝ»ñáí ï»ùëï»ñÇ Ùß³ÏÙ³Ùµ, ëï»ÕÍáõÙ »Ù ·áí³½¹ ï³ñµ»ñ Ñ³ñÃ³ÏÝ»ñáõÙ</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="/lessons/img/Arshak.jpg">
                                </div>
                                <div class="team-name text-center py-2">
                                    <h5>²ñß³Ï ´³µ³Û³Ý</h5>
                                    <p>¶ÉË³íáñ ïÝûñ»Ý</p>
                                </div>
                                <div class="team-about">
                                    <p>Ô»Ï³í³ñáõÙ »Ù ÁÝÏ»ñáõÃÛ³Ý ÁÝ¹Ñ³Ýáõñ ·áñÍáõÝ»áõÃÛáõÝÁ: ÆÝÓ Ñ³Ù³ñ Ï³ñ¨áñ ¿, áñ ³Ù»Ý µ³Ý ³ßË³ïÇ Þí»ó³ñ³Ï³Ý Å³Ù³óáõÛóÝ»ñÇ ÝÙ³Ý: ²í³ñï»É »Ù èáõë³Ï³Ý î»ËÝÇÏ³Ï³Ý ÆÝëïÇïáõïÁ §ÆÝýáñÙ³óÇáÝ Ñ³Ù³Ï³ñ·»ññ ¨ ï»ËÝáÉá·Ç³Ý»ñ¦ Ù³ëÝ³·ÇïáõÃÛ³Ùµ:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
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



    </main>
    <div id="particles-js" class="particle"></div>

@endsection
