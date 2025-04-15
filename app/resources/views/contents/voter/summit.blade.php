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
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQExN6IkZUrLlA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1709110417145?e=1733961600&v=beta&t=Syr1ra4F9ICNDcHDIHqPDKSoIPEvtk4boCTRqINn5g0"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Edidiong Akan </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Moderator</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Chief Compliance Officer at
                                Stanbic IBTC Pension</p>
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
                            <h3 class="name" style="font-size:18px">Florence Abraham (MSc., FCA, HCIB, CAMS, FCIN,
                                FISL)
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;"> Former DIRECTOR. Central
                                Bank of Nigeria. Prudential Regulations, ML TF Reg, Foreign EXcnge, in Central Bank of
                                Nigeria. Anti-Money Laundering Specialist & Trainer</p>
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
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Director | Business and
                                Finance Leader | Governance, Risk and Control Expert | Transforming Businesses to
                                achieve Sustainable Growth</p>
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
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQFf9sAQkGLYSQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1683622890981?e=1733961600&v=beta&t=A9J0JywVMY-wgUWudmlrxu297mDU9aPwIwba5KZkt2s"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Hossana Gani (Dip.CorpGov), ACIS, DipESG
                            </h3>
                            {{-- <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p> --}}
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">MBA Candidate LIGS-USA ||
                                Corporate Governance || Legal Risk & Compliance
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
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Innovative Partnerships &
                                Investments @ AXA | InsurTech Business Series Podcast | InsurTech in Africa
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
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CEO & Founder @ MIM Finance
                                | Legal & Compliance, Strategic Leadership, Fintech, BPO and the author of The Coin
                                Quest (a children’s book on financial literacy).
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/george-lawrence-badejo-adegbenga-261a61b/"
                                        tabindex="-1" target="_blank">
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
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Governance, Risk Management
                                & Assurance Expert Driving Sustainable Business Growth</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/tsogbola/" tabindex="-1" target="_blank">
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
                        <img src="{{ asset('assets/images/pittson.jpeg') }}" alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Pattison Boleigha
                            </h3>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">FCIN, CAMS, CRMA, CGEIT,
                                FCA, HCIB, ACIT, Compliance, Governance, Security, Risk Manager| Anti-Money Laundering
                                Specialist to Auditor| Compliance Officer</p>
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
                        <img src="https://media.licdn.com/dms/image/v2/C4E03AQEzCTh2SbUgeQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1516347514780?e=1733961600&v=beta&t=Pxhr8dmvE_v7aSUEky1Q50RM0TzlXC8mhrudOkxOEYw"
                            alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Yele Okeremi, DBA </h3>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Ceo, Precise Financial
                                Systems</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/yele-okeremi-dba-a55b9aa/" tabindex="-1"
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
                        <img src="{{ asset('assets/images/balogun.jpeg') }}" alt="img">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Esosa Balogun BSc, FCA, CCSA, CRMA, CIA, MBA
                            </h3>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">General Manager, Risk
                                Management at MTN Nigeria Communications Plc</p>
                            <div class="meta">
                                <span class="post-tag" style="margin-right:7px;">
                                    <a href="https://www.linkedin.com/in/esosa-balogun/" tabindex="-1"
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
                <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Lagos Oriental Hotel,
                    3 Lekki Road, Victoria Island, Lagos</li>
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
