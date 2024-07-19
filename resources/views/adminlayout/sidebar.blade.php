<nav class="sidebar">
    <div class="sidebar-header">
        <a href="
    {{ url('/admin') }}
    " class="sidebar-brand">
            KAEÜ   <span> ADAY</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Yönetim Paneli</span>
                </a>
            </li>
            <li class="nav-item nav-category">İşlemler</li>
            <li class="nav-item {{ active_class(['admin/akademik/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#genelbilgiler" role="button"
                   aria-expanded="{{ is_active_route(['admin/akademik/*']) }}" aria-controls="genelbilgiler">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Genel Bilgiler</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['admin/akademik/*']) }}" id="genelbilgiler">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/genelbilgiler') }}" class="nav-link">GenelBilgiler</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['admin/sayfalar/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#sayfalar" role="button"
                   aria-expanded="{{ is_active_route(['admin/sayfalar/*']) }}" aria-controls="sayfalar">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Sayfalar</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['admin/sayfalar/*']) }}" id="sayfalar">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/sayfalar') }}" class="nav-link">Sayfalar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/sayfa/create') }}" class="nav-link">Sayfa Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
             <li class="nav-item {{ active_class(['admin/slider/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#slider" role="button"
                   aria-expanded="{{ is_active_route(['admin/slider/*']) }}" aria-controls="slider">
                    <i class="link-icon" data-feather="image"></i>
                    <span class="link-title">Slider</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['admin/slider/*']) }}" id="slider">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/slider') }}" class="nav-link">Sliderlar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/slider/create') }}" class="nav-link">Slider Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Sık Sorulan Sorular -->
            <li class="nav-item {{ active_class(['admin/sorular/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#sorular" role="button"
                   aria-expanded="{{ is_active_route(['admin/sorular/*']) }}" aria-controls="sorular">
                    <i class="link-icon" data-feather="help-circle"></i>
                    <span class="link-title">Sık Sorulan Sorular</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['admin/sorular/*']) }}" id="sorular">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/sorular') }}" class="nav-link">Sorular</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/sorular/create') }}" class="nav-link">Soru Ekle</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Geliştirme Ekibi   -->
            <!--Çıkış -->
           <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Çıkış</span>
                </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </li>


        </ul>
    </div>
</nav>

