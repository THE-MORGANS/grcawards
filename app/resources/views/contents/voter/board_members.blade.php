<!DOCTYPE html>
<html lang="en">
@section('title', 'Judges')

<head>
    @include('partials.voter.head')
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
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
                    <li>Advisory Governing Council </li>
                </ul>
            </div>
            <h3 class="title">Advisory Governing Council </h3>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">GRC and FinCrime Prevention Advisory Governing Council </h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($boards as $board)
                        <div class="col-md-6"> 
                            <div class="slide-our-speaker">
                                <div class="our-speaker-item">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#j{{$board->id}}">
                                    <img src="{{$board->path_to_image}}" alt="img" style="height: 360px;">
                                    <div class="speaker-item-info" style="padding-bottom:10px;">
                                            <h5 class="name" style="font-size:18px">{{$board->name}}</h5>
                                            <p class="prof" style="font-size:16px; color:white">{{$board->position}}</p>
                                            <div class="meta">
                                                @if($board->ln_link != '')
                                                <span class="post-tag" style="margin-right:7px;">
                                                    <a href="{{$board->ln_link}}">
                                                        <i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
                                                    </a>
                                                </span>
                                                @endif
                                            </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- <div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">Selection of panel of judges</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
							<p>The awards are judged by an independent panel of judges who are representative of all areas of the industry by sector and by geography. Members of this panel choose to contribute on a voluntary basis and will remain entirely separate from the ownership structure of the awards.</p>
                            <p>The panel is led by Mr Adebisi Jelili and new members are added regularly. Register for updates so we can keep you up to date on new judging appointments.</p>

							</div>
						</div>
					</div> --}}
                    {{-- <div class="widget widget-archive">
						<h4 class="title">Joining the panel of judges</h4>
                        <p>If you would like to offer your industry knowledge and experience as a member of the Industry Judging Panel, please contact us with a summary of your experience and the category that you would like to judge. If a vacancy exists that may be suitable then we will forward your information to the Co-Chairs of Judges for a decision.</p>
                        <a class="btn btn-yellow" href="{{route('show_contact')}}">Send us a message</a><br><br>
                        <p><strong>Please Note</strong><br>
                        All members of the Panel must be approved by the Co-Chairs of Judges, who consider the skills, experience and balance of the Panel as a whole. Any decision to not accept an application is therefore not a reflection on the quality of the applicant.
                        </p>
                        <p>The integrity of the Industry Judging Panel is of paramount importance and, with this in mind, all Judges are required to abide by terms and conditions covering confidentiality, conflicts of interest and the conduct expected of Judges.</p>
                    </div> --}}
                    {{-- <div class="widget widget-archive">
						<h4 class="title">Declaration</h4>
                        <p style="color: red;">The Industry Judging Panel is independent from the production and management of the GRC & Financial Crime Prevention Awards Event. Members of the organising committee and the management company appointed to project manage the Awards Event, may not hold a position on the Industry Judging Panel.</p>
                    </div> --}}
                </div>
                <!--================= SIDEBAR =================-->
                @include('partials.voter.sidebar')
                <!--=============== SIDEBAR END ===============-->
            </div>
        </div>
    </section>

    @foreach($boards as $board)
    <div class="modal fade" id="j{{$board->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title" id="modal-title">{{$board->position}}</h5>
                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close-circle mdi-24px" style="color: red;"></i></a>
                </div>

                <div class="modal-body px-4 pb-4 pt-0">
                    <section class="s-our-mission s-about-speaker" style="padding:0px">
                        <div class="row" style="flex-direction: column;">
                            <div class="col-lg-12 our-mission-img">
                                <span>
                                    <img class="mission-img" src="{{$board->path_to_image}}" alt="img" style="width: 200px;height:200px;border-radius:50%;align-self:center">
                                </span>
                            </div>
                            <div class="col-lg-12 our-mission-info">
                                <h6>{{$board->name}} - {{$board->position}}</h6>
                                <div class="mission-info-text">
                                    <p>{{$board->profile}}</p>
                                </div>
                                <ul class="social-list">
                                    @if($board->ln_link != '')
                                    <li>
                                        <a target="_blank" href="{{$board->ln_link}}">
                                            <i class="mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="container">
        <div class="row">
         
                <h2> GRC & Financial Crime Prevention Awards Judges Code of Conduct 2025</h2>
                <p> This code has been produced as a guide for judges of the GRC & Financial Crime Prevention Awards and to provide a formal statement of how seriously we view our work. We believe that the integrity of our judging community is exemplary but as a professional body, we should have a documented code.
This code is in place to protect the integrity of the GRC & Financial Crime Prevention Awards judging process, providing confirmation that all judges are working to a fair, transparent, and robust judging process. All APM Awards judges will be required to read and agree to the following code of conduct when applying for the role.
Any case of breach of this code of conduct will be considered by the Awards Steering Group (ASG). Sanctions may include complete removal from the judging role, discounting of individual results for a category, or any penalty incurred through breach of the GRC & Financial Crime Prevention Awards Code of Professional Conduct. Matters reported under this code may also result in action against an entrant. In case of any dispute, the final arbiters will be APM.
The initial premise is that Awards judges will be bound by the terms of the GRC & Financial Crime Prevention Awards Code of Professional Conduct. This is the baseline and beyond this, the following special conditions will apply:
Confidentiality: Judges undertake to maintain the confidentiality of their role with respect to the identity of applicants, the marks awarded and the identity of other judges.
Conflict of interest: All judges must notify APM immediately when he or she becomes aware of any potential, real, or perceived conflict(s) of interest. This may include any previous professional or personal relationship between the judge and an applicant, or the organisation of an applicant. A judge must also declare any potential, real or perceived conflict(s) of interest that they are aware may apply to another judge.
Communication: In order to provide transparency, traceability and clarity of communication, all emails should be sent directly to GRC & Financial Crime Prevention Awards via events@grcfincrimeawards.com who will then undertake to ensure appropriate circulation of messages. This is important in association with ‘confidentiality’ point above. Information could wrongly be passed to others and breach confidentiality.
Judges are to refrain from communicating in any way with entrants or finalists prior to the Awards ceremony. If a judge is contacted by an entrant or finalist directly, or through social media, please alert the GRC & Financial Crime Prevention Awards events team via events@grcfincrimeawards.com immediately.
Promptness: The dates for submission of scoring and feedback will be made available to all judges in advance and judges will be required to comply with these dates. In case of difficulty, judges must notify GRC & Financial Crime Prevention Awards immediately when a delay presents itself as a possibility.
Obligations: Judges undertake to provide not only scores, but also feedback for applicants, which should be constructive and of value for the candidate’s future improvement.
Judges must complete scoring and feedback on the judging platform by the judging closing date.  If any judge is unable to complete judging, they must alert events@grcfincrimeawards.com as soon as they are aware. 
Judges must attend the judges training or alert the events@grcfincrimeawards.com if unable to attend, so alternative training can be given.
All judges must address any concerns on outcomes and process (such as criteria and judging process) by giving feedback to GRC & Financial Crime Prevention Awards. A judges’ feedback survey will be made available to facilitate this after the judging has finished and we strongly encourage participation in this, so that we may continuously improve.
            </p>
        </div>
    </div> --}}

    

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
    <!-- <script src="{{asset('assets/js/modal.js')}}"></script> -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>


</body>

</html>