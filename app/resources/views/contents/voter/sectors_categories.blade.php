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
                    
                    <div class="premium-post-header">
                        <h2 class="title">Award Categories</h2>
                        <div class="mt-3">
                            <p class="lead" style="font-size: 1.1rem; color: #64748b; line-height: 1.6;">
                                The GRC & FinCrime Prevention Awards will be presented to several sectors that employ/incorporate Governance, Risk management, Compliance and Financial Crime Prevention mechanisms in their business activities.
                            </p>
                            <p style="color: #64748b;">The GRC & FinCrime Prevention Awards comprises of six categories of awards with various subcategories.</p>
                        </div>
                    </div>

                    <div class="modern-accordion-group">
                        @foreach($categories as $category)    
                        <div class="modern-accordion-item">
                            <button class="modern-accordion-header" 
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                    aria-controls="content-{{$category->hashid}}"
                                    onclick="toggleModernAccordion(this)">
                                <span class="modern-category-title">{{$category->name}}</span>
                                <div class="modern-accordion-icon">
                                    <i class="mdi mdi-chevron-down" style="font-size: 1.5rem;"></i>
                                </div>
                            </button>
                            
                            <div id="content-{{$category->hashid}}" class="modern-accordion-content">
                                <div class="inner-content">
                                    <div class="category-description">
                                        {{$category->description}}
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
                                                        <p class="criteria-text">{{$award->criteria}}</p>
                                                        @endif
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
        function toggleModernAccordion(button) {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            
            // Optional: Close others in same group
            const group = button.closest('.modern-accordion-group');
            const allItems = group.querySelectorAll('.modern-accordion-header');
            
            allItems.forEach(btn => {
                if (btn !== button) {
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
            
            button.setAttribute('aria-expanded', !isExpanded);
        }
    </script>
</body>
</html>