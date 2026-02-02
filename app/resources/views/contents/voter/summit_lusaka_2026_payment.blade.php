<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Complete Payment - Lusaka Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/summit_registration.css')}}" rel="stylesheet" />
    <style>
        .payment-page {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 15px 60px;
        }

        .summary-card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .summary-header h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            margin: 0;
        }

        .edit-link {
            color: var(--gold);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            font-size: 0.85rem;
            color: var(--text-body);
            font-weight: 500;
        }

        .info-value {
            font-size: 0.85rem;
            color: var(--dark);
            font-weight: 600;
            text-align: right;
        }

        .total-display {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .total-display .info-row {
            border: none;
            margin-bottom: 0;
        }

        .total-amount-large {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--dark);
        }

        .payment-method-card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .payment-method-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .payment-subtitle {
            font-size: 0.85rem;
            color: var(--text-body);
            margin-bottom: 25px;
        }

        .payment-options {
            display: grid;
            gap: 15px;
        }

        .payment-option {
            border: 2px solid #e5e5e5;
            border-radius: 10px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .payment-option:hover {
            border-color: var(--gold);
            background: rgba(212, 175, 55, 0.02);
        }

        .payment-option.selected {
            border-color: var(--gold);
            background: rgba(212, 175, 55, 0.05);
        }

        .payment-radio {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 50%;
            position: relative;
        }

        .payment-option.selected .payment-radio {
            border-color: var(--gold);
        }

        .payment-option.selected .payment-radio::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            background: var(--gold);
            border-radius: 50%;
        }

        .payment-option-content {
            flex: 1;
        }

        .payment-option-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 3px;
        }

        .payment-option-desc {
            font-size: 0.8rem;
            color: var(--text-body);
        }

        .payment-features {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.8rem;
            color: var(--text-body);
        }

        .feature-item i {
            color: var(--gold);
        }

        .confirm-button {
            width: 100%;
            background: linear-gradient(135deg, #1a1d24 0%, #0f1115 100%);
            color: #fff;
            border: none;
            padding: 18px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .confirm-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(15, 17, 21, 0.3);
        }

        .terms-text {
            text-align: center;
            font-size: 0.75rem;
            color: var(--text-body);
            margin-top: 15px;
        }

        .terms-text a {
            color: var(--gold);
            text-decoration: none;
        }

        .terms-text a:hover {
            text-decoration: underline;
        }

        .help-section {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid #e5e5e5;
        }

        .help-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .help-text {
            font-size: 0.85rem;
            color: var(--text-body);
            margin-bottom: 10px;
        }

        .help-contacts {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .help-contact {
            font-size: 0.85rem;
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
        }

        .step-indicator {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--text-body);
        }

        .days-list {
            margin-top: 8px;
            font-size: 0.8rem;
            line-height: 1.6;
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
                        <a href="javascript:history.back()" style="color: var(--text-body); text-decoration: none;">
                            <i class="mdi mdi-arrow-left"></i>
                        </a>
                        <h1 class="header-title">Complete Your Registration</h1>
                    </div>
                    <p class="header-subtitle">Review your registration details and complete payment</p>
                </div>
                <div class="step-indicator">
                    <i class="mdi mdi-check-circle" style="color: var(--gold);"></i>
                    <span>Step 2 of 2</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Page Content -->
    <div class="payment-page">
        <!-- Registration Summary -->
        <div class="summary-card">
            <div class="summary-header">
                <h3>Registration Summary</h3>
                <a href="javascript:history.back()" class="edit-link">
                    <i class="mdi mdi-pencil"></i>
                    Edit
                </a>
            </div>

            <div class="conference-badge">
                <i class="mdi mdi-star"></i>
                <span>3-Day Conference</span>
            </div>

            <h4 style="font-size: 1rem; font-weight: 700; color: var(--dark); margin: 15px 0;">
                Africa Governance, Risk, Compliance & Financial Crime Prevention Conference
            </h4>

            <div class="info-row">
                <div>
                    <i class="mdi mdi-map-marker" style="color: var(--gold); margin-right: 5px;"></i>
                    <span class="info-label">Lusaka</span>
                </div>
                <div>
                    <i class="mdi mdi-calendar" style="color: var(--gold); margin-right: 5px;"></i>
                    <span class="info-value">March 15-17, 2026</span>
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">Attendance Type</div>
                <div class="info-value" id="attendance-type">Full Conference Pass (3 Days)</div>
            </div>

            <div class="info-row">
                <div class="info-label">Conference Days</div>
                <div class="info-value">
                    <div class="days-list" id="conference-days">
                        Day 1: March 15, 2024<br>
                        Day 2: March 16, 2024<br>
                        Day 3: March 17, 2024
                    </div>
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">Number of Delegates</div>
                <div class="info-value" id="delegate-count">1</div>
            </div>

            <div class="total-display">
                <div class="info-row">
                    <div class="info-label">Total Amount</div>
                    <div class="total-amount-large" id="total-amount">USD 1,300</div>
                </div>
                <div style="font-size: 0.75rem; color: var(--text-body); margin-top: 8px;">
                    <i class="mdi mdi-information-outline"></i>
                    Accommodation and travel not included
                </div>
            </div>
        </div>

        <!-- Payment Method Selection -->
        <div class="payment-method-card">
            <h3>Select Payment Method</h3>
            <p class="payment-subtitle">Choose your preferred secure payment provider</p>

            <div class="payment-options">
                <div class="payment-option selected" data-method="paystack" onclick="selectPaymentMethod(this)">
                    <div class="payment-radio"></div>
                    <div class="payment-option-content">
                        <div class="payment-option-name">Paystack</div>
                        <div class="payment-option-desc">Fast payments</div>
                    </div>
                </div>

                <div class="payment-option" data-method="flutterwave" onclick="selectPaymentMethod(this)">
                    <div class="payment-radio"></div>
                    <div class="payment-option-content">
                        <div class="payment-option-name">Flutterwave</div>
                        <div class="payment-option-desc">Card & mobile money</div>
                    </div>
                </div>
            </div>

            <div class="payment-features">
                <div class="feature-item">
                    <i class="mdi mdi-lock-check"></i>
                    <span>256-bit SSL Encryption</span>
                </div>
                <div class="feature-item">
                    <i class="mdi mdi-email-check"></i>
                    <span>Instant email confirmation</span>
                </div>
                <div class="feature-item">
                    <i class="mdi mdi-shield-check"></i>
                    <span>Secure online payments</span>
                </div>
            </div>

            <div class="payment-methods" style="justify-content: center; margin: 20px 0;">
                <span style="font-size: 0.8rem; color: var(--text-body); margin-right: 10px;">We Accept:</span>
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 32'%3E%3Crect fill='%231434CB' width='48' height='32' rx='4'/%3E%3Cpath fill='%23fff' d='M20 11h8v10h-8z'/%3E%3Ccircle fill='%23EB001B' cx='20' cy='16' r='5'/%3E%3Ccircle fill='%23F79E1B' cx='28' cy='16' r='5'/%3E%3C/svg%3E" alt="Visa" class="payment-logo">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 32'%3E%3Crect fill='%23EB001B' width='48' height='32' rx='4'/%3E%3Ccircle fill='%23FF5F00' cx='18' cy='16' r='7'/%3E%3Ccircle fill='%23EB001B' cx='30' cy='16' r='7'/%3E%3C/svg%3E" alt="Mastercard" class="payment-logo">
            </div>
        </div>

        <!-- Total Amount Display -->
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center; margin-bottom: 20px;">
            <div style="font-size: 0.85rem; color: var(--text-body); margin-bottom: 5px;">Total Amount</div>
            <div style="font-size: 1.75rem; font-weight: 800; color: var(--dark);" id="final-total">USD 1,300</div>
            <div style="font-size: 0.75rem; color: var(--text-body); margin-top: 5px;">For <span id="delegate-count-text">1 delegate(s)</span></div>
        </div>

        <!-- Confirm Button -->
        <button class="confirm-button" onclick="processPayment()">
            Pay Now & Confirm Registration
        </button>

        <div class="terms-text">
            By proceeding, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
        </div>

        <!-- Help Section -->
        <div class="help-section">
            <h4 class="help-title">Need Help?</h4>
            <p class="help-text">Having trouble with your payment? Our support team is here to assist you.</p>
            <div class="help-contacts">
                <a href="mailto:registration@grc-conference.com" class="help-contact">
                    registration@grc-conference.com
                </a>
                <span style="color: var(--text-body);">•</span>
                <a href="tel:+260123456789" class="help-contact">
                    +260 123 456 789
                </a>
                <span style="color: var(--text-body);">•</span>
                <span class="help-contact">24/7 Support Available</span>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <script>
        let selectedPaymentMethod = 'paystack';
        let registrationData = null;

        // Load registration data from sessionStorage
        document.addEventListener('DOMContentLoaded', function() {
            const dataStr = sessionStorage.getItem('registrationData');
            if (dataStr) {
                registrationData = JSON.parse(dataStr);
                displayRegistrationData();
            } else {
                // If no data, redirect back to registration
                alert('No registration data found. Please complete the registration form first.');
                window.location.href = "{{route('landing.summit_lusaka_2026_register')}}";
            }
        });

        function displayRegistrationData() {
            if (!registrationData) return;

            // Update attendance type
            document.getElementById('attendance-type').textContent = registrationData.attendanceOption.name;

            // Update delegate count
            document.getElementById('delegate-count').textContent = registrationData.delegates.count;
            document.getElementById('delegate-count-text').textContent = 
                registrationData.delegates.count === 1 ? '1 delegate' : `${registrationData.delegates.count} delegates`;

            // Update totals
            const formattedTotal = registrationData.pricing.formattedTotal;
            document.getElementById('total-amount').textContent = formattedTotal;
            document.getElementById('final-total').textContent = formattedTotal;
        }

        function selectPaymentMethod(element) {
            // Remove selected class from all options
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('selected');
            });

            // Add selected class to clicked option
            element.classList.add('selected');

            // Update selected payment method
            selectedPaymentMethod = element.getAttribute('data-method');
        }

        function processPayment() {
            if (!registrationData) {
                alert('Registration data not found. Please go back and complete the form.');
                return;
            }

            console.log('Processing payment with:', {
                paymentMethod: selectedPaymentMethod,
                registrationData: registrationData
            });

            // Here you would integrate with Paystack or Flutterwave
            alert(`Processing payment via ${selectedPaymentMethod}...\nCheck console for complete data.`);
            
            // After successful payment, you would redirect to a success page
            // window.location.href = '/registration/success';
        }
    </script>
</body>
</html>
