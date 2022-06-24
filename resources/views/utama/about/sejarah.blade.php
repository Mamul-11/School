@extends('utama.layouts.main2')
@section('sub', 'Tentang')
@section('title', 'Sejarah')
    
@section('content')

<!-- Our Story ==== -->
<div class="section-area bg-gray section-sp1 our-story">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-lg-5 col-md-12 heading-bx">
                <h2 class="m-b10">Perjalanan Kami</h2>
                <h5 class="fw4">SMA NEGERI 6 SURAKARTA</h5>
                <p style="text-align: justify; text-justify: inter-word;">SMA Negeri 6 Surakarta berdiri pada tahun 1976 dengan nama Sekolah Menengah Persiapan Pembangunan SMPP Nomor 40 Surakarta. Berdirinya SMPP ini dirintis oleh Drs. R. M. Soepeno yang pada saat itu menjabat sebagai kepala sekolah di SMA Negeri 5 Surakarta. Sedangkan kepala sekolah definitif pertama adalah Drs. Soekidjo. Pada tahun 1985, nama SMPP Nomor 40 Surakarta dirubah menjadi SMA Negeri 6 Surakarta. Setelah itu, pada tahun 1997 juga terjadi pergantian nama lagi menjadi SMU Negeri 6 Surakarta. Namun tidak berselang lama, tepatnya pada tahun 2004, nama SMU Negeri 6 Surakarta kembali lagi menjadi SMA Negeri 6 Surakarta. Meskipun awalnya berdiri dengan nama SMPP, tetapi kurikulum yang digunakan adalah kurikulum SMA, yaitu kurikulum 1975 SMA.</p>
            </div>
            <div class="col-lg-7 col-md-12 heading-bx p-lr">
                <div class="video-bx">
                    <img src="{{ asset('template') }}/assets/images/about/sma6.jpg" alt=""/>
                    <a href="https://www.youtube.com/watch?v=tE9GK8rGgq8" class="popup-youtube video"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Story END ==== -->
@endsection