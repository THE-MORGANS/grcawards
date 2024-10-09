<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
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
        <div class="container">
            {{-- <div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Summit</li>
				</ul>
			</div> --}}
            <h5 class="title">2024 GRC and Financial Crime Prevention Summit</h5>
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
                {{-- <center><img src="{{asset('/assets/summit3.jpeg')}}" width="42%"></center>	 --}}
                <h2 class="title-conference pt-5"><span>About The Summit</span></h2>
                {{-- <h5 class="btn btn-primary"> <a href="{{ route('summit_programme') }}"> Go to Summit Programme </a></h5> --}}
                <div class="row">
                    <div class="col-lg-6 our-mission-img">
                        <span>
                            <img src="assets/img/placeholder-all.png" data-src="assets/img/our-mission-2.svg"
                                alt="" class="mission-img-effect-1 rx-lazy">
                            <img class="mission-img rx-lazy" src="assets/img/placeholder-all.png"
                                data-src="assets/img/img-about-home2.jpg" alt="img">
                            <img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-gray-little.svg"
                                alt="" class="about-img-effect-2 rx-lazy">
                        </span>
                    </div>

                    <div class="col-12" style="text-align:justify; ">
                        <ul class="mission-meta p-3" style="display: block">
                            <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Lagos Oriental Hotel, 3 Lekki Road, Victoria Island, Lagos</li>
                            <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: Friday, 8th November, 2024
                            </li>
                            <li><i class="mdi mdi-clock-outline"></i>Time: 9am</li>
                            <li class="pt-3"><i class="mdi mdi-account-outline"></i> <a
                                    href="{{ route('summit_register') }}" target="_blank" style="font-size:25px">
                                    REGISTER HERE </a> </li>

                        </ul>

                        <ul class="mission-meta">
                            <li><i aria-hidden="true" class="mdi mdi-facebook"></i><a
                                    href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl"
                                    target="_blank"> Follow on Facebook </a> </li>
                            <li><i aria-hidden="true" class="mdi mdi-instagram "></i><a
                                    href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link"
                                    target="_blank"> Follow on Instagram </a> </li>
                            <li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a
                                    href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop">
                                    Follow on LinkedIn</a></li>
                        </ul>

                        <h4 class="col-12"
                            style="max-width:1300px;line-height:140%; margin-bottom:32px;padding-left:0;padding-right:0;">
                            Theme: "Digital Frontiers in Governance, Risk & Compliance: Addressing Financial Crime and
                            Economic Challenges Across Global Sectors 2025 and Beyond"
                        </h4>

                        <div class="mission-info-text">

                            <p></p><br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 This conference</h6>
                            <p>
                                This event promises to be one of the most impactful summits on governance, risk
                                management, and compliance (GRC), specifically addressing the evolving threats posed by
                                financial crime in an increasingly digital and interconnected global economy.

                                This year's theme is set to explore the increasing intersection between digital
                                innovation and financial crime , fraud prevention, focusing on how emerging technologies
                                and regulatory frameworks can tackle financial crime and fraud in a rapidly evolving
                                global economy.

                                As we move toward 2025, financial institutions, regulators, and global businesses face
                                mounting challenges from cyber threats, fraud, and cross-border economic crimes. The
                                summit aims to provide a platform for thought leaders and experts to share insights on
                                how digital transformation can be leveraged to enhance governance, risk management, and
                                compliance, while addressing the global economic impact of financial crime.
                            </p>


                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Key Focus Areas: </h5>
                            <br>
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Adapting Governance Strategies for a Digital World: </h6>
                            <p class="mb-3"> Emphasis on how organizations can build resilient governance frameworks to handle emerging digital risks.</p>
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Financial Crime & Fraud Prevention Through Innovation: </h6>
                            <p class="mb-3"> Exploring the role of artificial intelligence, blockchain, and big data in detecting and mitigating fraud, money laundering, and cybercrime.</p>
							<h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Global Economic Implications: </h6>
                            <p class="mb-3"> A focus on the economic challenges financial crime and fraud presents, particularly for emerging markets, and the necessary cross-sector collaboration for a stronger global economy.</p>


                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Why Attend: </h5>
                           
                            <p class="mb-3"> Attendees will have the unique opportunity to gain actionable insights from global experts, explore cutting-edge technologies, and understand the future trends in governance, risk, and compliance. This summit is an essential gathering for professionals who aim to stay ahead of regulatory challenges, strengthen their risk frameworks, and combat financial crime in an increasingly digital world.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Why You Must Attend: </h6>
                            <p class=" mb-2"> As the world continues to embrace rapid technological advancements, businesses, regulators, and financial institutions face unprecedented risks and opportunities. The 2024 summit provides a critical platform for stakeholders across various industries to come together and discuss innovative strategies for preventing financial crime, improving governance, and adapting to global economic challenges.
								By attending, you'll have the chance to: </p>
								<ul>
									<li>
										<p> <span style="font-weight: bold"> Gain Insights from Global Experts:</span> Learn directly from industry leaders, regulators, and technologists about how they are tackling today's most pressing financial crime issues.</p>
									</li>
									<li>
										<p> <span style="font-weight: bold"> Expand Your Network:</span> Connect with decision-makers, experts, and peers in GRC, financial crime prevention, and risk management from Nigeria and around the world</p>
									</li>
									<li>
										<p> <span style="font-weight: bold"> Stay Ahead of Compliance Trends:</span>Discover how the latest in AI, machine learning, and big data is shaping the future of compliance and how your organization can stay ahead of regulatory challenges.</p>
									</li>
								</ul>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Benefits of Attending: </h6>
							<ul>
								<li>
									<p> <span style="font-weight: bold"> Practical Knowledge:</span> Attendees will walk away with actionable insights into effective governance frameworks, risk management practices, and compliance solutions, especially suited to Nigerian and African business environments.</p>
								</li>
								<li>
									<p> <span style="font-weight: bold"> Real-World Case Studies:</span> Learn from real-life examples and case studies from top financial institutions, demonstrating how they've successfully navigated digital transformation while combating financial crime.</p>
								</li>
								<li>
									<p> <span style="font-weight: bold"> New Technologies:</span>Explore cutting-edge technologies designed to detect, prevent, and manage financial crime in both local and international markets.</p>
								</li>
								<li>
									<p> <span style="font-weight: bold">Global Perspectives:</span>Benefit from a global perspective on regulatory trends, compliance issues, and risk mitigation strategies that are critical for staying competitive in the financial sector.</p>
								</li>
							</ul>
                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Expectations::
                            </h6>
                            <p class=" mb-2">
								Attendees can expect a highly interactive and engaging event, with keynote presentations, panel discussions, and networking sessions that foster collaboration. Experts will share their knowledge on key topics such as digital currency regulations, AI-powered financial crime detection tools, and cross-border regulatory cooperation. This is a must-attend event for professionals looking to strengthen their organizations’ governance and risk frameworks while addressing emerging financial crime threats in a post-2025 world.
 
								Mark your calendar for the 2024 GRC and Financial Crime Prevention Summit, and be prepared to deepen your expertise, expand your network, and enhance your organization's compliance strategies in an ever-changing digital landscape!</p>



                            <p class="p-3">

                            </p>


                        </div>


                        <div class="mission-info-text">
                            <h6 class="col-12" style="padding-left:0;padding-right:0;"> </h6>
                            <ol style="list-style-type: lower-roman;padding-right:10px;padding-left:0px;">
                                Mark your calendar for the 2024 GRC and Financial Crime Prevention Summit, and be prepared to deepen your expertise, expand your network, and enhance your organization's compliance strategies in an ever-changing digital landscape!
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
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQExN6IkZUrLlA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1709110417145?e=1733961600&v=beta&t=Syr1ra4F9ICNDcHDIHqPDKSoIPEvtk4boCTRqINn5g0"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Edidiong Akan </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Compliance Officer at Stanbic IBTC Pension</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/edidiong-akan-6a152922/" tabindex="-1"
                                        target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQELwSXIPMt_-Q/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1699016833958?e=1733961600&v=beta&t=c9RF8qRJ8hUcUZRLfpb-TcWd_3jlz8Y1Fi9r9KJftkU"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Florence Abraham (MSc., FCA, HCIB, CAMS, FCIN, FISL)
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;"> Former DIRECTOR. Central Bank of Nigeria. Prudential Regulations, ML TF Reg, Foreign EXcnge, in Central Bank of Nigeria. Anti-Money Laundering Specialist & Trainer</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/florence-abraham-msc-fca-hcib-cams-fcin-fisl-86235243/"
                                        tabindex="-1" target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/C4D03AQFqaBPFIAXNuA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1616064621997?e=1733961600&v=beta&t=Nv0GzbRbuovOixIcB-9kPOg-o1NaXkt9fZrr0i-hZ6A"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Temitope Yusuff</h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director | Business and Finance Leader | Governance, Risk and Control Expert | Transforming Businesses to achieve Sustainable Growth</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/temitope-yusuff-86b41b57/" tabindex="-1"
                                        target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQFf9sAQkGLYSQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1683622890981?e=1733961600&v=beta&t=A9J0JywVMY-wgUWudmlrxu297mDU9aPwIwba5KZkt2s" alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Hossana Gani (Dip.CorpGov), ACIS, DipESG
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">MBA Candidate LIGS-USA || Corporate Governance || Legal Risk & Compliance
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/ganihossana/" tabindex="-1"
                                        target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQEfVTR3zDVMCQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1694820167884?e=1733961600&v=beta&t=Sk5n8v2QQ9LoG7EnAzUBltlM8dOrdaoL9WC20gG4nmg"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Adedamola Oloko, ACIIN</h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Innovative Partnerships & Investments @ AXA | InsurTech Business Series Podcast | InsurTech in Africa
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/adedamolaoloko/" tabindex="-1">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/C4E03AQF-hJl85yf7ag/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1664021663179?e=1733961600&v=beta&t=Y7oaPfuP63hJ6j6LxOpwmwz3Xn4Ej-DWjT3itfocZ78"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">George, Lawrence Badejo-Adegbenga</h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CEO & Founder @ MIM Finance | Legal & Compliance, Strategic Leadership, Fintech, BPO and the author of The Coin Quest (a children’s book on financial literacy).
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/george-lawrence-badejo-adegbenga-261a61b/" tabindex="-1" target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                        </div>
                    </div>

                </div>

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="https://media.licdn.com/dms/image/v2/C5603AQHPGjz_kd0P1w/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1615501693003?e=1733961600&v=beta&t=84PPivErM10-hRLet8g0U1DQOuqas54PdGuunHRDlRA"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Temitayo Sogbola
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Governance, Risk Management & Assurance Expert Driving Sustainable Business Growth</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/tsogbola/"
                                        tabindex="-1" target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="{{asset('assets/images/pittson.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Pattison Boleigha
                            </h3>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">FCIN, CAMS, CRMA, CGEIT, FCA, HCIB, ACIT, Compliance, Governance, Security, Risk Manager| Anti-Money Laundering Specialist to Auditor| Compliance Officer</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/pattison-boleigha-4829bb9/"
                                        tabindex="-1" target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="https://media.licdn.com/dms/image/v2/C4E03AQEzCTh2SbUgeQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1516347514780?e=1733961600&v=beta&t=Pxhr8dmvE_v7aSUEky1Q50RM0TzlXC8mhrudOkxOEYw" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Yele Okeremi, DBA </h3>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">Ceo, Precise Financial Systems</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/yele-okeremi-dba-a55b9aa/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

                <div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{asset('assets/images/balogun.jpeg')}}" alt="img">
						<div class="speaker-item-info" style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
							<h3 class="name" style="font-size:18px">Esosa Balogun BSc, FCA, CCSA, CRMA, CIA, MBA </h3>
							<p class="prof mt-2" style="font-size:16px;line-height:1rem;">General Manager, Risk Management at MTN Nigeria Communications Plc</p>
							<div class="meta">
								<span class="post-tag" style="margin-right:7px;">
									<a href="https://www.linkedin.com/in/esosa-balogun/" tabindex="-1" target="_blank">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>
				</div>

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
            <ul class="pt-5">
                <li><i class="mdi mdi-account-outline"></i> <a href="{{ route('summit_register') }}" target="_blank"
                    style="font-size:20px"> REGISTER HERE </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Lagos Oriental Hotel, 3 Lekki Road, Victoria Island, Lagos</li>
                <li><i aria-hidden="true" class="uil uil-calendar-alt"></i> Date: Friday, 8th November, 2024
                </li> 
                <li><i class="mdi mdi-clock-outline"></i>Time: 9am</li>
             
            </ul>

            <ul class="mission-meta">
                <li><i aria-hidden="true" class="mdi mdi-facebook"></i><a
                        href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl"
                        target="_blank"> Follow on Facebook </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-instagram "></i><a
                        href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank">
                        Follow on Instagram </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a
                        href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop">
                        Follow on LinkedIn</a></li>
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
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text 
        }, 1000);
    </script>

</body>


</html>
