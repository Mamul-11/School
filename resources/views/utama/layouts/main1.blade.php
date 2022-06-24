<!DOCTYPE html>
<html lang="en">

<head>
    @include('utama.partials.head')
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
		@include('utama.partials.header')
    </header>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        @yield('content')
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        @include('utama.partials.footer')
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->
@include('utama.partials.script')
</body>

</html>
