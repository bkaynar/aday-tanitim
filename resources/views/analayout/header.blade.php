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

<!-- Header Section Start -->
<header id="header-sticky" class="header-1">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{route('/')}}" class="header-logo">
                            <img src="images/logo.png" alt="logo-img img-fluid">
                        </a>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active menu-thumb">
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
                                            <li><a href="{{route('ahievranivelikimdir')}}">Ahi Evran-ı Veli Kimdir?</a>
                                            </li>
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
                                            <li><a href="{{route('ogrenci-topluluklari')}}">Öğrenci Toplulukları</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('kilavuz-ve-kosullar')}}">
                                            Kılavuz ve Koşullar
                                        </a>
                                    </li>
                                    <li>
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

                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
