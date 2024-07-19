
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{route('/')}}">
                            <img src="images/ahievran_logo.png" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>İletişim Bilgiler</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Bağbaşı Mah. Şehit Necdet Yağız Cad. <br> No: 143 / E Merkez
                                    / KIRŞEHİR</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:basin@ahievran.edu.tr">basin@ahievran.edu.tr</a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+90 850 441 02 44">0 850 441 02 44</a>
                            </div>
                        </li>
                    </ul>
                    <h4>Sosyal Medya</h4>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Common Adjustment Component -->
<div id="header-sticky" class="header-common-adjustment">
    <a href="{{route('/')}}" class="logo-v04">
        <img src="images/footer_logo.png" alt="logo-img" width="200">
    </a>
    <div class="topheader-mainheader">
        <!-- Header Top Section Start -->
        <div class="header-top-section topcmn-style d-lg-block d-none">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <a href="mailto:basin@ahievran.edu.tr"><i class="fa-solid fa-envelope"></i>
                                basin@ahievran.edu.tr</a>
                        </li>
                    </ul>
                    <div class="social-wrapper d-flex align-items-center">
                        <a href="https://www.facebook.com/ahievranedutr" class="white" target="_blank"><i class="white fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/ahievranedutr" class="white"><i class="white fa-brands fa-youtube" target="_blank"></i></a>
                        <a href="https://www.instagram.com/ahievranedutr" class="white"><i class="white fa-brands fa-instagram" target="_blank"></i></a>
                        <a href="https://www.x.com/ahievranedutr" class="white" target="_blank">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Section Start -->
        <header class="header-v4">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left d-xl-none d-block">
                            <div class="logo">
                                <a href="{{route('/')}}" class="header-logo">
                                    <img src="images/logo_1.png" alt="logo-img" width="180">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-between w-100 align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{route('/')}}">
                                                    Anasayfa
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Genel Bilgiler
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('tarihce')}}">Tarihçe</a></li>
                                                    <li><a href="{{route('ahievranivelikimdir')}}">Ahi Evran-ı Veli Kimdir?</a></li>
                                                    <li><a href="{{route('logomuz')}}">Logomuz</a></li>
                                                    <li><a href="{{route('rektorun-mesaji')}}">Rektörün Mesajı</a></li>
                                                    <li><a href="https://www.youtube.com/watch?v=yGR8I5x0cgU" target="_blank">Tanıtım Filmi</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Üniversitemizde Yaşam
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('barinma')}}">Barınma</a></li>
                                                    <li><a href="{{route('kutuphane')}}">Kütüphane</a></li>
                                                    <li><a href="{{route('beslenme')}}">Beslenme</a></li>
                                                    <li><a href="{{route('ulasim')}}">Ulaşım</a></li>
                                                    <li><a href="{{route('ogrenci-butigi')}}">Öğrenci Butiği</a></li>
                                                    <li><a href="{{route('ogrenci-topluluklari')}}">Öğrenci Toplulukları</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('kilavuz-ve-kosullar')}}">
                                                    Kılavuz ve Koşullar
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Kırşehir
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('kirsehir-genel-bilgiler')}}">Genel Bilgiler</a></li>
                                                    <li><a href="{{route('kirsehirin-kulturu')}}">Kırşehir'in Kültürü</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="common-adjust-toggle">
                                <a href="tel:+90 850 441 02 44" class="header-help">
                                    <span class="d-grid">
                                            <span class="need">
                                                Bize Ulaşın
                                            </span>
                                            <span class="call">
                                            +90 850 441 02 44
                                            </span>
                                        </span>
                                </a>
                                <div class="header__hamburger my-auto">
                                    <div class="sidebar__toggle d-center">
                                        <svg width="22" height="10" viewBox="0 0 22 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5879 1L21.1761 1" stroke="#FDD61F" stroke-width="2" />
                                            <path d="M0 8.41406L21.1765 8.41406" stroke="#FDD61F"
                                                  stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<!-- Header Common Adjustment Component -->
