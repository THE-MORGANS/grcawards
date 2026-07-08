<!DOCTYPE html>
<html lang="en">
@section('title', 'Reserve Your Pass - GRC & Financial Crime Prevention Awards & Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        :root {
            --ink: #0B0E14;
            --parchment: #F8F2E6;
            --gold: #C5881E;
            --amber: #E8A83A;
            --terracotta: #A8511E;
            --off-white: #FDFBF6;
            --rule: #E0D3BC;
            --text: #2A2420;
            --mid: #6B5E52;
            --light: #A0948A;
            --white: #FFFFFF;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Inter', sans-serif;
            --font-mono: 'DM Mono', monospace;
        }

        body {
            background: var(--off-white);
            color: var(--text);
            font-family: var(--font-body);
            line-height: 1.6
        }

        .pay-header {
            background: var(--ink);
            color: var(--white);
            padding: 90px 24px 40px;
        }

        .pay-header-inner {
            max-width: 640px;
            margin: 0 auto
        }

        .pay-back {
            color: rgba(255, 255, 255, 0.55);
            text-decoration: none;
            font-family: var(--font-mono);
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px
        }

        .pay-back:hover {
            color: var(--gold)
        }

        .pay-kicker {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.2em;
            color: var(--gold);
            text-transform: uppercase;
            margin-bottom: 10px
        }

        .pay-title {
            font-family: var(--font-display);
            font-size: 34px;
            font-weight: 600;
            line-height: 1.15
        }

        .pay-subtitle {
            color: rgba(255, 255, 255, 0.55);
            font-size: 14px;
            margin-top: 10px
        }

        .payment-page {
            max-width: 640px;
            margin: 0 auto;
            padding: 36px 24px 70px
        }

        .card {
            background: var(--white);
            border: 1px solid var(--rule);
            border-radius: 4px;
            padding: 32px;
            margin-bottom: 24px;
        }

        .card h3 {
            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: 6px;
        }

        .card-sub {
            font-size: 13px;
            color: var(--mid);
            margin-bottom: 24px
        }

        .ticket-summary {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 18px;
            margin-bottom: 18px;
            border-bottom: 1px solid var(--rule);
        }

        .ticket-summary-name {
            font-family: var(--font-display);
            font-size: 22px;
            font-weight: 600;
            color: var(--ink)
        }

        .ticket-summary-desc {
            font-size: 13px;
            color: var(--mid);
            margin-top: 4px;
            max-width: 360px
        }

        .ticket-summary-price {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 600;
            color: var(--gold);
            white-space: nowrap;
            margin-left: 16px
        }

        .form-row {
            margin-bottom: 18px
        }

        .form-row label {
            display: block;
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--mid);
            margin-bottom: 8px
        }

        .form-row input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--rule);
            border-radius: 3px;
            font-family: var(--font-body);
            font-size: 14px;
            color: var(--text);
            background: var(--off-white);
        }

        .form-row input:focus {
            outline: none;
            border-color: var(--gold);
            background: var(--white)
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 14px
        }

        .qty-btn {
            width: 38px;
            height: 38px;
            border: 1px solid var(--rule);
            background: var(--off-white);
            border-radius: 3px;
            font-size: 18px;
            color: var(--ink);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .15s;
        }

        .qty-btn:hover {
            border-color: var(--gold);
            color: var(--gold)
        }

        .qty-value {
            font-family: var(--font-mono);
            font-size: 16px;
            font-weight: 600;
            min-width: 24px;
            text-align: center
        }

        .total-display {
            background: var(--parchment);
            padding: 20px;
            border-radius: 4px;
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 13px;
            color: var(--mid)
        }

        .total-amount {
            font-family: var(--font-display);
            font-size: 28px;
            font-weight: 700;
            color: var(--ink)
        }

        .payment-options {
            display: grid;
            gap: 12px
        }

        .payment-option {
            border: 1px solid var(--rule);
            border-radius: 4px;
            padding: 16px 18px;
            cursor: pointer;
            transition: all .2s;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .payment-option:hover {
            border-color: var(--gold)
        }

        .payment-option.selected {
            border-color: var(--gold);
            background: rgba(197, 136, 30, 0.05)
        }

        .payment-radio {
            width: 18px;
            height: 18px;
            border: 2px solid var(--light);
            border-radius: 50%;
            position: relative;
            flex-shrink: 0
        }

        .payment-option.selected .payment-radio {
            border-color: var(--gold)
        }

        .payment-option.selected .payment-radio::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 9px;
            height: 9px;
            background: var(--gold);
            border-radius: 50%;
        }

        .payment-option-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--ink)
        }

        .payment-option-desc {
            font-size: 12px;
            color: var(--mid)
        }

        .confirm-button {
            width: 100%;
            background: var(--ink);
            color: var(--white);
            border: none;
            padding: 17px;
            border-radius: 3px;
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
            transition: all .2s;
            margin-top: 22px;
        }

        .confirm-button:hover {
            background: var(--terracotta)
        }

        .confirm-button:disabled {
            opacity: 0.6;
            cursor: not-allowed
        }

        .terms-text {
            text-align: center;
            font-size: 12px;
            color: var(--mid);
            margin-top: 16px
        }

        .terms-text a {
            color: var(--gold);
            text-decoration: none
        }

        .field-error {
            color: var(--terracotta);
            font-size: 12px;
            margin-top: 6px;
            display: none
        }

        @media (max-width:520px) {
            .form-grid {
                grid-template-columns: 1fr
            }

            .ticket-summary {
                flex-direction: column;
                gap: 10px
            }

            .ticket-summary-price {
                margin-left: 0
            }
        }
    </style>
</head>

<body>
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <div class="pay-header">
        <div class="pay-header-inner">
            <a href="{{ route('landing.index') }}#tickets" class="pay-back">← Back to Tickets</a>
            <div class="pay-kicker">Africa Edition 2026 · Nairobi</div>
            <h1 class="pay-title">Reserve Your Pass</h1>
            <p class="pay-subtitle">Marriott Hotel, Nairobi · 20 November 2026</p>
        </div>
    </div>

    <div class="payment-page">
        <!-- Ticket Summary -->
        <div class="card">
            <h3>Your Selection</h3>
            <p class="card-sub">Review your ticket type before completing payment</p>

            <div class="ticket-summary">
                <div>
                    <div class="ticket-summary-name">{{ $ticket['name'] }}</div>
                    <div class="ticket-summary-desc">{{ $ticket['description'] }}</div>
                </div>
                <div class="ticket-summary-price">USD {{ number_format($ticket['price'], 0) }}<span style="font-size:11px;color:var(--mid)"> / ticket</span></div>
            </div>

            <div class="form-row">
                <label>Number of Tickets</label>
                <div class="qty-control">
                    <button type="button" class="qty-btn" id="qty-minus">−</button>
                    <span class="qty-value" id="qty-value">1</span>
                    <button type="button" class="qty-btn" id="qty-plus">+</button>
                </div>
            </div>

            <div class="total-display">
                <span class="total-label">Total Amount</span>
                <span class="total-amount" id="total-amount">USD {{ number_format($ticket['price'], 0) }}</span>
            </div>
        </div>

        <!-- Delegate Details -->
        <div class="card">
            <h3>Delegate Details</h3>
            <p class="card-sub">This information will be used for your confirmation and e-ticket</p>

            <div class="form-row">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Jane Doe" required>
                <div class="field-error" id="error-name">Please enter your full name.</div>
            </div>

            <div class="form-grid">
                <div class="form-row">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="jane@company.com" required>
                    <div class="field-error" id="error-email">Please enter a valid email address.</div>
                </div>
                <div class="form-row">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="+254 7XX XXX XXX">
                </div>
            </div>

            <div class="form-row">
                <label for="organization">Organization</label>
                <input type="text" id="organization" placeholder="Company / Institution name">
            </div>
        </div>

        <!-- Payment Method -->
        <div class="card">
            <h3>Payment Method</h3>
            <p class="card-sub">Choose your preferred secure payment provider</p>

            <div class="payment-options">
                <div class="payment-option selected" data-method="stripe" onclick="selectPaymentMethod(this)">
                    <div class="payment-radio"></div>
                    <div>
                        <div class="payment-option-name">Stripe</div>
                        <div class="payment-option-desc">Secure card payment (Worldwide)</div>
                    </div>
                </div>
                <div class="payment-option" data-method="paystack" onclick="selectPaymentMethod(this)">
                    <div class="payment-radio"></div>
                    <div>
                        <div class="payment-option-name">Paystack</div>
                        <div class="payment-option-desc">Fast payments (Africa) — coming soon</div>
                    </div>
                </div>
                <div class="payment-option" data-method="flutterwave" onclick="selectPaymentMethod(this)">
                    <div class="payment-radio"></div>
                    <div>
                        <div class="payment-option-name">Flutterwave</div>
                        <div class="payment-option-desc">Card & mobile money (Africa) — coming soon</div>
                    </div>
                </div>
            </div>
        </div>

        <button class="confirm-button" id="pay-btn" onclick="processPayment()">
            Pay Now & Reserve Pass
        </button>

        <div class="terms-text">
            By proceeding, you agree to our <a href="{{ route('show_tc') }}">Terms of Service</a> and <a href="{{ route('show_policy') }}">Privacy Policy</a>
        </div>
    </div>

    @include('partials.voter.footer')
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{ $stripe_key }}');
        const ticketType = "{{ $ticket_type }}";
        const ticketPrice = "{{ $ticket['price'] }}";

        let quantity = 1;
        let selectedPaymentMethod = 'stripe';

        function formatUSD(amount) {
            return 'USD ' + amount.toLocaleString('en-US');
        }

        function updateTotal() {
            document.getElementById('qty-value').textContent = quantity;
            document.getElementById('total-amount').textContent = formatUSD(ticketPrice * quantity);
        }

        document.getElementById('qty-minus').addEventListener('click', function() {
            if (quantity > 1) {
                quantity--;
                updateTotal();
            }
        });

        document.getElementById('qty-plus').addEventListener('click', function() {
            if (quantity < 20) {
                quantity++;
                updateTotal();
            }
        });

        function selectPaymentMethod(element) {
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('selected');
            });
            element.classList.add('selected');
            selectedPaymentMethod = element.getAttribute('data-method');
        }

        function validateForm() {
            let valid = true;
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            document.getElementById('error-name').style.display = 'none';
            document.getElementById('error-email').style.display = 'none';

            if (!name) {
                document.getElementById('error-name').style.display = 'block';
                valid = false;
            }

            if (!email || !emailPattern.test(email)) {
                document.getElementById('error-email').style.display = 'block';
                valid = false;
            }

            return valid;
        }

        function processPayment() {
            if (!validateForm()) {
                return;
            }

            if (selectedPaymentMethod !== 'stripe') {
                alert(`${selectedPaymentMethod} integration is coming soon. Please use Stripe.`);
                return;
            }

            const payButton = document.getElementById('pay-btn');
            const originalText = payButton.textContent;
            payButton.disabled = true;
            payButton.innerHTML = 'Processing...';

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
                "{{ csrf_token() }}";

            const payload = {
                name: document.getElementById('name').value.trim(),
                email: document.getElementById('email').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                organization: document.getElementById('organization').value.trim(),
                ticket_type: ticketType,
                quantity: quantity,
                _token: csrfToken
            };

            fetch("{{ route('awards_summit.payment.initiate') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        window.location.href = data.checkout_url;
                    } else {
                        alert('Error: ' + (data.message || 'Payment initiation failed.'));
                        payButton.disabled = false;
                        payButton.textContent = originalText;
                    }
                })
                .catch(error => {
                    console.error('Payment Error:', error);
                    alert('An error occurred. Please try again.');
                    payButton.disabled = false;
                    payButton.textContent = originalText;
                });
        }
    </script>
</body>

</html>