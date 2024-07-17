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
					<center><img src="{{asset('/assets/summit3.jpeg')}}" width="42%"></center>	
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
					
					<div class="col-12" style="text-align:justify; ">
						<ul class="mission-meta p-3" style="display: block">
							<li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i> Venue: Virtual / Online - Microsoft Teams</li> 
							<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: Tuesday, 23rd July, 2024</li>
							<li><i class="mdi mdi-clock-outline"></i>Time: 12pm - 2pm</li> 
							<li class="pt-3"><i class="mdi mdi-account-outline"></i> <a  href="{{route('summit_register')}}" target="_blank" style="font-size:25px"> REGISTER HERE </a> </li>
							
						</ul>

						<ul class="mission-meta">
							<li><i aria-hidden="true" class="mdi mdi-facebook"></i><a  href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank"> Follow on Facebook </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-instagram "></i><a  href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank"> Follow on Instagram </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop"> Follow on LinkedIn</a></li>			
						</ul>

						<h4 class="col-12" style="max-width:1300px;line-height:140%; margin-bottom:32px;padding-left:0;padding-right:0;">
							Theme: "Fortifying Corporate Integrity: Strategies for Navigating Conflict, Corruption, and Cybersecurity Challenges Through Robust Governance and Data Security"
						</h4>
						
						<div class="mission-info-text">
							
							<p></p><br>
							<h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 This conference</h6>
							<p>
								"Fortifying Corporate Integrity," is an essential gathering for professionals seeking a comprehensive understanding of navigating complex challenges in the corporate landscape. Focused on conflict, corruption, and cybersecurity issues, the event provides attendees with actionable strategies for fortifying corporate integrity through robust governance and data security measures.
							</p>
							
							
							<p class="p-3"></p>
							<h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Why Attend: </h5>
							<br>
							
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Holistic Approach: </h6>
							<p class="mb-3"> Explore the interconnected realms of conflict, corruption, and cybersecurity, understanding how they influence and impact each other within the corporate environment.</p>
							
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Expert Insights: </h6>
							<p class=" mb-2"> Engage with industry experts and thought leaders who will share their experiences, best practices, and innovative solutions for addressing contemporary challenges.	</p>
							
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Practical Strategies: </h6>
							<p class=" mb-2"> Acquire practical, hands-on strategies that can be implemented immediately to enhance corporate governance, mitigate conflicts of interest, combat corruption, and bolster cybersecurity defenses	</p>
							
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Networking Opportunities: </h6>
							<p class=" mb-2"> 
								Connect with like-minded professionals, fostering valuable relationships and creating a network of support for ongoing collaboration and information exchange.
							</p>

							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Regulatory Compliance: </h6>
							<p class=" mb-2"> 
								Stay abreast of the latest regulatory developments, ensuring that your organization remains in compliance and well-prepared to navigate the evolving legal landscape.
							</p>

							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Risk Mitigation: </h6>
							<p class=" mb-2"> 
								Learn how to identify and mitigate risks associated with conflicts of interest, corruption, and cybersecurity, safeguarding your organization against potential threats and reputational damage.
							</p>
							

							<p class="p-3">
							
							</p>
							
							
						</div>

						
						<div class="mission-info-text">
							<h6 class="col-12" style="padding-left:0;padding-right:0;"> </h6>
							<ol style="list-style-type: lower-roman;padding-right:10px;padding-left:0px;">
								By attending "Fortifying Corporate Integrity," participants will gain practical insights, actionable strategies, and a holistic understanding of the challenges posed by conflict, corruption, and cybersecurity. This conference promises to equip professionals with the knowledge and tools necessary to build resilient organizations in an ever-changing corporate landscape.
								🌟
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
						<img src="https://media.licdn.com/dms/image/D5603AQHNfPth2r9gJg/profile-displayphoto-shrink_400_400/0/1692153382835?e=1724284800&v=beta&t=iL5pR5uKMVzE2BySsCWuAIw6-khi7TsB9Rhg7-q_2P0" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Jerry Wong  </h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Experienced Risk Professional | Information Risk | Data Governance | Risk Analytics | Project Assurance | Risk Transformation | Mitigating Risks, Driving Compliance, and Safeguarding Business Operations</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/jerry-wong-82077a5a/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4E03AQF-mINZYZU_AA/profile-displayphoto-shrink_800_800/0/1516513073746?e=1723680000&v=beta&t=tNXsWmKzhtI0Fy3eZprCgfv98VMhSQ3-yjSZLy_1spA" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Anna (Goshunova) Lyzhova
							</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;"> Head of Department of Accounting, Analysis and Audit – Kazan</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/anna-lyzhova-1270a774/?utm_source=share&utm_medium=member_mweb&utm_campaign=share_via&utm_content=profile&originalSubdomain=ru" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQEqLTkhIv_7Rg/profile-displayphoto-shrink_400_400/0/1655476464942?e=1723680000&v=beta&t=3A6oV9KNdpeczqug8YaJj62JwcI1ofys_tu5Ki1Sgzs" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Morakinyo Animasaun</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Experienced professional providing cybersecurity insights and helping organisations assess and improve their Compliance, Risk, Cybersecurity and Digital Fraud capabilities.</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/morakinyoanimasaun/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('assets/nneka.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Nneka Nwaka (BL,LLB,CAMS,FCIN,CFE)						</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">CCO, Moment Holdings Limited</p>
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
						<img src="https://media.licdn.com/dms/image/D4D03AQGAXGSYqJVlDg/profile-displayphoto-shrink_400_400/0/1687959833869?e=1723680000&v=beta&t=i4Li2mUViOtPoVOK8lWFcnyt7Lp3Oue9T1I83d_edC4" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Abieyuwa (Stephanie) Usoh
								2nd degree connection2</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">LLB, BL, ACIArb UK, LEVEL 7 DIP, LLM, MSC, MBA
							</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/abieyuwa-usoh-164301145/" tabindex="-1">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D5603AQHpmDDpzTc3fQ/profile-displayphoto-shrink_400_400/0/1711885858940?e=1723680000&v=beta&t=1oBWAaYNCvk9hAvHUuwzoKa2kiiRRYB7pir_itzMZEE" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Lokesh Joshi	</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Experienced Governance, Risk and Compliance professional/Credit and ERM Manager/Leadership and Strategy/ Business Process Improvement/Inclusive Finance/ Digital Financial ServicGroKalp | Innovation - Hydrogen - CNT | India, Russia & Saudi Arabia
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/lokeshjos/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>

				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('https://media.licdn.com/dms/image/D4D03AQFsUREwAdsCEQ/profile-displayphoto-shrink_400_400/0/1684654035324?e=1723680000&v=beta&t=h7z-vILZYlmRwOjQMMycmJ-lozUHywHYYJaG4WrovBg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Femi Mosaku-Johnson						</h3>
							{{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Founding President at HERO ADVISORY NIGERIA</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/femi-mosaku-johnson-1200b0225/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>



				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/C4D03AQENbWT-QpBgkA/profile-displayphoto-shrink_400_400/0/1645190986697?e=1723680000&v=beta&t=oNTVWNHKZpoUzef4mvjXW-OvAHj5BGPUvSOwgk18YI0" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Mosope Keating </h3>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Fellow, Institute of Chartered Accountants of Nigeria (FCA) || ICAN</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/mosope-keating-11637746/?utm_source=share&utm_medium=member_mweb&utm_campaign=share_via&utm_content=profile&originalSubdomain=ca" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

				{{-- <div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/D5603AQGWk79gWOv3gQ/profile-displayphoto-shrink_400_400/0/1682971272930?e=1701907200&v=beta&t=8w6ao3q2cX5fdvoaxHPzCSUvXMZhQZTU7FDyvKmn8hM" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Femi Jaiyeola  </h3>
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
				</div> --}}

				{{-- <div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://www.lagoshouseofassembly.gov.ng/wp-content/uploads/2021/02/0e718077-c534-45e1-b9fa-b0b7d203ebc0.jpg" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">HON. FEMI SAHEED </h3>
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
				</div> --}}

				{{-- <div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('assets/images/jide.png')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Jide Ibitayo	</h3>
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
				</div> --}}

			</div>
			<ul class="mission-meta">
				<li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
				<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Tuesday, 23rd July 2024</li>
				<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li>
				<li><i class="mdi mdi-account-outline"></i> <a  href="{{route('summit_register')}}" target="_blank" style="font-size:20px"> REGISTER HERE </a> </li>
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