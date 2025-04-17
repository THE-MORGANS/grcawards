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
	<div class="p" style="background: url('{{asset('assets/summit5.jpeg')}}'); height:650px" >
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
	<section id="about" class="s-conference-mission pt-0" style="margin-top:-330px">
		<div class="s-our-mission ">
		
			<div class="container">
			
			<div class="conference-counter-wrap ">
			<div  style="background:#fff; color:#000; height:100%; padding:40px 20px;  text-align:left" class="mb-10">
							<h6 class=""> GRC & FinCrime Prevention Year Summit and Awards 2025
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
                        <input id="email" class="form-control" id="firstname" value="{{old('first_name')}}" type="text" name="first_name" placeholder="First Name" required>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="p-1">
                        <label for="firstname"> Last Name </label>
                        <input id="firstname" class="form-control" value="{{old('last_name')}}" id="firstname" type="text" name="last_name" placeholder="Last Name" required>
                        @error('last_name')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="email"> Email </label>
                        <input id="firstname" class="form-control"  value="{{old('email')}}" id="email" type="email" name="email" placeholder="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="email"> Phone </label>
                        <input id="phone" class="form-control" id="phone" value="{{old('phone')}}" type="text" name="phone" placeholder="phone" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="company"> Company </label>
                        <input id="company" class="form-control" id="company"  value="{{old('company')}}"type="text" name="company" placeholder="company" required>
                        @error('company')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="State"> Designated role </label>
                        <input id="role" class="form-control" value="{{old('role')}}" id="role" type="text" name="role" placeholder="what is your role in your company" required>
                        @error('role')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
{{-- 
                    <div class="p-1">
                        <label for="award"> Did you nominate your firm for any award </label>
                        YES: <input id="award" class="form-control" id="award" type="radio" name="award"  value="Yes" placeholder="award" required>
                        NO: <input id="award" class="form-control" id="award" type="radio" name="award" value="No" placeholder="award" required>
                        @error('award')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}
{{-- 
                    <div class="p-1">
                        <label for="reason"> (If No,) Why? </label>
                        <input id="reason" class="form-control" id="reason" value="{{old('reason')}}" type="text" name="reason"  required>
                        @error('reason')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}

                    <div class="p-1">
                        <label for="about_us"> How did you hear about the Summit</label>
                        <input id="about_us" class="form-control" id="about_us" type="text"  value="{{old('about_us')}}" name="about_us" required>
                        @error('about_us')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                    <div class="p-1">
                        <label for="expectation">What are your expectations for the Summit </label>
                        <input id="expectation" class="form-control" id="expectation" type="text" name="expectation" value="{{old('expectation')}}"required>
                        @error('expectation')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="p-1">
                        <label for="speaker">  Are you interested in being a Speaker/ Contributor/ Partner for next years Summit?</label>
                      <br>  Speaker: <input class="form-control" id="speaker" type="radio" name="speaker"  value="speaker"  >
                      <br>     Contributor: <input  class="form-control" id="speaker" type="radio" name="speaker" value="contributor"  >
                      <br>     Partner: <input  class="form-control" id="speaker" type="radio" name="speaker" value="partner"  >
                      <br>     None: <input  class="form-control" id="speaker" type="radio" name="speaker" value="none"  >
                       
                        @error('speaker')
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary"> Register</button>
                 </form>
				</div>
			</div>
		</div>
        </div>
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

</body>


</html>