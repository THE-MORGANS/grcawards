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
	{{-- <div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Vote</li>
				</ul>
			</div>
			<h1 class="title">Vote</h1>
		</div>
	</div> --}}
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container"> 
		{{-- <center> <p class="btn btn-primary btn-lg" style="font-size:27px"> Voting is closed, Thanks!</p>
		</center> --}}
			<div class="row">
				<div class="col-12 blog-cover">
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							{{-- <h2 class="title"><span>VOTING IS CLOSED FOR  GRC Financial Crime Awards 2024</span></h2> --}}
						</div>
						<div class="post-content">
							<div class="text">
								<p><strong>VOTING ELIGIBILITY: </strong> The general public is welcome to vote. <strong>Voting will be open from 25th June and ends 30th August, 2025.</strong> Only votes in accordance with the voting limit & rules will be recognised.</p>
								<p>Three(3) Nominees will be shortlisted from the votes on each sub-category and deliberated upon by the judges based on defined criteria, inorder to select the winners. The winners will be unveiled at the Award Ceremony which will hold on the 7th November, 2025.</p>
							</div>
						</div>
					</div>
					<center> 
					@if(Session::has('msg'))
					<span class="btn btn-{{Session::get('alert')}}"> {{Session::get('msg')}}</span>
					@endif
				    </center>
					<div style="max-width: 955px; margin-right:auto;margin-left:auto;" class="accordion-wrapper">
						<div class="row">
							@foreach ($categories as $category)
							@if(count($category->UserVotes()) == count($category->countAwards(5)))
							<span style="color:#fff; background:green; padding:5px; border-radius:5px">  &nbsp;  &nbsp;   CONGRATULATIONS YOU HAVE COMPLETED ALL VOTING CATEGORIES </span>
							   <span class="px-4 pt-2 "> Copy this Link and share with your friends and colleagues to vote for your favourite Nominees  <a href="https://www.grcfincrimeawards.com/vote" id="links"> https://www.grcfincrimeawards.com/vote </a> <button type="button" onclick="CopyText()" id="CopyText"> Copy Link</button>
							 <br>	<span id="alerts" ></span>
							</span>
					             @endif

								 <script>
									function CopyText(){
										let links = document.getElementById('links');
										navigator.clipboard.writeText(links).then(function() {
										document.getElementById('alerts').innerHTML = "Link Copied"
									})
								}
									
								 </script>
							<div class="col-md-12">
								<div class="accordion-rapper" style="margin-top: 30px;">
									<div class="accordion">
										
										<input class="in-check" type="checkbox" name="radio-a">
										<label class="accordion-label" >{{$category->name}}   @if(count($category->UserVotes()) == count($category->countAwards(5))) <span style="color:#fff; background:green; padding:5px; border-radius:5px">  Completed: {{count($category->UserVotes())}}/{{count($category->countAwards(5))}}  </span> @else <span style="color:#fff">  Completed: {{count($category->UserVotes())}}/{{count($category->countAwards(5))}}  </span> @endif </label>
										<div class="accordion-conent" style="background: #eef">
											<div class="buy-ticket-let">
												
												<p style="color:#000; padding:20px">{{$category->description}}</p>
										<div style="background: #000; padding: 10px;">  {{ $categories->links() }}</div>
												@if($category->is_non_voting_category == false)
												<div class="ticket-contact-cover" style="padding: 0px 20px; "> 
												@foreach ($category->sectors as $sector)
													<div style="width: 100%; border:1px solid #0000001c; padding:20px; margin:10px">
												 <h5 style=""> <small style="font-size: 13px; color:#D4AF37">SECTOR:</small>  {{$sector->name}} </h5>
													<div class="ticket-contact-item" style="width: 100%">
														<p style="color:#281999"> Click the awards below to vote </p>
														
														@foreach($sector->awards as $award)
														<form action="{{route('add.vote')}}" id="{{$award->hashid}}" method="post">
															@csrf
																<div class="event-schedule-item">
														<label style="width: 100%; display: block; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $award->id }}">
															<input type="radio" name="award_id" value="{{ $award->id }}" style="display: none;" >

															<div style="width: 100%; padding: 10px 14px; position: relative;">
																<h6 style="transition: .35s ease; font-weight: 400; position: relative; padding-right: 20px;">
																	{{ $award->name }}
																</h6>
																@if($award->IsVoted($award->id))
																	<span style="float:right">
																		<i style="color:green" class="fa fa-check-circle badge" aria-hidden="true">voted</i>
																	</span>
																@endif
															</div>
														</label>

														</div>
														  <div class="modal fade" id="staticBackdrop{{$award->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
															<div class="modal-dialog">
															  <div class="modal-content">
																<div class="modal-header">
																  <p class="modal-title" style="font-weight: 500; font-size:20px; color:#000" id="staticBackdropLabel" >Select and Vote Preffered Nominee</p>
																  {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
																</div>
																<div class="modal-body">
																	<input type="hidden"  name="awards" value="{{$award->hashid}}" value="{{$award->hashid}}">
                                                        
																	@foreach ($award->hasNominee($award->id) as $nominee)
																
																	<p class="nominee" style="color:#000"> 
																	<label>
																		<input type="radio"  id="nominee-{{ $nominee->id }}"  style="border-radius:0px"   name="nominees"  value="{{$nominee->hashid}}"> 
																		{{$nominee->name}}
																	</label>
																@if($nominee->links != null)<label> <a target="_blank" href="{{ $nominee->links }}" style="font-size:10px"> (Learn More about Nominee) </a></label> @endif
															
																	</p>
																	@endforeach
																</div>
																<div class="modal-footer">
																  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
																  <div style="text-align:center">
																	<button id="{{$award->has_nominees == false ? '#SubmitNominee' : '#Submit'}}" type="submit" data-id="{{$award->hashid}}" class="btn"><span>Vote</span></button>
																</div>
																</div>
																<div>
																	<p style="color:#000">A Nominee missing from this list?</p>
																	<button  type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#nominees_add{{ $award->id }}" href=""> Recommend Nominee</a>
																</div>
															  </div>
															</div>
														  </div>
														</form>
														<form action="{{route('add.nominee_new')}}" id="{{$award->hashid}}" method="post">
															@csrf
														 <div class="modal fade" id="nominees_add{{$award->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
															<div class="modal-dialog">
															  <div class="modal-content">
																<div class="modal-header">
																  <p class="modal-title" style="font-weight: 500; font-size:20px; color:#000" id="staticBackdropLabel" >Nominate your preferred Nominee</p>
																  {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
																</div>
																<div class="modal-body">
																	<label for="nominee_name" style="color:#000"> Enter name of Nominee</label>
																	<input type="text" name="nominee_name" placeholder="enter nominee name" required> 
																	<label for="reason" style="color:#000" name="reason"> Enter reason why you want us to include this nominee on the list</label>
																	<textarea placeholder="enter reasons " required> </textarea>
																	<input type="hidden"  name="awards_id" value="{{$award->hashid}}">
																</div>
																<div class="modal-footer">
																
																  <div style="text-align:center">
																	<button class="btn btn-info"> Submit for Verification</button>
																</div>
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
																</div>
															  </div>
															</div>
														  </div>
														</form>
														@endforeach
													</div>
												</div>
												@endforeach
											
												<!-- Button trigger modal -->
												</div>
												{{-- @if(!$sectors->lastPage()) --}}
												{{-- <span class="p-4" style="float: right"> {{$sectors->links()}} </span>	 --}}
												{{-- @else  --}}
												{{-- <span class="p-5" style="float: right"> {{$categories->links()}} </span>	
												@endif --}}
												@else
												<p>The following nominee types are available in this category. <br><strong></strong></p>
												<div class="ticket-contact-cover">
													<div class="ticket-contact-item">
														{{$sector->name}}
													@foreach($sector->awards as $awards)
														<div class="event-schedule-item">
															<div class="" style="width: 100%;padding: 10px 14px ;cursor: pointer;position: relative;">
																<a href="{{route('show_awards', $awards->hashid)}}">
																	<h6 style="-webkit-transition: .35s ease;transition: .35s ease;font-weight: 400;position: relative;padding-right: 20px;">{{$awards->name}} </h6>
																</a>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@endif

											{{-- {{$sector->links()}} --}}
											</div>
										</div>
									</div>
								</div>
							</div>
						
							@endforeach
						</div>
						
						<div class="row">
							<div class="col-8">
			
							</div>
						<div style="background: #000; padding: 10px; margin:10px">
								<span class="" > {{ $categories->links()}} </span>
							</div>
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
	{{-- <script src="{{asset('assets/js/scripter.js')}}"></script> --}}
    <script src="{{asset('assets/js/app.min.js')}}"></script>
	@if(session()->get('voter') == null)
	<script type="text/javascript">
	$('#exampleModalCenter').modal('toggle')


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