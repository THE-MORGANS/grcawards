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
	<div class="page-title" style="background-color:#D4AF37; height:150px">
		<div class="container" > 
			{{-- <div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Summit</li>
				</ul>
			</div> --}}
			<h1 class="title">The Summit</h1>
		</div>
	</div>
	<!-- page title -->
	<!-- =========== S-CONFERENCE-COUNTER =========== --> 
	<section id="about" class="s-conference-mission pt-0">
		<div class="s-our-mission ">
		
			<div class="container">
			
				<div class="conference-counter-wrap">
						{{-- <div class="conference-counter-cover">
							<h4>The event will begin through</h4>
							<div id="" class="clock-timer clock-timer-conference">
								<div class="clock-item days-item">
									<span class="days" id="days">30</span>
									<div class="smalltext">Days</div>
								</div>
								<div class="clock-item hours-item">
									<span class="hours" id="hours">23</span>
									<div class="smalltext">Hours</div>
								</div>
								<div class="clock-item minutes-item">
									<span class="minutes" id="minutes">59</span>
									<div class="smalltext">Minutes</div>
								</div>
								<div class="clock-item seconds-item">
									<span class="seconds" id="seconds">37</span>
									<div class="smalltext">Seconds</div>
								</div>
							</div>
						</div> --}}
					</div>
					<br>
					<center><img src="{{asset('/assets/MicrosoftTeams-image.jpg')}}" width="42%"></center>	
				<h2 class="title-conference pt-5"><span>About The Summit</span></h2>
					<h5  class="btn btn-primary"> <a href="{{route('summit_programme')}}" >  Go to Summit Programme </a></h5> 
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
							{{-- <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i> </li> --}}
							{{-- <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
							<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li> --}}
							<li><i class="mdi mdi-account-outline"></i> <a  href="{{route('summit_register')}}" target="_blank" style="font-size:20px"> REGISTER HERE </a> </li>
							
						</ul>

						<ul class="mission-meta">
							<li><i aria-hidden="true" class="mdi mdi-facebook"></i><a  href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank"> Follow on Facebook </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-instagram "></i><a  href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank"> Follow on Instagram </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop"> Follow on LinkedIn</a></li>			
						</ul>

						<h4 class="col-12" style="max-width:1300px;line-height:140%; margin-bottom:32px;padding-left:0;padding-right:0;">
							Topic: Corporate Sustainability Due Diligence - A New Era of Accountability with Implication of Artificial Intelligence on GRC & Financial Crime Prevention
						</h4>
						
						<div class="mission-info-text">
							<p>Welcome to the Corporate Sustainability Due Diligence Summit!</p><br>
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Introduction: </h6>
							<p>
								The GRC & FinCrime Prevention Summit is organised by THE MORGANS.
							</p>
							<p>
								In today's rapidly evolving business landscape, sustainability and accountability have become more than just buzzwords – they're essential pillars for responsible corporate conduct.
								This summit will delve deep into the realm where sustainability meets technology, ethics meets innovation, and accountability takes centre stage.
							</p>
							<p>
								At the GRC & FinCrime Prevention Awards and Summit 2023, we would embark on a transformative journey into the world of ethical business 
								practices, accountability, and the powerful integration of artificial intelligence (AI) in Governance, Risk Management, and Compliance 
								(GRC) as well as Financial Crime Prevention. 
							</p>
							
							<p class="p-3"></p>
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Objectives: </h6>
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Defining Corporate Sustainability Due Diligence:</h6>
							<p>
								One of the postures of this enlightening summit is to ensure that all stakeholders and attendees, gain a comprehensive understanding of what corporate sustainability due diligence entails 
								and its significance in today's dynamic business landscape.	
							</p>
							<p>
								It poses to thoroughly explore how sustainability due diligence goes beyond compliance to drive long-term value creation and 
								ethical decision-making.
							</p>
							
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Navigating Corporate Sustainability Due Diligence:</h6>
							<p>
								This Summit will uncover the essence of corporate sustainability due diligence and its pivotal role in modern business operations.
							<br>It will also shed profound insight into how organizations can integrate sustainability principles across supply chains, operations, and decision-making processes
							</p>

							<h6 class="col-12" style="padding-left:0;padding-right:0;">The AI Revolution in Governance Risk, and Compliance:</h6>
							<p>
								At this exemplary gathering, this Summit poses to uncover the potential of AI-driven technologies and the revolutionary impact on the landscape of Governance, Risk Management, and Compliance.
							<br>Examination of how AI empowers organizations to streamline processes, detect risks, and respond proactively to regulatory changes.
							</p>

							<h6 class="col-12" style="padding-left:0;padding-right:0;">AI's Role in Financial Crime Prevention:</h6>
							<p>
								This summit will delve into the world of financial crime prevention, where AI's analytical prowess is transforming the way businesses identify and combat illicit activities.
							<br>It will also expatiate on AI's data-driven insights to enhance fraud detection, anti-money laundering efforts, and overall compliance with anti-corruption regulations.
							</p>

							<h6 class="col-12" style="padding-left:0;padding-right:0;">Creating an Accountable Business Ecosystem:</h6>
							<p>
								At this summit, the imperative of accountability in fostering stakeholder trust and promoting sustainable growth will be strongly emphasized.
							<br>Exploration of how the convergence of corporate sustainability due diligence, AI-enabled GRC, and financial crime prevention contributes to a responsible and accountable business environment will also be done. 
							</p>
						
						</div>
						
						<div class="mission-info-text mt-4 ">
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Benefits: </h6>
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Expert Insights and Thought Leadership:</h6>
							<p>
								Engage with thought leaders, industry veterans, and subject matter experts who bring deep insights into corporate sustainability, AI, GRC, and financial crime prevention.
							<br>Gain access to a diverse range of perspectives that will expand your horizons and inform your strategic decisions.
							</p>

							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Strategic Knowledge Exchange:</h6>
							<p>
								Elevate your understanding of current trends and best practices at the intersection of sustainability, AI, and risk management.
								Equip yourself with actionable strategies that you can implement to drive your organization towards a sustainable and ethically responsible future.
							</p>

							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Networking and Collaboration:</h6>
							<p>
								Connect with peers, professionals, and innovators in the fields of sustainability, AI, and compliance.
							<br>Forge valuable connections that could potentially lead to collaborative projects, partnerships, and the sharing of successful strategies.
							</p>

							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Real-world Applications and Case Studies:</h6>
							<p>
								Dive into real-world examples that illustrate how AI is transforming GRC and financial crime prevention.
							<br>Learn from practical experiences that highlight the tangible benefits of incorporating AI into your organization's compliance and accountability efforts.
							</p>

						</div>
						{{-- <div class="mission-info-text mt-2">
							<h6 class="col-12" style="padding-left:0;padding-right:0;">Benefits: </h6>
							<ol style="list-style-type: lower-roman;padding-right:10px;padding-left:10px;">
								<li style="font-size: 14px;">To promote awareness about Senior Management Certification Regime, & Ring Fencing FIs Against Financial Crime and Conduct in Nigeria and the United Kingdom.</li>
								<li style="font-size: 14px;">To encourage and promote industry best practices and adherence to prevailing local and international regulations and standards. </li>
									<li style="font-size: 14px;">To encourage tertiary institutions in Nigeria and UK to include GRC & Financial Crime Prevention courses in their curriculum.</li>
										<li style="font-size: 14px;">To create healthy relationships amongst financial institutions in the area of promoting good governance systems as well as effective risk management and compliance programs. </li>
							</ol>
						</div> --}}
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
						<img src="https://media.licdn.com/dms/image/C4D03AQFpNfd_khB6Qw/profile-displayphoto-shrink_800_800/0/1603547633866?e=1701907200&v=beta&t=t0vVk6UKMakdV_h3QZPyDUpMDyK1_JwtW3Ub8fiVrGI" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Dr. Emmanuel Moore ABOLO ,PhD-Econs, FGRCP,FIMC, FNIMN,FPSSN </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">The Risk Master; Global Speaker; Systems Thinker</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/dr-emmanuel-moore-abolo-phd-econs-fgrcp-fimc-fnimn-fpssn-2a096a6/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('/assets/MicrosoftTeams-image2.png')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Funmilayo Ekundayo FCIS</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;"> CEO / MD , STL Trustees &  President , ICSAN</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/funmilayo-ekundayo-67903430/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D4D03AQG99ImLBVU5uA/profile-displayphoto-shrink_400_400/0/1685298259068?e=1701907200&v=beta&t=kW3w47gwEPE1psZXvZUthTCC-k_VP7mpyqDVh_A59yE" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Dr. Ezekiel Oseni</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Risk Officer (Bank of Industry, Nigeria) | President and Chairman of Council, Chartered Risk Management Institute (CRMI) of Nigeria | Entrepreneurship Coach | Lecturer | Facilitator</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/dr-ezekiel-oseni-499b8882/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQGTc6LH4AUTVg/profile-displayphoto-shrink_400_400/0/1648735369903?e=1701907200&v=beta&t=EGU0DQBydMuAIJ3JvtLh7NW7Eb1dkCb3LXXXr4ndwOk" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Dr. Chinyere Almona </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director-General/Chief Executive at LCCI | Governance Professional with vast global experience in establishing standards | Cognitive Reflex Conditioning™ Practitioner | Board Advisor & Trainer | Author</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/chinyerealmona/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D4D03AQFl5qRxXdFaSA/profile-displayphoto-shrink_400_400/0/1694571288831?e=1701907200&v=beta&t=4CdwIwni78eXdnJLSzPxphZ3eAf7UIxhXHEdSkYm9Ag" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Florence Abraham</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">DIRECTOR. GOPTS.MGMT. Central Bank of Nigeria Ensures Compliance with Prudential Regulations, ML TF Laws/Reg, Foreign EXcnge, in Central Bank of Nigeria. Anti-Money Laundering Specialist & Trainer
							</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/florence-abraham-86235243/" tabindex="-1">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D4D03AQFKVqkDOsrRfg/profile-displayphoto-shrink_400_400/0/1686178792710?e=1701907200&v=beta&t=XKjPBsQ19jmtfzEWt8TgpSqXm7zBlutmI885iqQLx9o" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Debo Aderoju, MBA, ACIB, FCGP, FICA,MCIB</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Experienced Governance, Risk and Compliance professional/Credit and ERM Manager/Leadership and Strategy/ Business Process Improvement/Inclusive Finance/ Digital Financial Servic</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/debo-aderoju-mba-acib-fcgp-fica-mcib-ab1a7638/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4E03AQGZJExa-aVcJQ/profile-displayphoto-shrink_400_400/0/1621623904233?e=1701907200&v=beta&t=a1ekgSs1DPINvEEld2yLn3ICPYZfl42He92WgVUz2UA" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Rose Nkechi </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director of Financial Crime Compliance |Fintech| Computer & Network Security| Digital Payments| Board member</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/rose-nkechi-367119144/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('assets/Chinelo Ubah_20231005_084651_0000.png')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Chinelo Ubah </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Group Head of CFCC Governance, Risk Assessment and Testing</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/chinelo-ubah-0954b610/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D4D03AQHrLRikQZNLsA/profile-displayphoto-shrink_400_400/0/1688984408747?e=1701907200&v=beta&t=ljiUOTvYNQl--PcDTeCS5gnaCNcg14VgANxiEzxJR_A" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Sina Olaosun (CFE, DCP, HCIB, MSc, MBA, BTech)</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Compliance Officer at SunTrust Bank Ltd</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/sina-olaosun-cfe-dcp-hcib-msc-mba-btech-5476b1185/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>



				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQE7DHsFYmx6SQ/profile-displayphoto-shrink_400_400/0/1557700193350?e=1701907200&v=beta&t=7kDK8SF7fdkr8LBWF1sZdaadw2CIkcS9EfMPDbHoCJA" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Sunny Ukeachu - FNiiS, FIMC </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Founder|CEO at Mitiget</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/sunny-ukeachu-fniis-fimc-b507a632/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D5603AQGWk79gWOv3gQ/profile-displayphoto-shrink_400_400/0/1682971272930?e=1701907200&v=beta&t=8w6ao3q2cX5fdvoaxHPzCSUvXMZhQZTU7FDyvKmn8hM" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Femi Jaiyeola  </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Group Chief Conduct & Compliance Officer - Access Bank</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/femi-jaiyeola-025a142/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://www.lagoshouseofassembly.gov.ng/wp-content/uploads/2021/02/0e718077-c534-45e1-b9fa-b0b7d203ebc0.jpg" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">HON. FEMI SAHEED </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Hon. House of Rep</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/femi-saheed-a500542b/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('assets/images/jide.png')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Jide Ibitayo	</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Company Secretary/Group Legal Counsel at Mutual Benefits Assurance Plc</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/jide-ibitayo-381ba480/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

			</div>
			<ul class="mission-meta">
				{{-- <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
				<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
				<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li> --}}
				<li><i class="mdi mdi-user"></i><a  href="https://events.teams.microsoft.com/event/08b9affe-26a5-4f61-b136-16c8cab79002@252fbfd9-7d72-47b6-bc0d-43af771c9b6e" target="_blank" style="font-size:20px">REGISTER HERE </a> </li>
			</ul>

			<ul class="mission-meta">
					<li><i aria-hidden="true" class="mdi mdi-facebook"></i><a  href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank"> Follow on Facebook </a> </li>
					<li><i aria-hidden="true" class="mdi mdi-instagram "></i><a  href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank"> Follow on Instagram </a> </li>
					<li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop"> Follow on LinkedIn</a></li>			
			</ul>
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


	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Jun 15, 2023 12:00:00").getTime();
		
		// Update the count down every 1 second
		var x = setInterval(function() {
		
		  // Get today's date and time
		  var now = new Date().getTime();
			
		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;
			
		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			
		  // Output the result in an element with id="demo"
		  document.getElementById("days").innerHTML = days;
		  document.getElementById("hours").innerHTML = hours ;
		  document.getElementById("minutes").innerHTML =  minutes 
		  document.getElementById("seconds").innerHTML =  seconds;
			
		  // If the count down is over, write some text 
		}, 1000);
		</script>

</body>


</html>