<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit')

<head>
	@include('partials.voter.head')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}" />
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner">
				<img class="ball" src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664067165/grcfincrimeawards/landing_page/grc_awards_summit_logo_y8nqdz.png" />
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
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Objectives: </h6>
							<p>The summit aims to help businesses especially financial organisations comply with GRC & Financial Crime Prevention regulations by providing them with the necessary information, motivation and recognition on a national and international level. It also helps businesses showcase the need and benefits of being GRC compliant because this would improve the world.</p>
							<p>In order to strengthen the efforts spent for the fight against financial crimes of money laundering and terrorism funding, there is a need for the government, financial institutions and businesses to cooperate among each other by sharing information. Since the financial industry suffers from the common issues regarding the quality, quantity, transparency and treatment of information, sharing of it among FIs is expected to alleviate the workload and save time.</p>
							<p>As the technology continues to offer endless possibilities, it is likely that the financial criminals will discover new methods to manipulate the financial industry to commit money laundering or terrorist financing crimes. However, at the same time, it is possible to use the technologies in detecting those criminal activities as well. Therefore, to minimize the risk of financial crimes, it is essential for all the stakeholders of the financial environment to embrace the importance of adopting a strong AML compliance framework and follow the trends in the industry to remain aware of the potential risks.</p>
							<p>Likewise, with the growing reliance on third parties (business consultants, partners, contractors, service providers, etc.) effective management of the risks stemming from the extended enterprise is paramount. Third-party risk management (TPRM) has risen in importance and will continue to be a key focus area for organizations around the world this year and beyond.</p>
							<p>TPRM is evolving and expanding its scope to include fourth and nth parties with which an organization can have indirect business relationships. A disruption anywhere on the value chain can create a domino effect, sending ripples down the chain and across the market. Visibility and GRC alignment across the network will continue to be key with growing interdependencies between organizations.</p>
							<p>Furthermore, with the amplified digital interconnectedness of organizations, third-party cyber risks have become a major area of concern for organizations.</p>
						</div>
						<div class="mission-info-text">
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Benefits: </h6>
							<ol style="list-style-type: lower-roman;padding-right:10px;padding-left:10px;">
								<li style="font-size: 14px;">To promote awareness about GRC & Financial Crime Prevention in Nigeria and the United Kingdom.</li>
								<li style="font-size: 14px;">To encourage and promote industry best practices and adherence to prevailing local and international regulations and standards.</li>
								<li style="font-size: 14px;">To encourage tertiary institutions in Nigeria and UK to include GRC & Financial Crime Prevention courses in their curriculum.</li>
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
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
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
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
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
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
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
							<p class="prof" style="font-size:16px;line-height:1rem;">Panelist</p>
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