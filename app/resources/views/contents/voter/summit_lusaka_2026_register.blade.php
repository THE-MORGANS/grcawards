<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Conference Registration - Lusaka Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/summit_registration.css')}}" rel="stylesheet" />
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
                            <h5 class="delegate-number">Delegate  1</h5>
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
                        <img src="/assets/mastercard.png" width="40" alt="">
                        <img src="/assets/visa.png" width="40" alt="">
                        <img src="/assets/paypal.png" width="40" alt="">
                        
                        <!-- <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 32'%3E%3Crect fill='%231434CB' width='48' height='32' rx='4'/%3E%3Cpath fill='%23fff' d='M20 11h8v10h-8z'/%3E%3Ccircle fill='%23EB001B' cx='20' cy='16' r='5'/%3E%3Ccircle fill='%23F79E1B' cx='28' cy='16' r='5'/%3E%3C/svg%3E" alt="Visa" class="payment-logo"> -->
                        <!-- <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 32'%3E%3Crect fill='%23EB001B' width='48' height='32' rx='4'/%3E%3Ccircle fill='%23FF5F00' cx='18' cy='16' r='7'/%3E%3Ccircle fill='%23EB001B' cx='30' cy='16' r='7'/%3E%3C/svg%3E" alt="Mastercard" class="payment-logo"> -->
                        <!-- <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 32'%3E%3Crect fill='%23003087' width='48' height='32' rx='4'/%3E%3Cpath fill='%23009CDE' d='M19 12h-5v8h5z'/%3E%3Cpath fill='%23012169' d='M34 12h-5v8h5z'/%3E%3C/svg%3E" alt="PayPal" class="payment-logo"> -->
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
                        <img src="/assets/mastercard.png" width="40" alt="">
                        <img src="/assets/visa.png" width="40" alt="">
                        <img src="/assets/paypal.png" width="40" alt="">
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
</body>
</html>
