<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Vote')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
<link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
@endsection
@section('style')
<style>
	.event-schedule-item .schedule-item-info:before {
		background-image: url('');
	}
</style>
@endsection

<head>
	@include('partials.voter.head')
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
					<li>Vote</li>
				</ul>
			</div>
			<h1 class="title">Vote</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
		<center> <p class="btn btn-primary btn-lg" style="font-size:27px"> Voting is closed, Thanks!</p>
		</center>
			<div class="row">
				<div class="col-12 blog-cover">
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title">Vote</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p><strong>VOTING ELIGIBILITY: </strong> The general public is welcome to vote. <strong>Voting will be open from 26th July and ends 22nd Sept, 2023.</strong> Only votes in accordance with the voting limit & rules will be recognised.</p>
								<p>Three(3) Nominees will be shortlisted from the votes on each sub-category and deliberated upon by the judges based on defined criteria, inorder to select the winners. The winners will be unveiled at the Award Ceremony which will hold on the 10th November, 2023.</p>
							</div>
						</div>
					</div>
					<div style="max-width: 955px; margin-right:auto;margin-left:auto;">
						<div class="row">
							@foreach($categories as $category)
							<div class="col-md-6">
								<div class="accordion-wrapper" style="margin-top: 30px;">
									<div class="accordion">
										<input class="in-check" type="checkbox" name="radio-a" id="{{$category->hashid}}">
										<label class="accordion-label" for="{{$category->hashid}}">{{$category->name}}</label>
										<div class="accordion-content">
											<div class="buy-ticket-left">
												<p>{{$category->description}}</p><br>
												@if($category->is_non_voting_category == false)
												@if($category->id == 10)
												<p>The following awards are available in this category<br><strong>Please select an award</strong></p>
												@elseif($category->id == 13)
												<p>The following are the nominees in this category <br><strong>Please Select a nominee</strong></p>
												@else
												<p>The following sectors are available in this category. <br><strong>Please select a sector</strong></p>
												@endif
												<div class="ticket-contact-cover">
													<div class="ticket-contact-item">
														@foreach($category->sectors as $sector)
														<div class="event-schedule-item">
															<div class="" style="width: 100%;padding: 10px 14px ;cursor: pointer;position: relative;">
																<a href="{{route('show_awards', $sector->hashid)}}">
																	<h6 style="-webkit-transition: .35s ease;transition: .35s ease;font-weight: 400;position: relative;padding-right: 20px;">{{$sector->name}}</h6>
																</a>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@else
												<p>The following nominee types are available in this category. <br><strong></strong></p>
												<div class="ticket-contact-cover">
													<div class="ticket-contact-item">
													@foreach($category->sectors as $sector)
														<div class="event-schedule-item">
															<div class="" style="width: 100%;padding: 10px 14px ;cursor: pointer;position: relative;">
																<a href="{{route('show_awards', $sector->hashid)}}">
																	<h6 style="-webkit-transition: .35s ease;transition: .35s ease;font-weight: 400;position: relative;padding-right: 20px;">{{$sector->name}}</h6>
																</a>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-12 blog-cover" style="margin-top:100px">
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title" style="color:red">Declaration</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p>We recognize that conflicts of interest can be a severe problem and we take them extremely seriously. We do everything we can to keep conflicts to a minimum while recognizing and rewarding the best. The organizers, partners/sponsors, and representatives of the GRC & Financial Crime Awards have no influence over the online vote in any form.
									Individuals and Organizations are recognized for their Governance, Risks management & Compliance and Financial Crime achievements, beneficial contributions to their sectors and the Nigerian economy at large.</p>
							</div>
						</div>
					</div>
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title" style="color:red">Security Warning!!!</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p>As stated, voting is open to the public. Every voter is entitled to <strong>only one vote </strong> on each Award Sub-category.</p>
								<p>As such, <span style="color:red">The use of devices/softwares such as VPNs, software generated or programmed scripts </span> to manipulate votes is prohibited. However, we have employed the use of advance technologies to counter this situation and make sure votes are secure and counted correctly. </p>
								<p>GRC & Financial Crime Awards reserves the exclusive right to disqualify any Individual(s) or Organization(s) if they are in violation of the voting rules.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		</div>
	</section>

	{{-- <div class="modal fade" id="imageView" tabindex="-1" aria-labelledby="imageView" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="background:none">
                <!-- <div class="modal-header border-0" style="background:none">
                    <h6 class="modal-title m-0" id=""></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <!--end modal-header-->
                <div class="modal-body">
				<div class="marathon-register-row" style="justify-content: center;">
					<div class="marathon-register">
						<h2 class="title"><span>Register</span></h2>
						<form id='regForm' method="POST" action="{{route('register')}}" name="regForm">
							@csrf
							<ul class="form-cover">
								<li class="inp-cover inp-email">
									<input id="email" type="email" name="email" placeholder="E-mail" required>
									@error('email')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									@if(Session::has('danger'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{session('danger')}}</strong>
                                    </span>
                                    @endif
								</li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox" name="i_agree" id="i_agree" value="1Xagrzi">
									<p>I have read the <a href="{{route('show_policy')}}" target="_blank">Privacy Policy</a> and <a href="{{route('show_tc')}}" target="_blank">Terms and Conditions</a>.</p>
								</div>
							</div>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn">
									<span>Register</span>
								</button>
							</div>
						</form>
					</div>
			</div>
                </div>
            </div>
		</div>
    </div> --}}
	<!-- <section id="register" class="s-marathon-register">
		<div class="container">
			<div class="marathon-register-row" style="justify-content: center;">
					<div class="marathon-register">
						<h2 class="title"><span>Register</span></h2>
						<form id='regForm' method="POST" action="{{route('register')}}" name="regForm">
							@csrf
							<ul class="form-cover">
								<li class="inp-cover inp-email">
									<input id="email" type="email" name="email" placeholder="E-mail" required>
									@error('email')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									@if(Session::has('danger'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{session('danger')}}</strong>
                                    </span>
                                    @endif
								</li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox" name="i_agree" id="i_agree" value="1Xagrzi">
									<p>I have read the <a href="{{route('show_policy')}}" target="_blank">Privacy Policy</a> and <a href="{{route('show_tc')}}" target="_blank">Terms and Conditions</a>.</p>
								</div>
							</div>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn">
									<span>Register</span>
								</button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</section> -->
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
	<script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
	@if(session()->get('voter') == null)
	<script type="text/javascript">
	window.onload = (event) => {
		$('#imageView').modal('show');
	};

    // $(document).ready(function(){
    //     var imageId;
    //     $('a[data-name="imageView-click"]').on('click', ()=>{
    //       imageId = $(this).attr('data-id');
    //       $('#imageView').modal('show');
    //       console.log(imageId);
    //     });

    // });
	</script>
	@endif
</body>

</html>