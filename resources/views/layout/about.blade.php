@extends('layout.main-public')
@section('main-public')
    <section class="breadcrumb-wrap clearfix">
        <div style="background: url(../img/about/4.jpg) center center no-repeat;background-size: cover" class="breadcrumb-bg"></div>
        <div class="container">
            <h3 class="pagename"></h3>
            <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://example.com/books"><span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://example.com/books/sciencefiction"><span itemprop="name">Giới thiệu</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
    </section>
    <section class="about-page clearfix">
        <div class="container">
            <div class="row flex flex-wrap">
                <div class="col-xs-12 col-lg-7">
                    <div class="row flex flex-wrap">
                        <div class="col-xs-12 col-md-6">
                            <div class="about-pic">
                                <div style="background: url(img/about/p1.jpg) center center no-repeat;background-size: cover" class="img"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="about-pic">
                                <div style="background: url(img/about/p2.jpg) center center no-repeat;background-size: cover" class="img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-5">
                    <div class="about-content">
                        <h1 class="pagetitle">Về chúng tôi</h1>
                        <div class="content">
                            <p>Tọa lạc trên trục đường chính cách trung tâm thành phố Hồ Chí Minh khoảng 20 phút lái xe và cách sân bay Tân Sơn Nhất 1.5 km – nằm trong vòng an ninh. Grand Restaurant sở hữu 6 sảnh lớn phối hợp hoàn hảo cùng kiến trúc
                                Châu Âu sang trọng. Hệ thống trang thiết bị hiện đại cùng khả năng thay đổi thiết kế linh hoạt với sức chứa lên đến hơn 2.500 khách, Grand Restaurant là địa điểm lý tưởng để tổ chức hội nghị và yến tiệc. </p>
                            <p>Đến với Grand Restaurant, bạn sẽ được trải nghiệm những tiện nghi và dịch vụ tuyệt vời của một trong những Trung tâm Hội nghị - Tiệc cưới uy tín hàng đầu trong khu vực thành phố Hồ Chí Minh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="chef-slide">
                        <div class="item">
                            <a href="img/daubep/1.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/2.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/3.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/4.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/4.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/5.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/5.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/6.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/6.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/7.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/7.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="img/daubep/8.jpg" data-fancybox="gal2" class="chef-img"><img src="img/daubep/8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-gallery clearfix">
        <div class="albumlist flex flex-wrap clearfix">
            <div class="album">
                <a href="img/gallery/1.jpg" data-fancybox="gal1" style="background: url(img/gallery/1.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/6.jpg" data-fancybox="gal1" style="background: url(img/gallery/2.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/3.jpg" data-fancybox="gal1" style="background: url(img/gallery/3.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/8.jpg" data-fancybox="gal1" style="background: url(img/gallery/4.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/5.jpg" data-fancybox="gal1" style="background: url(img/gallery/5.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/2.jpg" data-fancybox="gal1" style="background: url(img/gallery/6.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/7.jpg" data-fancybox="gal1" style="background: url(img/gallery/7.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
            <div class="album">
                <a href="img/gallery/4.jpg" data-fancybox="gal1" style="background: url(img/gallery/8.jpg) center center no-repeat;background-size: cover" class="pic"></a>
            </div>
        </div>
    </section>
@endsection