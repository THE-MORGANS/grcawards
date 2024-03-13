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
					{{-- <center><img src="{{asset('/assets/MicrosoftTeams-image.jpg')}}" width="42%"></center>	 --}}
				<h2 class="title-conference pt-5"><span>About The Summit</span></h2>
					{{-- <h5  class="btn btn-primary"> <a href="{{route('summit_programme')}}" >  Go to Summit Programme </a></h5>  --}}
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
							<p> Engage with industry experts and thought leaders who will share their experiences, best practices, and innovative solutions for addressing contemporary challenges.	</p>
							
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Practical Strategies: </h6>
							<p> Engage with industry experts and thought leaders who will share their experiences, 
								best practices, and innovative solutions for addressing contemporary challenges.	</p>
							
							{{-- <h6 class="col-12" style="padding-left:0;padding-right:0;">Defining Corporate Sustainability Due Diligence:</h6> --}}
							<p>
								Insightful Sessions: Engage in thought-provoking sessions featuring industry experts and thought leaders sharing their expertise, case studies, and innovative strategies.
 
								Global Networking: Connect with professionals from around the world, fostering invaluable relationships that transcend geographical boundaries and contribute to a global perspective.
								
								Knowledge Enhancement: Stay ahead of the curve with in-depth discussions on regulatory updates, technological advancements, and evolving trends that impact GRC and financial crime prevention.
								
								Interactive Workshops: Participate in hands-on workshops designed to enhance practical skills, providing actionable takeaways to implement within your organization.
								
								Tech Showcase: Explore cutting-edge technologies and solutions during our tech showcase, where industry-leading vendors present the latest tools and innovations.
								
								Peer-to-Peer Learning: Leverage the summit's collaborative environment to learn from peers facing similar challenges, gaining insights into successful strategies and solutions.
							</p>

							<p>
								It poses to thoroughly explore how sustainability due diligence goes beyond compliance to drive long-term value creation and 
								ethical decision-making.
							</p>
							<p class="p-3"></p>
							
							<h6 class="col-12" style="padding-left:0;padding-right:0;">🗓️ Period of the Event:</h6>
							<p>
							The GRC & Financial Crime Prevention Summit is a biannual event, featuring a mid-year conclave and a year-end extravaganza. The mid-year summit offers a pulse-check on the industry's progress, while the year-end event reflects on the year's advancements and sets the tone for the upcoming year.
							</p>
							<p class="p-3"></p>
							<h6 class="col-12" style="padding-left:0;padding-right:0;">🌐 Mode of Attendance:</h6>
							<p>
								The summit offers a hybrid experience, providing both physical attendance and online participation options. Attendees can choose the mode that suits their preferences and circumstances, ensuring inclusivity and accessibility for professionals across the globe.
							
							</p>
							<p class="p-3"></p>
							<h6 class="col-12" style="padding-left:0;padding-right:0;"> 🌍 Global Participation:</h6>
							<p>
								With a commitment to fostering a global community, the GRC & Financial Crime Prevention Summit welcomes participants from every corner of the world. This diverse representation enriches the discussions, broadens perspectives, and enhances the overall summit experience.</p>

							
						
						</div>
						<p class="p-3"></p>
						<div class="mission-info-text mt-4 ">
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">🏆 Benefits to Business Leaders and Professionals: </h6>
						
							<p>
								<span class="col-12 mb-1" style="padding-left:0;padding-right:0; font-weight:bolder; color:#000">Strategic Insights</span>
								
								Gain strategic insights to make informed decisions in the ever-evolving landscape of GRC and financial crime prevention.</p>

							<p>
								<span class="col-12 mb-1" style="padding-left:0;padding-right:0; font-weight:bolder; color:#000">Professional Growth</span>
								
								Elevate your professional skills through knowledge-sharing, networking, and exposure to industry best practices.
							</p>

							<p>
							<span class="col-12 mb-1" style="padding-left:0;padding-right:0; font-weight:bolder; color:#000">Business Opportunities:</span>
							
								Explore potential collaborations, partnerships, and business opportunities with a diverse and influential audience.
 
							</p>
							<p>
							<span class="col-12 mb-1" style="padding-left:0;padding-right:0; font-weight:bolder; color:#000">Comprehensive Understanding:</span>
							
								Acquire a comprehensive understanding of emerging risks, regulatory challenges, and technological solutions shaping the industry
							</p>

							
							<p>
								<span class="col-12 mb-1" style="padding-left:0;padding-right:0; font-weight:bolder; color:#000">Leadership Development:</span>
							
								Cultivate leadership skills by learning from successful professionals and industry visionaries, empowering you to lead effectively in your organization.
							</p>
						</div>
						
						<div class="mission-info-text">
							<h6 class="col-12" style="padding-left:0;padding-right:0;"> </h6>
							<ol style="list-style-type: lower-roman;padding-right:10px;padding-left:0px;">
								Join us at the GRC & Financial Crime Prevention Summit, where innovation meets collaboration, and together, we fortify the pillars of governance, risk management, compliance, and financial crime prevention. Secure your spot today for a transformative experience that will shape the future of your professional journey and contribute to the collective advancement of the industry. 🌟
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