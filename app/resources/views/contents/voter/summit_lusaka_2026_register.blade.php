<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Conference Registration - Lusaka Summit 2026')

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
                        <a href="{{route('show_summit_lusaka_2026')}}" style="color: var(--text-body); text-decoration: none;">
                            <i class="mdi mdi-arrow-left"></i>
                        </a>
                        <h1 class="header-title">Conference Registration</h1>
                    </div>
                    <p class="header-subtitle">Complete your registration for the premier governance conference</p>
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
        </div>
    </div>

    <!-- Main Registration Form -->
    <div class="registration-container">
        <div class="row">
            <!-- Main Form -->
            <div class="col-lg-8">
                <!-- Conference Info -->
                <div class="conference-badge">
                    <i class="mdi mdi-star"></i>
                    <span>3-Day Conference</span>
                </div>
                <h2 class="page-head">Africa Governance, Risk, Compliance & Financial Crime Prevention Conference</h2>
                <div class="event-details">
                    <div class="event-detail-item">
                        <i class="mdi mdi-map-marker"></i>
                        <span>Lusaka, Zambia</span>
                    </div>
                    <div class="event-detail-item">
                        <i class="mdi mdi-calendar"></i>
                        <span>March 15-17, 2026</span>
                    </div>
                    <div class="event-detail-item">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>InterContinental Lusaka</span>
                    </div>
                </div>

                <hr style="margin: 30px 0; border: none; border-top: 1px solid #e5e5e5;">

                <!-- Attendance Options -->
                <h3 class="section-title">Select Your Attendance Option</h3>
                <div class="attendance-options">
                    <!-- Full Conference Pass -->
                    <div class="option-card selected" data-price="1300" onclick="selectOption(this)">
                        <div class="option-radio"></div>
                        <div class="option-badge">Recommended</div>
                        <h4 class="option-title">Full Conference Pass</h4>
                        <p class="option-duration">3 Days • Full Access</p>
                        <div class="option-price">USD 1,300</div>
                        <ul class="option-features">
                            <li>Full access to all sessions</li>
                            <li>All networking events</li>
                            <li>Conference materials</li>
                            <li>Certificate of attendance</li>
                        </ul>
                    </div>

                    <!-- Two-Day Pass -->
                    <div class="option-card" data-price="950" onclick="selectOption(this)">
                        <div class="option-radio"></div>
                        <h4 class="option-title">Two-Day Conference Pass</h4>
                        <p class="option-duration">Choose 2 Days</p>
                        <div class="option-price">USD 950</div>
                        <ul class="option-features">
                            <li>Access to selected sessions</li>
                            <li>Networking events on selected days</li>
                            <li>Conference materials</li>
                        </ul>
                    </div>

                    <!-- One-Day Pass -->
                    <div class="option-card" data-price="550" onclick="selectOption(this)">
                        <div class="option-radio"></div>
                        <h4 class="option-title">One-Day Conference Pass</h4>
                        <p class="option-duration">Choose 1 Day</p>
                        <div class="option-price">USD 550</div>
                        <ul class="option-features">
                            <li>Access to one-day sessions</li>
                            <li>Day's networking events</li>
                            <li>Basic conference materials</li>
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
                                    <option value="south-africa">South Africa</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="zimbabwe">Zimbabwe</option>
                                    <option value="botswana">Botswana</option>
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
                <div class="referral-section mb-4" style="background: #f8fafc; padding: 20px; border-radius: 12px; border: 1px solid #e2e8f0;margin-top: 17px;">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 style="font-size: 1rem; font-weight: 700; color: #1e293b; margin-bottom: 4px;">Referred By SSTH?</h4>
                            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 0;">Check this if you were referred by the SSTH team.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="referredBySsth" 
                                style="width: 45px; height: 22px; cursor: pointer;"
                                {{ request()->query('reference') === 'ssth' ? 'checked disabled' : '' }}>
                        </div>
                    </div>
                </div>

                <!-- Total and Payment -->
                <div class="total-section">
                    <div class="total-row">
                        <div>
                            <div>Total:</div>
                            <div class="total-subtitle" id="delegate-count-text">For One delegate(s)</div>
                        </div>
                        <div>
                            <div class="total-amount">USD</div>
                            <div class="total-amount" id="total-amount">1,300</div>
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
                        <div class="summary-item"><strong>Africa GRC & Financial Crime Conference</strong></div>
                        <div class="summary-item">Lusaka</div>
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
                                <div class="summary-price" id="sidebar-total-amount">1,300</div>
                            </div>
                        </div>
                    </div>

                    <!-- Acknowledgment -->
                    <div class="acknowledgment-box">
                        <p>
                            <i class="mdi mdi-information-outline"></i>
                            Accommodation will be sent after registration is secured
                        </p>
                    </div>

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
