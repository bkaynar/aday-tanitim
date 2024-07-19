<footer class="footer-section overflow-hidden position-relative footer-style1">
    <div class="footer-widgets-wrapper footer-widget-wrapperv01">
        <div class="container">
            <div class="row g-md-4 g-4 justify-content-between">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{route('/')}}" class="footer-logo">
                                <img src="images/footer_logo.png" alt="logo-img" width="290">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p class="pre-pragraph">
                                Ahiliğin İzinde <strong>Mükemmelliğe Yolculuk</strong>
                            </p>
                            <div class="social-wrapper social-empact d-flex align-items-center">
                                <a href="https://www.facebook.com/ahievranedutr" class="white-clr" target="_blank"><i class="white-clr fab fa-facebook-f"></i></a>
                                <a href="https://www.x.com/ahievranedutr" class="white-clr" target="_blank">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                            fill="white-clr"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/ahievranedutr" class="white-clr" target="_blank"><i class="white-clr fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/ahievranedutr" class="white-clr" target="_blank"><i class="white-clr fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 class="white-clr">Hakkımızda</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('rektorun-mesaji')}}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Rektörün Mesajı
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('tarihce')}}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Tarihçe
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kirsehirin-kulturu')}}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Kırşehir'in Kültürü
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 class="white-clr">Linkler</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ url('https://www.ahievran.edu.tr/akademik-takvim/')}}" target="_blank"
                                   rel="noopener noreferrer">
                                    Akademik Takvim
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('https://obs.ahievran.edu.tr/oibs/ogrsis/no_query.aspx')}}"
                                   target="_blank" rel="noopener noreferrer">
                                    Öğrenci Numarası Sorgulama
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 class="white-clr">İletişim</h3>
                        </div>
                        <ul class="list-area list-contact">
                            <li>
                                <a href="mailto:basin@ahievran.edu.tr" class="link">
                                    <i class="fa-solid fa-envelope"></i>
                                    basin@ahievran.edu.tr
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/maps/d/u/1/embed?mid=11raXQmLuBFuTdxRrDuXKGHmZ_B7x9cBs" class="link" target="_blank">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Bağbaşı Mah. Şehit Necdet Yağız Cad. No: 143 / E Merkez / KIRŞEHİR
                                </a>
                            </li>
                            <li>
                                <a href="tel:+90 850 441 02 44" class="link">
                                    <i class="fa-solid fa-phone"></i>
                                    +90 850 441 02 44
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div
                class="footer-wrapper footer-wrapperv01 d-md-flex d-grid gap-md-0 gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    {{ date('Y') }}
                    &copy; Bilgi İşlem Daire Başkanlığı
                    <!-- laravel date -->

                    . Tüm hakları saklıdır.
                </p>
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                        Tasarım & Geliştirme: Erhan Yurt & <a class="color-2" href="https://burakkaynar.com" style="color:rgba(255, 255, 255, 0.7)">Burak Kaynar</a>
                </p>
            </div>

        </div>
    </div>
    <!-- Element -->
    <img src="" class="footer-wheat position-absolute">
    <!-- Element -->
</footer>
