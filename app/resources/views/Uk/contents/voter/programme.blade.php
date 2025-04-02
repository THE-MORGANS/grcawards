<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <style>
        .prog {
            min-height: 120px;
            line-height: 20px;
			padding: 20px;
        }
    </style>
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
        <div class="container" style="min-height:10px">
            {{-- <div class="breadcrumbs"> --}}
            {{-- <ul> 
					<td><a href="{{route('landing.index')}}">Home</a></td>
					<td>Summit</td>
				</ul> --}}
            {{-- </div> --}}
            <h4 class="title">The Summit Programme</h4>
        </div>
    </div>
    <!-- page title -->
    <!-- =========== S-CONFERENCE-COUNTER =========== -->
    <section id="about" class="s-conference-mission pt-0">
        <div class="s-our-mission ">
            <div class="container" style="overflow: scroll">
                <img src="{{asset('assets/program.png')}}" style="max-width:800px"> 
            </div>
        </div>
    </section>
    <!-- ========= S-CONFERENCE-COUNTER END ========= -->

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
