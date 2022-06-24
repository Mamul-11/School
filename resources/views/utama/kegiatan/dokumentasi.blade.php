@extends('utama.layouts.main2')
@section('sub', 'Tentang')
@section('title', 'Dokumentasi')

@section('content')
<!-- contact area -->
<div class="content-block">
    <!-- Portfolio  -->
    <div class="section-area section-sp1 gallery-bx">
        <div class="container">
            {{-- <div class="feature-filters clearfix center m-b40">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#"><span>All</span></a> 
                    </li>
                    <li data-filter="book" class="btn">
                        <input type="radio">
                        <a href="#"><span>Book</span></a> 
                    </li>
                    <li data-filter="courses" class="btn">
                        <input type="radio">
                        <a href="#"><span>Courses</span></a> 
                    </li>
                    <li data-filter="education" class="btn">
                        <input type="radio">
                        <a href="#"><span>Education</span></a> 
                    </li>
                </ul>
            </div> --}}
            <div class="clearfix">
                <ul id="masonry" class="ttr-gallery-listing magnific-image row" style="list-style:none;">
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 book" style="list-style:none;">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_1.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_1.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book" >
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_2.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_2.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_3.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_3.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 book education">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_4.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_4.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_5.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_5.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_6.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_6.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_7.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_7.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_8.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_8.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education courses">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_9.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_9.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_10.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_10.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_11.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_11.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                        <div class="ttr-box portfolio-bx">
                            <div class="ttr-media media-ov2 media-effect">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" alt=""> 
                                </a>
                                <div class="ov-box">
                                    <div class="overlay-icon align-m"> 
                                        <a href="{{ asset('template') }}/assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info-bx bg-primary">
                                        <h4><a href="#">Soft skills</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->

@endsection
