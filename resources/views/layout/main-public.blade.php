<!DOCTYPE html>
<!--[if lt IE 9]>
<html class='lt-ie9 no-js' lang='en'>
<![endif]-->
<!--[if gte IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#005aab">
    <title>Wedding Restaurant</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- inject:js -->
    <script src="{{asset('js/common/addons.js')}}"></script>
    <script src="{{asset('js/common/main.js')}}"></script>
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/addons.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- endinject -->
</head>

<body class="aboutpage">
<div class="fullpage">
    <header>
        <section class="headertop clearfix">
            <div class="container">
                <div class="topinfo clearfix">
                    <div class="hotline"><a href="tel:(234) 567-891"><i class="fa fa-phone" aria-hidden="true"></i> 1 (234) 567-891</a></div>
                    <div class="email"><a href="mailto:nfo@grandrestaurant.com.vn"><i class="fa fa-envelope" aria-hidden="true"></i> nfo@grandrestaurant.com.vn</a></div>
                    <time><i class="fa fa-clock-o" aria-hidden="true"></i> Monday – Sunday 10 AM – 10 PM</time>
                </div>
                <div class="social clearfix"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
            </div>
        </section>
        <section class="headermain clearfix">
            <div class="container">
                <div class="btn-showmenu"><span></span></div>
                <div class="overlay"></div>
                <div class="sitelogo">
                    <a href="index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>
                <div class="searchtoggle hidden-lg-up"><i class="fa fa-search" aria-hidden="true"></i></div>
                <nav class="menu clearfix">
                    <ul class="menulink clearfix">
                        <li><a href="/">Trang chủ</a></li>
                        <li class="active"><a href="gioithieu.html">Giới thiệu</a></li>
                        <li><a href="dichvu.html">Dịch vụ</a></li>
                        <li><a href="datban.html">Đặt bàn</a></li>
                        <li><a href="thucdon.html">Thực đơn</a></li>
                        <li><a href="lienhe.html">Liên hệ</a></li>
                        <li><a href="dangnhap.html">Đăng nhập</a></li>
                    </ul>
                    <div class="searchtoggle hidden-md-down"><i class="fa fa-search" aria-hidden="true"></i></div>
                </nav>
                <div class="search clearfix">
                    <div class="btn-closesearch"><span class="lnr lnr-cross"></span></div>
                    <div class="searchwrap clearfix">
                        <input placeholder="Tìm kiếm...">
                        <button class="searchbutton"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        @yield('main-public')
    </main>
    <footer class="text-xs-center">
        <div class="container">
            <div class="footertop clearfix">
                <nav class="footernav clearfix">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="gioithieu.html">Giới thiệu</a></li>
                        <li><a href="dichvu.html">Dịch vụ</a></li>
                        <li><a href="datban.html">Đặt bàn</a></li>
                        <li><a href="thucdon.html">Thực đơn</a></li>
                        <li><a href="lienhe.html">Liên hệ</a></li>
                        <li><a href="dangnhap.html">Đăng nhập</a></li>
                    </ul>
                </nav>
                <div class="social clearfix"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="contactinfo clearfix">
                    <div class="company">TRUNG TÂM HỘI NGHỊ & TIỆC CƯỚI Grand Restaurant</div>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> 12 Nguyễn Văn Bảo, P.4, Q.Gò Vấp, TP.Hồ Chí Minh</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: (08) 3811 8181 - <i class="fa fa-envelope" aria-hidden="true"></i> Email: info@grandrestaurant.com.vn</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footerbottom clearfix">
            <div class="container">
                <div class="copyright">Copyright © 2017 Grand Restaurant. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <div class="up"><a href="#"><i class="fa fa-angle-up" aria-hidden="true" style="color: white;"></i></a></div>
</div>
</body>

</html>

</html>