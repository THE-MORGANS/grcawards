<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit')

<head>
	@include('partials.voter.head')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}" />
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
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
					<li>Summit</li>
				</ul>
			</div>
			<h1 class="title">The Summit</h1>
		</div>
	</div>
	<!-- page title -->
	<!-- =========== S-CONFERENCE-COUNTER =========== -->
	<section id="about" class="s-conference-mission pt-0">
		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>About The Summit</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img">
						<span>
							<img src="assets/img/placeholder-all.png" data-src="assets/img/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
							<img class="mission-img rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/img-about-home2.jpg" alt="img">
							<img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						</span>
					</div>
					<div class="col-12" style="text-align:justify;">
						<ul class="mission-meta">
							<li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
							<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
							<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li>
						</ul>
						<h4 class="col-12" style="max-width:1300px;line-height:140%; margin-bottom:32px;padding-left:0;padding-right:0;">Topic: Senior Management Certification Regime, & Ring Fencing FIs Against Financial Crime and Conduct Risks and Restoring Confidence in the Market/Public</h4>
						
						<div class="mission-info-text">
							<p>This Summit is organised by THE MORGANS, a globally recognised advocate for effective Governance, Risk & Compliance systems in organisations and a promoter of Anti-Money Laundering and Counter-Terrorism Measures. </p>
							<p> It strives to elucidate on Senior Managers and Certification Regime (SMCR) as a crucial financial service regulation in corporate institutions while underscoring the ingenuity in its design in imposing personal accountability 
								on senior managers at financial services firms to improve the conduct of all employees at these firms. By so doing, individuals and organisations across the various industries in Nigeria, 
								the United Kingdom and other countries, who have demonstrated expertise in this field, would be equipped with the knowledge capacity to effect needed change and adopt newer procedural workflows. </p>
						<p>	Amongst discussions and intricate details to be shared, the importance of Ring Fencing FIs Against Financial Crime and Conduct will also play a major role in the discourse of the Summit.  </p>
						<p>	This is because THE MORGANS understands that as a financial policy, Ring Fencing FIs doesn't just provide a virtual barrier 
							that segregates part of an individual's or company's financial assets from the rest. 
							It does more than protect retail banking functions used by customers by separating them 
							from other activities. Ring Fencing in itself, results in the separation of core banking 
							services — taking deposits, making payments and providing overdrafts for retail customers and 
							small businesses — from other activities that banks undertake. This goes on to help protect 
							core services and the customer from problems which may arise elsewhere within a banking group. </p>
							<p class="p-3"></p>
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Objectives: </h6>
							<p>To help businesses especially financial organisations understand the need for Senior Management Certification Regime, & Ring Fencing FIs Against Financial Crime and Conduct </p>
								<p>To equip businesses with the needed knowledge and tools to enable them to effectively comply with the Senior Managers and Certification Regime (SMCR) and Ring Fencing policies.</p>
							<p>To share insights and updated information on Senior Management Certification Regime, & Ring Fencing FIs Against Financial Crime and Conduct </p>

							</div>
						
						<div class="mission-info-text">
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Benefits: </h6>
							<ol style="list-style-type: lower-roman;padding-right:10px;padding-left:10px;">
								<li style="font-size: 14px;">To promote awareness about Senior Management Certification Regime, & Ring Fencing FIs Against Financial Crime and Conduct in Nigeria and the United Kingdom.</li>
								<li style="font-size: 14px;">To encourage and promote industry best practices and adherence to prevailing local and international regulations and standards. </li>
									<li style="font-size: 14px;">To encourage tertiary institutions in Nigeria and UK to include GRC & Financial Crime Prevention courses in their curriculum.</li>
										<li style="font-size: 14px;">To create healthy relationships amongst financial institutions in the area of promoting good governance systems as well as effective risk management and compliance programs. </li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->
	<section class="s-our-speaker s-event-schedule pt-0">
		<div class="container">
			<h2 class="title-conference"><span>Our Speakers</span></h2>
			<div class="slider-our-speaker">
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('/assets/2023/elena.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Elena Pykhova</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director and Founder, The OpRisk Company</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/elenapykhova/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('/assets/2023/ola.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Ola Olayinka  <small style="font-size: smaller;">FICA</small></h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Compliance Officer and Group MLRO at Whites Group</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/ola-olayinka/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('/assets/2023/daniel.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Daniel Saliba (formerly Ibrahim)</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Group Chief Risk and Compliance Officer, & MLRO
							</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/daniel-saliba-formerly-ibrahim-0b657026/" tabindex="-1">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('/assets/2023/ged.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">George, Lawrence Badejo-Adegbenga</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Panelist</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Executive Officer - Lawyer - Entrepreneur</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/george-lawrence-badejo-adegbenga-261a61b/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				
				
				
				
			</div>
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