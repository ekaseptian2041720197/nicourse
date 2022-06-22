@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
            <h1><a href="/index">NICOURSE</a></h1>
        </header>

		<!-- Main -->
		<article id="main">
			<header>
				<h2>MOHON MAAF {{ auth()->user()->name }}</h2>
				<p>Silahkan hubungi admin untuk melakukan perubahan data anda</p>
			</header>
			<section class="wrapper style5">
				<div class="inner">
					<ul class="actions special">
						<li><a href="/lms" class="button primary">BACK</a></li>
					</ul>
				</div>
			</section>
		</article>
		@include('layouts.homefooter')
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
@endsection