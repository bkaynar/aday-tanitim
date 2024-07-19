@extends('analayout.master')
@section('content')
    <section class="banner-section style-v1 overflow-hidden"
             style="background:url('../../images/Slider_1.jpg');background-size: cover">
        <div class="container">
            <div class="row g-4 align-items-center position-relative">
                <div class="col-lg-7 col-md-7 col-sm-9">
                    <div class="hero-contentv01">
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s" style="font-size: 52px">
                            Sevgili Öğrenciler
                            <span class="harves">
                            </span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s" style="font-size: 20px;text-align: justify">
                            YKS 2024 sonuçları açıklandı. Sınav sonuçlarının size ve ailenize hayırlı olmasını dileriz.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.6s" style="font-size: 20px;text-align: justify">
                            Tercih döneminde Kırşehir Ahi Evran Üniversitesi olarak daima yanınızdayız.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.6s" style="font-size: 20px;text-align: justify">
                            Sizleri, her alanda kaliteli eğitimi hedefleyen Kırşehir Ahi Evran Üniversitesi ailesinin
                            bir ferdi olmaya davet ediyoruz. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section -->
    <section class="gallery-section p100-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                    <div class="section-title mb-60 text-center">

                        <h2 class="wow fadeInDown ahilik" data-wow-delay=".3s">
                            Ahiliğin İzinde Mükemmelliğe Yolculuk
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Body -->
            <div class="row g-lg-4 g-3 justify-content-center">
                <div class="col-md-7 col-sm-7">
                    <a href="
                    {{ route('rektorun-mesaji') }}
                    "
                       class="gallery-com-thumb first-item w-100 round20">
                        <img src="images/rektorun_mesaji.jpg" alt="img" class="round20">
                    </a>
                </div>
                <div class="col-md-5 col-sm-5">
                    <a href="{{ route('kilavuz-ve-kosullar') }}"
                       class="gallery-com-thumb first-item w-100 round20">
                        <img src="images/tercih_rehberi.jpg" alt="img" class="round20">
                    </a>
                </div>
                <div class="d-flex flex-sm-nowrap flex-wrap justify-content-between gap-lg-4 gap-3">
                    <a href="https://www.ahievran.edu.tr/akademik-takvim/"
                       class="gallery-com-thumb secound w-100 round20" target="_blank">
                        <img src="images/akademik_takvim.jpg" alt="img" class="round20">
                    </a>
                    <a href="https://obs.ahievran.edu.tr/oibs/ogrsis/no_query.aspx"
                       class="gallery-com-thumb secound w-100 round20" target="_blank">
                        <img src="images/ogrenci_numarasi.jpg" alt="img" class="round20">
                    </a>
                    <a href="{{route('kirsehirin-kulturu')}}" class="gallery-com-thumb secound w-100 round20">
                        <img src="images/kirsehir.jpg" alt="img" class="round20">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section position-relative">
        <div class="container">
            <div class="counter-version-wrapv1 d-flex align-items-center justify-content-between gap-4">
                <div class="counter-items">
                    <h2>
                        <span class="count">1000</span>+
                    </h2>
                    <div class="cont-bottom">
                        <img src="images/personel_artboard.svg" alt="img" width="60">
                        <p style="font-size: 18px">Akademik Personel</p>
                    </div>
                </div>
                <div class="counter-items">
                    <h2>
                        <span class="count">10</span>
                    </h2>
                    <div class="cont-bottom">
                        <img src="images/birim_artboard.svg" alt="img" width="60">
                        <p style="font-size: 18px">Fakülte</p>
                    </div>
                </div>
                <div class="counter-items">
                    <h2>
                        <span class="count">5</span>
                    </h2>
                    <div class="cont-bottom">
                        <img src="images/birim_artboard.svg" alt="img" width="60">
                        <p style="font-size: 18px">Yüksekokul</p>
                    </div>
                </div>
                <div class="counter-items">
                    <h2>
                        <span class="count">7</span>
                    </h2>
                    <div class="cont-bottom">
                        <img src="images/birim_artboard.svg" alt="img" width="60">
                        <p style="font-size: 18px">Meslek Yüksekokulu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Feature-video -->
    <div class="feature-video">
        <div class="container">
            <div class="feature-video-wrap w-100">
                <img src="images/tanitim_filmi.jpg" alt="img" class="w-100">
                <a href="https://www.youtube.com/watch?v=YcZDitmdaM8" class="video-cmn d-center video-popup"><i
                        class="fa-solid fa-play"></i></a>
            </div>
        </div>
    </div>
@endsection
