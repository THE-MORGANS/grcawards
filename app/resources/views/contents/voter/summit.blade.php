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
					<center><img src="{{asset('/assets/MicrosoftTeams-image.png')}}" width="42%"></center>	
				{{-- <h2 class="title-conference pt-5"><span>About The Summit</span></h2> --}}
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
						{{-- <ul class="mission-meta">
							<li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
							<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
							<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li>
							<li><i class="mdi mdi-account-outline"></i> <a  href="{{route('summit_register')}}" target="_blank" style="font-size:20px"> REGISTER HERE </a> </li>
							
						</ul> --}}

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
								The GRC & FinCrime Prevention Summit is organised by THE MORGANS; a global GRC Consultancy and Training firm with an objective geared 
								towards promoting awareness about GRC & Financial Crime Prevention in Nigeria and the United Kingdom, and encouraging industry best practices
								and adherence to prevailing local and international regulations and standards.
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
						<img src="https://media.licdn.com/dms/image/C5603AQEUgYKbsoY1cA/profile-displayphoto-shrink_800_800/0/1542199641672?e=1689206400&v=beta&t=OCR8_S6kk24GNdnPwd9jwrCjsSXO-Ah2-0jiddGWBaY" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Mateo Jarrin Cuv </h3>
							<p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Global Manager for Partners & Media at The Association of Governance, Risk & Compliance</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/mateojarrincuvi/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('./assets/2023/elena.jpeg')}}" alt="img">
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
						<img src="{{asset('../assets/2023/ola.jpeg')}}" alt="img">
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
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
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

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQFpNfd_khB6Qw/profile-displayphoto-shrink_800_800/0/1603547633866?e=1689206400&v=beta&t=boEj6DE_2ZKTD8qJhRRegUiuUjUAAltcE0gP_f8fXBQ" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Dr. Emmanuel Moore ABOLO, PhD-Econs, FGRCP,FIMC, FNIMN,FPSSN </h3>
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Group MD/CEO The Risk Management Academy LTD; Riskmap Consulting Ltd & DG, The Economic Thinktank CeGroup</p>
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
						<img src="https://media.licdn.com/dms/image/C4D03AQHXYc3cFlMFfg/profile-displayphoto-shrink_800_800/0/1653543590268?e=1689206400&v=beta&t=T7aeQm3kP36EXEpwdnl-1tbHYP02C1rbBefxlHOyBzY" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Adekunle Koleosho PhD, FCA, ACS </h3>
							<p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director, Head of Audit and Risk; Ex Head of Corporate & Investment Banking Audit at Stanbic IBTC. Ex Equity Trader for Foreign &</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/adekunle-koleosho-phd-fca-acs-b9173011a/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQGPYL1O253Y_Q/profile-displayphoto-shrink_800_800/0/1630400633937?e=1689206400&v=beta&t=8ejOMrVBjgYpFv0HaCA8pal4P78hvMqg2Og9r6j7tbc" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Theophilus Oladipo </h3>
							<p class="prof" style="font-size:16px;line-height:1rem;">Speaker</p>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Fintech | Financial Crimes Compliance | Digital Economy</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/theophilus-oladipo-79a35654/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				


				
				
				
				
			</div>
			<ul class="mission-meta">
				<li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
				<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
				<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li>
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