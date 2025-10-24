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
            <div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Summit</li>
				</ul>
			</div>
            {{-- <h5 class="title">GRC & FinCrime Prevention Mid-Year Summit 2025
            </h5> --}}
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
                            <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Lagos Marriott Hotel Ikeja</li>
                            <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 7th November, 2025
                            </li>
                            <li><i class="mdi mdi-clock-outline"></i>Time: 10am - 12noon</li>
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
                            Theme: “Sovereign Systems & Street-Level Compliance: Localising GRC and Financial Crime Prevention for Africa’s Next Frontier.”
                        </h4>

                        <div class="mission-info-text">

                            <p></p><br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 About the Summit
                            </h6>
                            <p>
                                The GRC & Financial Crime Prevention  Summit 2025 is a strategic gathering of
                                industry leaders, innovators, regulators, and professionals committed to safeguarding
                                institutions and communities from the growing complexities of governance, risk,
                                compliance (GRC), and financial crime.
                                Held at a pivotal point in the year, this summit provides an essential pulse-check on
                                how organisations are adapting to the convergence of AI, ESG, and digital compliance to
                                stay ahead of emerging threats, regulatory shifts, and technological disruption.


                            </p>


                            {{-- <p class="p-3"></p>
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
                            </ul> --}}


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
                        <br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 Why Localisation Matters
                            </h6>
                            <p>
                            For too long, governance, risk, compliance, and financial crime prevention (GRC & FinCrime) frameworks in Africa have been imported from external models. While global standards such as FATF, Basel, and OECD guidelines are essential, they often fail to fully reflect Africa’s diverse legal systems, institutional realities, and socio-economic conditions.
 
                            Localising GRC and Financial Crime Prevention means:
                            
                            Designing homegrown regulatory systems that meet international expectations while addressing unique local risks.
                            
                            Embedding cultural and community realities into compliance practices, ensuring solutions are practical and enforceable.
                            
                            Empowering African-led innovation in RegTech, compliance systems, and monitoring tools that reflect local languages, infrastructures, and priorities.
                            
                            Strengthening grassroots enforcement so policies move beyond paper into everyday business, banking, and community interactions.
                            </p>


                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡Key Dimensions of Localisation
                            </h5>
                            <br>
                            <ul style="list-style: disc">
                                <li> 1. Policy and Sovereignty – Crafting regulations that serve African markets first, while engaging responsibly with global partners.</li>

                                <li> 2. Street-Level Compliance – Building compliance literacy among SMEs, fintechs, cooperatives, and informal sectors.</li>

                                <li> 3. Technology and RegTech – Supporting African innovators to create scalable, affordable compliance tools.</li>

                                <li> 4. Capacity and Training – Developing skilled professionals across the continent to close gaps in enforcement and oversight.</li>

                                <li> 5. Sustainable GRC – Aligning compliance efforts with Africa’s development goals, ESG imperatives, and digital transformation.</li>
                            </ul>
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/rianne_potgieter.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px"> Rianne Potgieter
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CA(SA), CPro(SA), ICCP (CEO, Compliance Institute Southern Africa)</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/rianne-potgieter-ca-sa-cprof-sa-iccp-87019346?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/beauty_mtonga.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Beauty Mtonga
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Group Head of Risk Human Capital, ABSA Group</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/beauty-mtonga-b773638a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/adenike_odukomaiya.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Dr. Adenike Odukomaiya
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Head, Internal Audit - Stanbic IBTC</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/dr-adenike-odukomaiya-45228a40?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/fatumata_soukouna.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Fatumata Soukouna Coker
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chairman of the Board, THE CIO & C-SUITE Club Africa</p>
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/bright_chinweotuto.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Bright Chinweotuto Anyanwu
 
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Senior Compliance Manager & MLRO, West and Central Africa, Yellow Card</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/anyanwubrightc/" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/olayinka_odutola.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Olayinka Odutola (PhD)
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director General, Association of Enterprise Risk Management Professionals (AERMP)</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/olayinka-odutola-phd-04b38a42/" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/bawo_egbakhumeh.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Bawo Egbakhumeh
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CEO/Registrar - Complliance Institute, Nigeria</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/bawo-egbakhumeh/" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/abiola_jewoola.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Abiola Jewoola
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Technologist Enthusiast</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/abiola-jewoola-b10b6b11/" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/tosinleye_odeyemi.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Tosin-Leye Odeyemi FCA, HCIB
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                             Head, Sustainability Risk & Capital Management, Stanbic IBTC Holdings Plc
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/tosin-leye-odeyemi-fca-hcib-a0b4401?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/eneni_oduwole.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Eneni Oduwole - QRD, QRE, FCRM, FICRS
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                             CEO | NED | Risk, Strategy & Sustainability | Author
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/enenioduwole/" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/esosa_balogun.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Esosa Balogun - BSC, FCA, CCSA, CRMA, CIA, MBA 
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                            General Manager, Risk Management, MTN Nigeria
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/esosa-balogun?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/alex_noton.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Alex Noton
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                            Co-founder & CEO, pAIscreen
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/alex-noton-7620b24?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/emeka_offor.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Dr. Emeka Offor
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                                Erstwhile Executive Secretary/CEO, Nigerian Investment Promotion Commission (NIPC)
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/emekaoffor?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/jameelah_sharrieff.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Dr. Jameelah Sharrieff-Ayedun
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                                MD/CEO Credit Registry
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/jameelah-sharrieff-ayedun?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/olubunmi_otti.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Olubunmi Otti, PhD
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Panelist Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                            Zonal Coordinator - FCCPC Southwest Zonal Office, Lagos
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/olubunmi-dorcas-otti-9229b1257?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <img src="{{asset('/assets/images/speakers/summit_2025/moyosore_ogunlewe.jpeg')}}"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Hon. Barr. Moyosore Ogunlewe
                            </h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">
                                Executive Chairman, Kosofe Local Government Area, Lagos State
                            </p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/moyosore-ogunlewe-1b020750?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" tabindex="-1"
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
                        <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Lagos Marriott Hotel Ikeja</li>
                        <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 7th November, 2025
                        </li>
                <li><i class="mdi mdi-clock-outline"></i>Time: 10am - 12noon</li>

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
