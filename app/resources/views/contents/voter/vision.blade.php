<!DOCTYPE html>
<html lang="zxx">
@section('title', 'About the Award')

<head>
	@include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner" >
				<img class="ball" src="{{asset('assets/logo.png')}}"/>
			</div>
		</div>
		 
	</div>
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Mission and Vision Statement</li>
				</ul>
			</div>
			<h1 class="title">Mission and Vision Statement</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
			<div class="col-12 col-lg-8 blog-cover">
    <div class="post-item-cover">
        <div class="widget widget-archive post-header">
            <h4 class="title">Vision Statement</h4>
        </div>
        <div class="post-content">
            <div class="text" style="text-align: justify;">
                <p>To be the premier global platform celebrating excellence and fostering innovation in governance, risk, compliance, and financial crime prevention, building resilient institutions and ethical leadership for a safer, transparent, and future-ready world.</p>
            </div>
        </div>
    </div>

    <div class="post-item-cover">
        <div class="widget widget-archive post-header">
            <h4 class="title">Mission Statement</h4>
        </div>
        <div class="post-content">
            <div class="text" style="text-align: justify;">
                <p>To convene cross-sector leaders, innovators, regulators, and changemakers to recognize outstanding contributions, ignite critical dialogue, and champion actionable solutions that advance governance, risk, compliance, and financial crime prevention — aligned with the strategic commitment of THE MORGANS Consortium to empower sustainable institutions, safeguard global systems, integrity and influence transformational policy and practice.</p>
            </div>
        </div>
    </div>

    <div class="post-item-cover">
        <div class="widget widget-archive post-header">
            <h4 class="title">Objectives</h4>
        </div>
        <div class="post-content">
            <div class="text" style="text-align: justify;">
                <p><strong>Recognition & Celebration -</strong> – 
                   Honor individuals, teams, institutions, and technologies driving impactful change , inclusive , transparency and integrity in GRC and financial crime prevention across sectors and regions</p>
                <p><strong>Global Collaboration & Dialogue</strong> – Provide an inclusive forum for strategic exchange among regulators, practitioners, academia, and innovators to discuss emerging threats, best practices, and global policy shifts.</p>
            </div>
        </div>
    </div>

</div>

				<!--================= SIDEBAR =================-->
				@include('partials.voter.sidebar')
				<!--=============== SIDEBAR END ===============-->
			</div>
	</section>

	<!--==================== FOOTER ====================-->
	@include('partials.voter.footer')
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	@include('partials.voter.scripts')
</body>

</html>