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
				<img class="ball" src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664067165/grcfincrimeawards/landing_page/grc_awards_summit_logo_y8nqdz.png"/>
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
					<li>About the award</li>
				</ul>
			</div>
			<h1 class="title">About The Award</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">GRC & Financial Crime Prevention Awards</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
							<p>The Organizers of this awards are advocates for effective Governance, Risk & Compliance system in organisations and a promoter of Anti-Money Laundering and Counter-Terrorism Measures hence the reason for coming up with an initative (GRC & Financial Crime Prevention Awards) to recognize individuals and organisations across the various industries in Nigeria and the United Kingdom who have been outstanding and have demonstrated expertise in this field.</p>
							<p>The GRC & Financial Crime Prevention Annual Awards was created to recognise outstanding contributions by individuals and companies to the development, understanding, or implementation of GRC systems in Nigeria and the dissemination of the values associated with those people and businesses who embrace the challenge of embedding compliance, risk, ethics and governance in their organisation. The Awards will be an annual event which will be held at the end of every year.</p>

							</div>
						</div>
					</div>
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">The Objective</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>To help business especially financial organisations comply with GRC & Financial Crime Prevention regulations by providing them the motivation and recognition on a national and international level with prestigious GRC & Financial Crime Prevention industry awards.</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>To also help businesses showcase the need and benefits of being GRC compliant because this could change the world for the better.</p>
							</div>
						</div>
					</div>
						<div class="widget widget-archive">
							<h4 class="title">Benefits</h4>

							<ul style="font-size:14px; text-align: justify">
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0; mdi mdi-chevron-right"> Recognition and Prestige:</h6>
									<p>
										The summit offers a hybrid experience, providing both physical attendance and online participation options. Attendees can choose the mode that suits their preferences and circumstances, ensuring inclusivity and accessibility for professionals across the globe.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;">🌐 Mode of Attendance:</h6>
									<p>
										The summit offers a hybrid experience, providing both physical attendance and online participation options. Attendees can choose the mode that suits their preferences and circumstances, ensuring inclusivity and accessibility for professionals across the globe.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;">🌐 Mode of Attendance:</h6>
									<p>
										Winning or even being nominated for GRC and FinCrime Prevention awards elevates an organization's reputation and prestige within their industry, potentially leading to enhanced credibility with stakeholders like investors, clients, and regulators	
									</p>
								</li>
								<li><i class="mdi mdi-chevron-right mdi-18px"></i>To encourage tertiary institions in Nigeria and UK include GRC & Financial Crime Prevention courses in their curriclum.</li>

							</ul>
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