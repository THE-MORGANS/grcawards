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
	<div class="p" style="background: url('{{asset('assets/summit.jpeg')}}'); height:400px" >
		<div class="container" > 
			{{-- <div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Summit</li>
				</ul>
			</div> --}}
			{{-- <h1 class="title">Register Here</h1> --}}
		</div>
	</div>
	<!-- page title -->
	<!-- =========== S-CONFERENCE-COUNTER =========== --> 
	<section id="about" class="s-conference-mission pt-0" style="margin:-200px">
		<div class="s-our-mission ">
		
			<div class="container">
			
				<div class="conference-counter-wrap ">
						<div  style="background:#fff; color:#000; height:100%; padding:10px 20px;  text-align:left" class="mb-10">
							<h6 class=""> GRC & FinCrime Prevention Year Summit
                                </h6>
						{{-- <p> Thu, 15 Jun, 12:00 - 14:00 GMT+1</p> --}}
                        <hr>
                        <p style="font-size:15px">Registration Details</p>
                        <br>

                        @if(Session::has('msg'))
                     <span class="btn primary"> {{Session::get('msg')}} </span>   
                        @endif
                        <form action="{{route('grcformRegister')}}" method="post">
                        @csrf
                        <div class="p-1">
                        <label for="firstname"> First Name </label>
                        <input id="email" class="form-control" id="firstname" type="text" name="first_name" placeholder="First Name" required>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="p-1">
                        <label for="firstname"> Last Name </label>
                        <input id="firstname" class="form-control" id="firstname" type="text" name="last_name" placeholder="Last Name" required>
                        @error('last_name')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="email"> Email </label>
                        <input id="firstname" class="form-control" id="email" type="email" name="email" placeholder="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="email"> Phone </label>
                        <input id="phone" class="form-control" id="phone" type="text" name="phone" placeholder="phone" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="city"> City </label>
                        <input id="city" class="form-control" id="city" type="text" name="city" placeholder="city" required>
                        @error('city')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="State"> State </label>
                        <input id="firstname" class="form-control" id="state" type="text" name="state" placeholder="state" required>
                        @error('state')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="country"> Country/Region </label>
                        <input id="country" class="form-control" id="country" type="text" name="country" placeholder="country" required>
                        @error('country')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="Industry"> Industry </label>
                        <input id="industry" class="form-control" id="industry" type="text" name="industry" placeholder="industry" required>
                        @error('industry')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="job_title"> Job Title </label>
                        <input id="job_title" class="form-control" id="firstname" type="text" name="job_title" placeholder="job_title" required>
                        @error('job_title')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                    <div class="p-1">
                        <label for="organisation"> Organisation</label>
                        <input id="organisation" class="form-control" id="organisation" type="text" name="organisation" placeholder="organisation" required>
                        @error('organisation')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="message"> How did you get to know about this webina</label>
                        <textarea   name="message" placeholder="How did you get to know about this webina"></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary"> Register</button>
						</div>

                    

                    
					</div>
					<br>
					
			
			</div>
		</div>
	</section>
	
    <div class="p-5 p-5"></div>
    <div class="p-5 p-5"></div>

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

</body>


</html>