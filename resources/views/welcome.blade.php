@extends('layouts.common')

@section('title','Tobaş')

@section('content')
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">

            <div class="item active" style="background-image:url(images/tobas/slider-1.jpg)">
                <div class="overlay grey"></div>
                <div class="slider-content text-left">

                </div>
            </div>

            <div class="item" style="background-image:url(images/tobas/slider-2.jpg)">
                <div class="overlay grey"></div>
                <div class="slider-content text-left">

                </div>
            </div>
            <!--/ Carousel item 2 end -->

            <div class="item" style="background-image:url(images/tobas/slider-3.jpg)">
                <div class="overlay grey"></div>
                <div class="slider-content text-right white">
                    <div class="col-md-12">
                        <h2 class="slide-title animated6"></h2>
                        <h3 class="slide-sub-title animated7"></h3>
                        <p class="slider-description lead animated7"></p>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item 3 end -->

        </div>
        <!-- Carousel inner end-->

        <!-- Controllers -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!--/ Carousel end -->


    </section>

    <hr>

    </section>



    <section id="section-about" class="section-padding grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="section-padding-heading text-center">
                        <h2 class="sec-title aos-item" data-aos="fade-left">DUYURULAR</h2>
                        <div class="sec-line "></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href=""><h6>31 EKİM 2017 tarihi mesai bitimine kadar konut satış sözleşmesi imzalama süreci uzatılmıştır.</h6></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href=""><h6>KARACAÖREN 250 konut anahtar teslim işlemleri 31 EKİM 2017 tarihi mesai bitimine kadar uzatılmıştır.</h6></a>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a	glyphicon glyphicon-tags"></i>
                        <a href=""><h6>26 TEMMUZ 2017 tarihi kura  sonucuna göre hak sahiplerine verilecek olan TOKİ KARACAÖREN konutları 2017 yılı satış ve peşinat bedelleri</h6></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags "></i>
                        <a href=""> <h6>TEMMUZ 2017 tarihli açık satış ile Kuzey Ankara Projesi kapsamında konut satın almış konut alıclarını alıcalrın bilgisine</h6></a>
                    </div>
                </div>
            </div>


            <div class="row margin-top-50">
                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href=""> <h6>Kuzey Ankara Girişi - Kentsel Dönüşüm Proje Tanıtımı</h6></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href=""> <h6>KARACAÖREN TOKİ konutları konut satış sözleşmesi imzalaza tarihi son gün 25 MAYIS 2017</h6></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href="">  <h6>2017 yılı KDV tutarları belirlenmiştir. 13 Ocak 2017 Pazartesi günü itibari ile Halk Bankasın Merkez Şubedeki işlemler başlayacaktır.</h6></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-feature-box aos-item" data-aos="fade-up">
                        <i class="icon-a glyphicon glyphicon-tags"></i>
                        <a href="">  <h6>Tapu İşlemleri Hakkında Açıklama ve Bilgilendirme</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="section-padding-heading text-center">
                        <h2 class="sec-title aos-item" data-aos="fade-left">GALERİ</h2>
                        <div class="sec-line"></div>
                    </div>
                </div>
            </div>

            <div class="carousel slide" id="service-slider">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g1.jpg" alt="" class="img-responsive">

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g2.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g3.jpg" alt="" class="img-responsive">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="carousel slide" id="service-slider">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g4.jpg" alt="" class="img-responsive">

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g5.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="service-block gallery">
                                <img src="images/tobas/g6.jpg" alt="" class="img-responsive">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p><a class="btn btn-primary btn-md" href="#" role="button">Daha fazlası için tıklayınız.</a></p>

        </div>

    </section>
@endsection