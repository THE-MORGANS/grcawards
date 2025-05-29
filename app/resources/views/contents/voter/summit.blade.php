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
            <h5 class="title">GRC & FinCrime Prevention Mid-Year Summit 2025
            </h5>
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
                            <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Microsoft Teams (Online Meeting) </li>
                            <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 6th,June 2025
                            </li>
                            <li><i class="mdi mdi-clock-outline"></i>Time: 12pm</li>
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
                            Theme: "Future-Proofing GRC & Financial Crime Prevention:
                            The Convergence of AI, ESG, and Digital Compliance in a Rapidly Evolving Landscape
                            "
                        </h4>

                        <div class="mission-info-text">

                            <p></p><br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 About the Summit
                            </h6>
                            <p>
                                The GRC & Financial Crime Prevention Mid-Year Summit 2025 is a strategic gathering of
                                industry leaders, innovators, regulators, and professionals committed to safeguarding
                                institutions and communities from the growing complexities of governance, risk,
                                compliance (GRC), and financial crime.
                                Held at a pivotal point in the year, this summit provides an essential pulse-check on
                                how organisations are adapting to the convergence of AI, ESG, and digital compliance to
                                stay ahead of emerging threats, regulatory shifts, and technological disruption.


                            </p>


                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Why This Theme?
                            </h5>
                            <br>
                            <p class="mb-3"> With rapidly evolving regulatory landscapes, heightened ESG expectations,
                                and the accelerated adoption of AI technologies, today’s GRC and FinCrime professionals
                                must navigate a new frontier. This year’s theme focuses on future-proofing our
                                frameworks by exploring:
                            </p>
                            <ul style="list-style: disc">
                                <li> AI-driven compliance tools and ethical considerations</li>

                                <li> ESG risk as a new compliance frontier</li>

                                <li> The digitalisation of due diligence, reporting, and audit</li>

                                <li> Cross-border data integrity and cyber risk</li>

                                <li> Human-centred governance in an automated world</li>
                            </ul>


                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 What to Expect </h5>
                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Keynotes & Leadership Panels
                            </h6>
                            <p class=" mb-2"> Hear from global experts and C-level executives shaping the future of
                                GRC, ESG, and financial crime prevention.
                            </p>
                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Interactive Workshops & Tech
                                Demos

                            </h6>
                            <p class=" mb-2"> Gain hands-on insights into AI tools, digital platforms, and ESG
                                compliance technologies.
                            </p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Case Studies & Industry
                                Spotlights
                            </h6>
                            <p class=" mb-2">Learn from real-world implementations across banking, fintech, healthcare,
                                energy, and public sector landscapes.
                            </p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Women in GRC & FinCrime
                                Prevention Forum

                            </h6>
                            <p class=" mb-2">A dedicated session spotlighting leadership, innovation, and inclusion.

                            </p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Global Regulatory Updates
                            </h6>
                            <p class=" mb-2">
                                Stay ahead of legislative trends with insights from regulators and policy experts.
                            </p>
                            <h5 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">💡 Who Should Attend?
                            </h5>
                            <br>
                            <ul style="list-style: disc">
                                <li> GRC, Risk, and Compliance Professionals </li>

                                <li> Financial Crime & AML Specialists</li>

                                <li> Chief Risk & Compliance Officers (CROs, CCOs)</li>

                                <li> ESG & Sustainability Leads</li>

                                <li> Legal, Audit, and Ethics Executives</li>

                                <li> Data & AI Strategy Leaders</li>

                                <li> Regulators, Policymakers, and Law Enforcement</li>

                                <li> Technology and Innovation Officers</li>

                                <li> Academia, Researchers, and Students in GRC-related fields</li>
                                </li>
                            </ul>

                        </div>

                        <div class="mission-info-text">
                            <h6 class="col-12" style="padding-left:0;padding-right:0;"> </h6>
                            <ol style="list-style-type: lower-roman;padding-right:10px;padding-left:0px;">
                                Mid-Year Excellence Recognition
                                This year’s summit will also feature a special Mid-Year Excellence Recognition —
                                highlighting standout individuals and teams advancing GRC and FinCrime innovation.
                                Call for Speakers & Sponsors
                                Interested in joining the conversation as a speaker, partner, or exhibitor?
                                Reach out to us via [Insert Contact Form or Email] or visit our Sponsorship
                                Opportunities page.
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
                        <img src="{{asset('/assets/thomas.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Thomas Wan CK 尹志堅 IBFA, CFTP Snr, FICA, CCRO, MSCS
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">EduCert Committee at Blockchain Association of Singapore; Consultant, SME at Singapore College of Insurance; Consultant / Course Director at International Compliance Association; Continuous Lifelong Learning</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/thomas-wan-ck-%E5%B0%B9%E5%BF%97%E5%A0%85-ibfa-cftp-snr-fica-ccro-mscs/" tabindex="-1"
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
                        <img src="{{asset('/assets/pittason.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Pattison Boleigha
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">FCIN, CAMS, CRMA, CGEIT, FCA, HCIB, ACIT, Compliance, Governance, Security, Risk Manager| Anti-Money Laundering Specialist to Auditor| Compliance Officer</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/pattison-boleigha-4829bb9/" tabindex="-1"
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
                        <img src="{{asset('/assets/loretta.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Loretta Joseph
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Managing Director | Policy Group, Consultant, Senior Policy Advisor</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/loretta-joseph-853a5b142/" tabindex="-1"
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
                        <img src="{{asset('/assets/nicola.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Dr. Nicola Harding
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CEO, We Fight Fraud</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/dr-nic/" tabindex="-1"
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
                        <img src="{{asset('/assets/temi.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Temitope Yusuff
 
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
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
                        <img src="{{asset('/assets/periham.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Perihan Abdelghaly
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Sustainable Finance | Strategic Lead | Emerging Markets | Education Expert | Corporate Trainer | Advisory Board Member of Women in Governance, Risk, Compliance, and Financial Crime Prevention (WGRCFP)</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/perihan-abdelghaly-phd-a1b34b38/" tabindex="-1"
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
                        <img src="{{asset('/assets/oseni.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Dr. Ezekiel Oseni
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">President & Chairman of Council Chartered Risk Management Institute of Nigeria || Ph.D., Business & Applied Economics || Professor of Accounting and Finance at Babcock University Business</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/dr-ezekiel-oseni/" tabindex="-1"
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
                        <img src="{{asset('/assets/pietro.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Pietro Odorisio 
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                              Compliance Solutions Advocacy | RegTech Communication Specialist | Anti-Money Laundering Exper
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/pietro-odorisio-30ab009a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/ijebor.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Blaise Ijebor 
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                             Director, Risk Management Department and Chief Risk Officer
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="hhttps://www.linkedin.com/in/blaise-ijebor-2665b17/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/bend.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Benedicta (Lara) Onanuga MBA, FICA, HCIB, MA Regulations and Compl 
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                            Head Financial Crime Compliance and MLRO at Guaranty Trust Bank (UK) Limited
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/benedicta-onanuga-mba-fica-hcib-ma-regulations-and-compl-8b90a381/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/akani.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Abdulrahman Akanbi - CISSP, CISM, MCP, CC, MCT
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                            Cybersecurity Leader | Keynote Speaker | Bridging the Cybersecurity Skills Gap | Building a Resilient Digital Future
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/abyinkus/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/akan.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Edidiong Akan
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                           Chief Compliance Officer at Stanbic IBTC Pension
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/edidiong-akan-6a152922/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/erin.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Erin O'Loughlin, CFCS, CAMS
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">(Keynote Speaker)</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                          Senior Director of Training at Association of Certified Financial Crime Specialists - ACFCS
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/erin-o-loughlin/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
                                        target="_blank">
                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff"
                                            aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <ul class="pt-5">
                <li><i class="mdi mdi-account-outline"></i> <a href="{{ route('summit_register') }}" target="_blank"
                        style="font-size:20px"> REGISTER HERE </a> </li>
                        <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Microsoft Teams (Online Meeting) </li>
                        <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 6th,June 2025
                        </li>
                <li><i class="mdi mdi-clock-outline"></i>Time: 12:00noon - 2:00pm</li>

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
