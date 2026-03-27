<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Categories')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/categories_redesign.css')}}">
@endsection

<head>
    @include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
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
                    <li>Categories</li>
                </ul>
            </div>
            <h1 class="title" style="font-weight: 800;">Sectors & Categories</h1>
        </div>
    </div>

    <section class="s-news s-single-news categories-redesign-wrapper" style="background-color: #fbfbfb; padding: 80px 0;">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-lg-8 blog-cover">
                   
                 <img src="{{asset('/assets/nomination-banner.jpeg')}}" style="width:100%; ">
            
                    
                    <div class="premium-post-header">
                        <!--<h2 class="title">Award Categories</h2>-->
                        <div class="mt-3">
                            @if(Session::has('msg'))
                            <div class="alert alert-success alert-premium">
                                <i class="mdi mdi-check-circle-outline"></i>
                                {{Session::get('msg')}}
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="alert alert-danger alert-premium">
                                <i class="mdi mdi-alert-circle-outline"></i>a
                                {{Session::get('error')}}
                            </div>
                            @endif
                            <p class="description">Browse through the various sectors and categories available for this year's awards. You can now also nominate and add your preferred candidates directly to the official list.</p>
                            <p style="color: #64748b;">The GRC & FinCrime Prevention Awards comprises of six categories of awards with various subcategories.</p>
                        </div>
                    </div>

                    <div class="modern-accordion-group">
                        @foreach($categories as $category)    
                        <div class="modern-accordion-item">
                            <button type="button" 
                                    class="modern-accordion-header" 
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                    aria-controls="content-{{$category->hashid}}"
                                    onclick="toggleModernAccordion(event, this)">
                                <span class="modern-category-title">{{$category->name}}</span>
                                <div class="modern-accordion-icon">
                                    <i class="mdi mdi-chevron-down" style="font-size: 1.5rem;"></i>
                                </div>
                            </button>
                            
                            <div id="content-{{$category->hashid}}" class="modern-accordion-content">
                                <div class="inner-content">
                                    <div class="category-description">
                                        {!! $category->description !!}
                                    </div>

                                    <div class="sectors-grid">
                                        @foreach($category->sectors as $sector)
                                        <div class="sector-card">
                                            <div class="sector-name">
                                                <!-- <i class="mdi mdi-layers-outline"></i> -->
                                                {{$sector->id == 12 ? 'General Categories' : $sector->name }}
                                            </div>

                                            <div class="awards-wrapper">
                                                @if($sector->awards->isEmpty())
                                                    <p class="small text-muted">Awaiting category details...</p>
                                                @else
                                                    @foreach($sector->awards as $award)
                                                    <div class="award-item">
                                                        <div class="award-name">
                                                            <i class="mdi mdi-trophy-variant-outline"></i>
                                                            {{$award->name}}
                                                        </div>
                                                        @if($award->criteria)
                                                            <span class="criteria-label">Judging Criteria</span>
                                                            <div class="criteria-text">{!! $award->criteria !!}</div>
                                                        @endif

                                                        <div class="nomination-trigger">
                                                            <button type="button" class="btn-nominate" onclick="toggleNominationForm(event, '{{$award->hashid}}')">
                                                                <i class="mdi mdi-plus-circle-outline"></i> Nominate Someone
                                                            </button>
                                                        </div>

                                                        <div id="nomination-form-{{$award->hashid}}" class="nomination-form-container" style="display: none;">
                                                            <form action="{{route('add.nominee_new')}}" method="POST" class="nomination-form">
                                                                @csrf
                                                                <input type="hidden" name="awards_id" value="{{$award->hashid}}">
                                                                <div class="form-group-premium">
                                                                    <label>Nominee Name</label>
                                                                    <input type="text" name="nominee_name" class="form-control-premium" placeholder="Enter name or organization" required>
                                                                </div>
                                                                {{-- <div class="form-group-premium">
                                                                    <label>Reason for Nomination (Optional)</label>
                                                                    <textarea name="reason" class="form-control-premium" rows="2" placeholder="Tell us why..."></textarea>
                                                                </div> --}}
                                                                <div class="form-actions">
                                                                    <button type="submit" class="btn-submit-nomination">Add Official Nominee</button>
                                                                    <button type="button" class="btn-cancel-nomination" onclick="toggleNominationForm(event, '{{$award->hashid}}')">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            @if($sector->nominees && $sector->nominees->count() > 0)
                                            <div class="nominees-section">
                                                <div class="nominees-label">
                                                    <i class="mdi mdi-account-group-outline"></i>
                                                    Official Nominees
                                                </div>
                                                <ul class="nominees-list">
                                                    @foreach ($sector->nominees as $nominee)
                                                    <li class="nominee-tag">
                                                        {{$nominee->name}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @else
                                            <div class="no-nominees-placeholder">
                                                <i class="mdi mdi-magnify no-nominees-icon"></i>
                                                <span class="no-nominees-text">No Official Nominees Yet</span>
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!--================= SIDEBAR =================-->
                @include('partials.voter.sidebar')
                <!--=============== SIDEBAR END ===============-->
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
    
    <script>
        function toggleModernAccordion(event, header) {
            if (event) event.preventDefault();
            const group = header.closest('.modern-accordion-group');
            const item = header.parentElement;
            const isOpen = item.classList.contains('active');

            // Close other items in the same group
            group.querySelectorAll('.modern-accordion-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.modern-accordion-header').setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle current item
            if (isOpen) {
                item.classList.remove('active');
                header.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('active');
                header.setAttribute('aria-expanded', 'true');
            }
        }

        function toggleNominationForm(event, awardId) {
            if (event) event.preventDefault();
            const formContainer = document.getElementById(`nomination-form-${awardId}`);
            const isVisible = formContainer.style.display !== 'none';
            
            // Close all other forms first
            document.querySelectorAll('.nomination-form-container').forEach(form => {
                form.style.display = 'none';
            });

            if (!isVisible) {
                formContainer.style.display = 'block';
            } else {
                formContainer.style.display = 'none';
            }
        }
    </script>
</body>

</html>