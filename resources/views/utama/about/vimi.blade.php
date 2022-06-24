@extends('utama.layouts.main2')
@section('sub', 'Tentang')
@section('title', 'Visi & Misi')
    
@section('content')
<!-- About Us ==== -->
<div class="section-area section-sp1">
    <div class="container">
        <h2 class="m-b10">Visi</h2>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="feature-container">
                    <div class="feature-md text-white m-b20">
                        <a href="#" class="icon-cell"><img src="{{ asset('template') }}/assets/images/icon/icon1.png" alt=""/></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="ttr-tilte">Berprestasi Dalam Mutu</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="feature-container">
                    <div class="feature-md text-white m-b20">
                        <a href="#" class="icon-cell"><img src="{{ asset('template') }}/assets/images/icon/icon2.png" alt=""/></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="ttr-tilte">unggul dalam bahasa</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="feature-container">
                    <div class="feature-md text-white m-b20">
                        <a href="#" class="icon-cell"><img src="{{ asset('template') }}/assets/images/icon/icon4.png" alt=""/></a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="ttr-tilte">santun dalam budaya</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-b30">
               <h2 class="title-head ">Misi<br/></h2>
               <p>
                   <ol style="align-text:justify;">
                        <li>Meningkatkan sumber kreativitas guru dalam melaksanakan kegiatan belajar mengajar.</li>
                        <li>Mendorong siswa lebih aktif dalam kegiatan intrakurikuler dan ekstrakurikuler.</li>
                        <li>Menanamkan keunggulan sekolah secara efektif khususnya kepada semua warga sekolah dan masyarakat pada umumnya.</li>
                        <li>Menanamkan budi pekerti yang luhur, cinta tanah air, dan santun sesuai dengan budaya bangsa 3S : Senyum, Sapa, dan Santun.</li>
                        <li>Mendorong dan membentuk setiap siswa untuk mengerti menguasai bahasa nasional internasional.</li>
                    </ol>
                </p>
            </div>
            {{-- <div class="col-lg-6">
                <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Our Philosophy</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Kingster's Principle</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Key Of Success</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Our Philosophy</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div> --}}
       </div>
   </div>
</div>
<!-- About Us END ==== -->

@endsection