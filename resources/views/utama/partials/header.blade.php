<div class="top-bar">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="topbar-left">
                <ul>
                    <li><a href="#"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                    <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>info@sman6surakarta.sch.id</a></li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sticky-header navbar-expand-lg">
    <div class="menu-bar clearfix">
        <div class="container clearfix">
            <!-- Header Logo ==== -->
            <div class="menu-logo">
                <a href="/"><img src="{{ asset('template') }}/assets/images/sma6.png" alt=""></a>
            </div>
            <!-- Mobile Nav Button ==== -->
            <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse"
                data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- Author Nav ==== -->
            <div class="secondary-menu">
                <div class="secondary-inner">
                    <ul>
                        <li><a href="https://web.facebook.com/SMA-Negeri-6-Surakarta-179502198727362/?_rdc=1&_rdr" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/smaviska.solo/?hl=en" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/viska_solo?lang=en" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                        <!-- Search Button ==== -->
                        <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i
                                    class="fa fa-search"></i></button></li>
                    </ul>
                </div>
            </div>
            <!-- Search Box ==== -->
            <div class="nav-search-bar">
                <form action="#">
                    <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                    <span><i class="ti-search"></i></span>
                </form>
                <span id="search-remove"><i class="ti-close"></i></span>
            </div>
            <!-- Navigation Menu ==== -->
            <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                <div class="menu-logo">
                    <a href="/"><img src="{{ asset('template') }}/assets/images/sma6.png" alt=""></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item {{ Request::is('/') ? 'active' : ''}}"><a href="/">Home </a>
                    </li>
                    <li class="nav-item {{ (request()->is('tentang/sejarah*')) ||  (request()->is('tentang/vimi*')) ||  (request()->is('tentang/siswa*')) ||  (request()->is('tentang/guru*')) ||  (request()->is('tentang/karyawan*')) ? 'active menu-open' : '' }}"><a href="javascript:;">tentang <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/tentang/sejarah">Sejarah</a></li>
                            <li><a href="/tentang/vimi">Visi & Misi</a></li>
                            <li><a href="/tentang/siswa">Data Siswa</a></li>
                            <li><a href="/tentang/guru">Data Guru</a></li>
                            <li><a href="/tentang/karyawan">Data Karyawan</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Kegiatan<i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/kegiatan/agenda">Agenda Sekolah</a></li>
                            <li><a href="/kegiatan/pengumuman">Pengumuman</a></li>
                            <li><a href="/kegiatan/dokumentasi">Dokumentasi</a></li>
                            <li><a href="/kegiatan/ektrakulikuler">Ektrakulikuler</a></li>
                        </ul>
                    </li>
                    <li class="nav-dashboard"><a href="/beasiswa">Beasiswa </i></a></li>
                    <li class="nav-dashboard"><a href="/info-ppdb">Info PPDB </i></a></li>
                    <li class="nav-dashboard"><a href="/kontak">Kontak </a></li>
                </ul>
                <div class="nav-social-link">
                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                    <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Navigation Menu END ==== -->
        </div>
    </div>
</div>
