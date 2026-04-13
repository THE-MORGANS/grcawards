<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Conference Registration - Virtual Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/summit_registration.css')}}" rel="stylesheet" />
    <style>
        .slots-counter-badge {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-block;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .pulse-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }

        .pulse-green {
            background: #22c55e;
            box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            animation: pulse-green 2s infinite;
        }

        .pulse-red {
            background: #ef4444;
            box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            animation: pulse-red 2s infinite;
        }

        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }

        @keyframes pulse-red {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(239, 68, 68, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
        }
    </style>
</head>

<body>
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <!-- Registration Header -->
    <div class="registration-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <a href="{{route('show_summit_2026')}}" style="color: var(--text-body); text-decoration: none;">
                            <i class="mdi mdi-arrow-left"></i>
                        </a>
                        <h1 class="header-title">Virtual Conference Registration</h1>
                    </div>
                    <p class="header-subtitle">Secure your access to the Africa GRC & FinCrime Virtual Summit 2026</p>
                </div>
                <div class="secure-badge">
                    <i class="mdi mdi-shield-check"></i>
                    <span>Secure Registration</span>
                </div>
            </div>
            
            <!-- Slots Counter -->
            <div class="slots-counter-badge mt-3" id="slots-remaining-container">
                <div class="d-flex align-items-center gap-2">
                    <div id="pulse-indicator" class="pulse-indicator pulse-green"></div>
                    <span id="slots-text" style="font-size: 0.9rem; font-weight: 700; color: #475569;">
                        Availability: <span id="slots-remaining-count">...</span> slots left
                    </span>
                </div>
            </div>

            @if($isEarlyBird ?? false)
            <div class="promo-banner mt-4 p-3 text-center" style="background: linear-gradient(135deg, #caef44ff 0%, #996f1bff 100%); border-radius: 12px; border: 2px dashed #fff; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.2);">
                <h4 style="color: #fff; font-weight: 800; margin-bottom: 5px; text-transform: uppercase; letter-spacing: 1px;">
                    <i class="mdi mdi-fire"></i> Early Bird Sale: 50% OFF ACTIVE!
                </h4>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; font-size: 0.9rem; font-weight: 500;">
                    Take advantage of our 50% discount. Ends March 15th, 2026.
                </p>
            </div>
            @endif
        </div>
    </div>

    <!-- Main Registration Form -->
    <div class="registration-container">
       
        <div class="row justify-content-center">
            <div class="col-lg-6">
                 <img src="{{asset('/assets/lusaka_summit_banner_2026_2.jpeg')}}" style="width:100%; ">
            </div>
            <div class="col-lg-6">
                 <img src="{{asset('/assets/lusaka_summit_banner_2026.jpeg')}}" style="width:100%; ">
            </div>
            <!-- Main Form -->
            <div class="col-lg-8">
                <!-- Conference Info -->
                <!--<div class="conference-badge">-->
                <!--    <i class="mdi mdi-star"></i>-->
                <!--    <span>3-Day Conference</span>-->
                <!--</div>-->
                <h2 class="page-head">Africa Governance, Risk, Compliance & Financial Crime Prevention Virtual Summit</h2>
                <div class="event-details">
                    <div class="event-detail-item">
                        <i class="mdi mdi-calendar"></i>
                        <span>April 17, 2026</span>
                    </div>
                    <div class="event-detail-item">
                        <i class="mdi mdi-video-outline"></i>
                        <span>Online / Virtual Platform</span>
                    </div>
                </div>

                <hr style="margin: 30px 0; border: none; border-top: 1px solid #e5e5e5;">

                <!-- Attendance Options -->
                <h3 class="section-title">Select Your Attendance Option</h3>
                <div class="attendance-options">
                    <!-- Virtual Summit Pass -->
                    <div class="option-card selected" data-price="{{ ($isEarlyBird ?? false) ? 650 : 1300 }}" onclick="selectOption(this)">
                        <div class="option-radio"></div>
                        @if($isEarlyBird ?? false)
                            <div class="option-badge" style="background: #ef4444;">EARLY BIRD - 50% OFF</div>
                        @else
                            <div class="option-badge">Standard Access</div>
                        @endif
                        <h4 class="option-title">Virtual Summit Pass</h4>
                        <p class="option-duration">Full Day • Digital Access</p>
                        <div class="option-price">
                            USD {{ ($isEarlyBird ?? false) ? '650' : '1,300' }}
                            @if($isEarlyBird ?? false)
                                <span style="text-decoration: line-through; color: rgba(0,0,0,0.3); font-size: 0.9rem; margin-left: 8px;">USD 1,300</span>
                            @endif
                        </div>
                        <ul class="option-features">
                            <li>Digital access to all sessions</li>
                            <li>Virtual networking floor</li>
                            <li>Digital conference materials</li>
                            <li>Electronic certificate of attendance</li>
                        </ul>
                    </div>
                </div>

                <!-- Delegate Information -->
                <h3 class="section-title">Delegate Information</h3>
                <div id="delegates-container">
                    <!-- First Delegate -->
                    <div class="delegate-card" data-delegate-index="1">
                        <div class="delegate-header">
                            <h5 class="delegate-number">Delegate  1 (Main Delegate)</h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Delegate Name <span class="required">*</span></label>
                                <input type="text" class="form-control form-control-sm" placeholder="Enter your delegate name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" class="form-control" placeholder="Enter your email address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <div class="phone-input">
                                    <input type="text" class="form-control" placeholder="+260" value="+260">
                                    <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Organization <span class="required">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your organization" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Job Title <span class="required">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your job title" required>
                            </div>
                            <div class="form-group">
                                <label>Country <span class="required">*</span></label>
                                <select class="form-control" required>
                                    <option value="">Select your country</option>
                                    <option value="zambia">Zambia</option>
                                    <option value="botswana">Botswana</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="south-africa">South Africa</option>
                                    <option value="zimbabwe">Zimbabwe</option>
                                    <option value="tanzania">Tanzania</option>
                                    <option value="uganda">Uganda</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Delegate Button -->
                <button class="add-delegate-btn" onclick="addDelegate()">
                    <i class="mdi mdi-plus"></i>
                    Add Another Delegate
                </button>

                <!-- Referral Section -->
                {{-- 
                <div class="referral-section mb-4" style="background: #f8fafc; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0;margin-top: 17px;">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 style="font-size: 1rem; font-weight: 700; color: #1e293b; margin-bottom: 4px;">Referred By SSTH?</h4>
                            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 0;">Check this if you were referred by the SSTH team.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="referredBySsth" 
                                style="width: 45px; height: 22px; cursor: pointer;"
                                {{ request()->query('ref') === 'ssth' ? 'checked disabled' : '' }}>
                        </div>
                    </div>
                </div>
                --}}

                <!-- Total and Payment -->
                <div class="total-section">
                    <div class="total-row">
                        <div>
                            <div>Total:</div>
                            <div class="total-subtitle" id="delegate-count-text">For One delegate(s)</div>
                        </div>
                        <div>
                            <div class="total-amount">USD</div>
                            <div class="total-amount" id="total-amount">{{ ($isEarlyBird ?? false) ? '650' : '1,300' }}</div>
                        </div>
                    </div>
                    <button class="payment-button">
                        <i class="mdi mdi-lock-outline"></i>
                        Proceed to Secure Payment
                    </button>
                    <p class="secure-text">
                        <i class="mdi mdi-shield-check"></i>
                        SSL encrypted payment
                    </p>
                </div>

                <!-- Footer Payment Info -->
                <div class="footer-payment">
                    <h4 class="footer-title">Secure & Trusted Registration</h4>
                    <div class="payment-methods">
                        <img src="{{asset('assets/images/mastercard.png')}}" width="40" alt="img">
                        <img src="{{asset('assets/images/visa.png')}}" width="40" alt="img">
                        <img src="{{asset('assets/images/paypal.png')}}" width="40" alt="img">
                    </div>
                    <p class="footer-help">
                        Need assistance with your registration?<br>
                        <i class="mdi mdi-email-outline"></i> <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a>
                        <span class="mx-2">•</span>
                        <i class="mdi mdi-phone"></i> <a href="tel:+2349153414314">+2349153414314</a>
                    </p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="registration-summary">
                    <h3 class="summary-title">Registration Summary</h3>

                    <!-- Conference Details -->
                    <div class="summary-section">
                        <h4 class="summary-section-title">Conference Details</h4>
                        <div class="summary-item"><strong>Africa GRC & Financial Crime Virtual Summit</strong></div>
                        <div class="summary-item">Online / Virtual Platform</div>
                    </div>

                    <hr class="summary-divider">

                    <!-- Additional Delegates -->
                    <div class="summary-section">
                        <h4 class="summary-section-title">Additional Delegates Breakdown</h4>
                        <div class="summary-item" id="summary-delegates">No additional delegates</div>
                    </div>

                    <hr class="summary-divider">

                    <!-- Pricing Summary -->
                    <div class="summary-section">
                        <h4 class="summary-section-title">Pricing Summary</h4>
                        <div class="summary-total">
                            <span>Total<br><small style="font-weight: 400; font-size: 0.8rem; color: var(--text-body);">Amount:</small></span>
                            <div style="text-align: right;">
                                <div class="summary-price">USD</div>
                                <div class="summary-price" id="sidebar-total-amount">{{ ($isEarlyBird ?? false) ? '650' : '1,300' }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Acknowledgment -->
                    <!-- <div class="acknowledgment-box">
                        <p>
                            <i class="mdi mdi-information-outline"></i>
                            Accommodation will be sent after registration is secured
                        </p>
                    </div> -->

                    <!-- Secure Registration -->
                    <div class="secure-registration-box">
                        <div class="secure-item">
                            <i class="mdi mdi-lock-check"></i>
                            <span>SSL Encrypted</span>
                        </div>
                        <div class="secure-item">
                            <i class="mdi mdi-shield-check"></i>
                            <span>Secure Payment</span>
                        </div>
                        <div class="secure-item">
                            <i class="mdi mdi-email-check"></i>
                            <span>Instant Confirmation</span>
                        </div>
                    </div>

                    <!-- Payment Icons -->
                    <div class="payment-icon">
                        <img src="{{asset('assets/images/mastercard.png')}}" width="40" alt="img">
                        <img src="{{asset('assets/images/visa.png')}}" width="40" alt="img">
                        <img src="{{asset('assets/images/paypal.png')}}" width="40" alt="img">
                    </div>

                    <!-- Virtual Access Info -->
                    <div class="visa-info-box mt-4" style="background: #f0f9ff; border-radius: 8px; padding: 15px; border: 1px solid #bae6fd;">
                        <h4 style="font-size: 0.9rem; font-weight: 700; color: #0369a1; margin-bottom: 10px; display: flex; align-items: center; gap: 8px;">
                            <i class="mdi mdi-web" style="color: #0ea5e9; font-size: 1.1rem;"></i>
                            Virtual Access Information
                        </h4>
                        <p style="font-size: 0.8rem; color: #0c4a6e; line-height: 1.5; margin-bottom: 0;">
                            Login credentials and access links will be sent to your registered email address 24 hours before the summit begins on April 17th.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/summit_registration.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch("{{ route('summit.slots') }}")
                .then(response => response.json())
                .then(data => {
                    const countElement = document.getElementById('slots-remaining-count');
                    const pulse = document.getElementById('pulse-indicator');
                    const text = document.getElementById('slots-text');
                    
                    countElement.textContent = data.remaining;
                    
                    if (data.remaining <= 20) {
                        pulse.className = 'pulse-indicator pulse-red';
                        text.style.color = '#ef4444';
                        text.innerHTML = `Hurry! <span id="slots-remaining-count">${data.remaining}</span> slots remaining`;
                    } else {
                        pulse.className = 'pulse-indicator pulse-green';
                        text.style.color = '#475569';
                    }

                    // If 0 slots, disable the button
                    if (data.remaining <= 0) {
                        const btn = document.querySelector('.payment-button');
                        if (btn) {
                            btn.disabled = true;
                            btn.innerHTML = '<i class="mdi mdi-block-helper"></i> Registration Sold Out';
                            btn.style.background = '#ccc';
                            btn.style.cursor = 'not-allowed';
                        }
                    }
                })
                .catch(error => console.error('Error fetching slots:', error));
        });
    </script>
</body>
</html>
