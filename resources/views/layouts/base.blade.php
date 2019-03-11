<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <!--Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/style.min.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/animate.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/plugin/lightbox.min.css">


    <link rel="stylesheet" type="text/css" href="/lessons/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/lessons/css/main.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/header.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/menuBtn.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/call.css">
    <link rel="stylesheet" type="text/css" href="/lessons/css/responsive.css">
    @yield('css')

</head>
<body>

<header id="header" class="header active py-2">
    <nav class="container ">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{route('mainpage')}}">
                <div class="logo">
                    <img src="/lessons/img/logo.png">
                </div>
            </a>


            <ul class="d-none d-lg-flex menu">
                <li><a href="{{route('mainpage')}}">@lang('global.Home')</a></li>
                <li><a href="{{route('web')}}">¸³ëÁÝÃ³óÝ»ñ </a></li>
                <li><a href="{{route('about')}}">Ø»ñ Ø³ëÇÝ</a></li>
                <li><a href="{{route('portfolio')}}">äáñïýáÉÇá</a></li>
                <li><a href="{{route('blog')}}">´Éá·</a></li>
                <li><a href="{{route('contact')}}">Î³å</a></li>
            </ul>

            <div class="btn-group">
                <!--Dropdown primary-->
                <div class="dropdown">
                    <!--Trigger-->
                    <button class="btn dropdown-toggle p-0" style="display: flex; align-items: center;" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><img src="/lessons/img/hy.png" width="20px" height="auto"></button>
                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary" style="min-width: 50px;">
                        <a class="dropdown-item" style="padding: .2rem; text-align: center;" href="#"><img src="/lessons/img/ru.png"></a>
                        <a class="dropdown-item" style="padding: .2rem; text-align: center;" href="#"><img src="/lessons/img/en.png"></a>
                    </div>
                </div>
                <!--/Dropdown primary-->
            </div>

            <div id="menu-button" class="d-block d-lg-none" role="button" title="sweet hamburger">
                <div class="hamburger"><div class="inner"></div></div>
            </div>
        </div>

    </nav>
</header>
<nav class="sub-menu">
    <ul>
        <li>
            <a href="index.php">¶ÉË³íáñ</a>
        </li>
        <li>
            <a href="courses.php">¸³ëÁÝÃ³óÝ»ñ</a>
        </li>
        <li>
            <a href="about.php">Ø»ñ Ø³ëÇÝ</a>
        </li>
        <li>
            <a href="portfolio.php">äáñïýáÉÇá</a>
        </li>
        <li>
            <a href="blog.php">´Éá·</a>
        </li>
        <li>
            <a href="contact.php">Î³å</a>
        </li>
    </ul>
</nav>




@yield('content')


<footer class="footer" id="footer">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center flex-wrap">

            <div class="logo my-2">
                <img src="/lessons/img/logo.png">
            </div>

            <div class="social my-2">
                <ul class="d-flex justiofy-content-center ">
                    <li class="mx-2">
                        <a href="https://www.facebook.com/Wave-It-180752426136908/">
                            <div>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="https://www.instagram.com/wave_it.ru/?hl=ru">
                            <div>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>

                    </li>
                    <li class="mx-2">
                        <a href="https://vk.com/it_wave_it">
                            <div>
                                <i class="fa fa-vk" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="menu my-2">
                <!-- <li><a href="#" class="d-flex align-items-center"><i class="mr-1 fa fa-arrow-right" aria-hidden="true"></i>Գլխավոր</a></li>
                <li><a href="#" class="d-flex align-items-center"><i class="mr-1 fa fa-arrow-right" aria-hidden="true"></i>Դասընթացներ</a></li>
                <li><a href="#" class="d-flex align-items-center"><i class="mr-1 fa fa-arrow-right" aria-hidden="true"></i>Մեր Մասին</a></li>
                <li><a href="#" class="d-flex align-items-center"><i class="mr-1 fa fa-arrow-right" aria-hidden="true"></i>Պորտֆոլիո</a></li>
                <li><a href="#" class="d-flex align-items-center"><i class="mr-1 fa fa-arrow-right" aria-hidden="true"></i>Բլոգ</a></li> -->
                <li><i class="fa fa-mobile mr-1" aria-hidden="true"></i>+374 (95, 77)-78-97-86</li>
                <li><i class="fa fa-envelope mr-1" aria-hidden="true"></i>info@wave-it.ru</li>
                <li><i class="fa fa-map-marker mr-1" aria-hidden="true"></i>Հակոբ Հակոբյան 3</li>
            </ul>


            
        </div>
    </div>
</footer>



<script type="text/javascript" src="/lessons/js/plugin/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/popper.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/bootstrap.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/mdb.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/swiper.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/particles.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/app.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/typed.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/wow.min.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/lightbox.js"></script>
<script type="text/javascript" src="/lessons/js/plugin/jquery.maskedinput.min.js"></script>


<script type="text/javascript" src="/lessons/js/main.js"></script>
@yield('script')
</body>
</html>
