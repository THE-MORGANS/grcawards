<!DOCTYPE html>
<html lang="en">
@section('title', 'Reserve Your Pass — GRC & Financial Crime Prevention Awards & Summit 2026')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/payment_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero pay-hero">
    <div class="wrap">
      <a href="{{ route('show_tickets') }}" class="pay-back">← Back to Tickets</a>
      <span class="ed-tag af"><span class="pin af"></span>Africa Edition 2026 · Nairobi</span>
      <h1>Reserve Your <span class="ac">Pass.</span></h1>
      <p>Marriott Hotel, Nairobi · 20 November 2026</p>
    </div>
  </header>

  <section class="band cream pay-wrap">
    <div class="wrap">

      {{-- Slots Remaining Indicator --}}
      <div id="slots-indicator" style="text-align:center;padding:14px 20px;border-radius:8px;margin-bottom:20px;font-weight:600;font-size:14px;background:#E8F5E9;color:#2E7D32;border:1px solid #C8E6C9">
        <span id="slots-indicator-text">✅ <strong>{{ $remaining_slots }}</strong> of 200 seats available</span>
      </div>

      {{-- Ticket Summary --}}
      <div class="pay-card">
        <h3>Your Selection</h3>
        <p class="card-sub">Review your ticket type before completing payment</p>

        <div class="ticket-summary">
          <div>
            <div class="ticket-summary-name">{{ $ticket['name'] }}</div>
            <div class="ticket-summary-desc">{{ $ticket['description'] }}</div>
          </div>
          <div class="ticket-summary-price">USD {{ number_format($ticket['price'], 0) }}<span
              style="font-size:11px;color:var(--muted)"> / ticket</span></div>
        </div>

        <div class="field-row">
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

      {{-- Delegate Details --}}
      <div class="pay-card">
        <h3>Delegate Details</h3>
        <p class="card-sub">This information will be used for your confirmation and e-ticket</p>

        <div class="field-row">
          <label for="name">Full Name</label>
          <input type="text" id="name" placeholder="Jane Doe" required>
          <div class="pay-error" id="error-name">Please enter your full name.</div>
        </div>

        <div class="form-grid">
          <div class="field-row">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="jane@company.com" required>
            <div class="pay-error" id="error-email">Please enter a valid email address.</div>
          </div>
          <div class="field-row">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" placeholder="+254 7XX XXX XXX">
          </div>
        </div>

        <div class="field-row">
          <label for="organization">Organization</label>
          <input type="text" id="organization" placeholder="Company / Institution name">
        </div>
      </div>

      {{-- Payment Method --}}
      <div class="pay-card">
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

      <div style="max-width:640px;margin:0 auto">
        <button class="btn btn-gold confirm-button" id="pay-btn" onclick="processPayment()">
          Pay Now & Reserve Pass
        </button>

        <div class="pay-terms">
          By proceeding, you agree to our <a href="{{ route('show_tc') }}">Terms of Service</a> and
          <a href="{{ route('show_policy') }}">Privacy Policy</a>
        </div>
      </div>

    </div>
  </section>

  @include('partials.voter.footer_new_theme')
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
    let availableSlots = {{ $remaining_slots }};

    function formatUSD(amount) {
      return 'USD ' + amount.toLocaleString('en-US');
    }

    function updateSlotsIndicator(remaining) {
      const indicator = document.getElementById('slots-indicator');
      const text = document.getElementById('slots-indicator-text');
      availableSlots = remaining;

      if (remaining <= 0) {
        indicator.style.background = '#FFE0E0';
        indicator.style.color = '#B91C1C';
        indicator.style.border = '1px solid #FECACA';
        text.innerHTML = '🚫 SOLD OUT — All 200 seats have been reserved.';
        document.getElementById('pay-btn').disabled = true;
        document.getElementById('pay-btn').textContent = 'Sold Out';
        document.getElementById('pay-btn').style.opacity = '0.5';
      } else if (remaining <= 20) {
        indicator.style.background = '#FFF3E0';
        indicator.style.color = '#E65100';
        indicator.style.border = '1px solid #FFE0B2';
        text.innerHTML = '🔥 Only <strong>' + remaining + '</strong> seats left — book now!';
      } else if (remaining <= 50) {
        indicator.style.background = '#FFFDE7';
        indicator.style.color = '#F57F17';
        indicator.style.border = '1px solid #FFF9C4';
        text.innerHTML = '⚡ <strong>' + remaining + '</strong> seats remaining — filling up fast!';
      } else {
        indicator.style.background = '#E8F5E9';
        indicator.style.color = '#2E7D32';
        indicator.style.border = '1px solid #C8E6C9';
        text.innerHTML = '✅ <strong>' + remaining + '</strong> of 200 seats available';
      }

      // Cap quantity to available slots
      if (quantity > availableSlots && availableSlots > 0) {
        quantity = availableSlots;
        updateTotal();
      }
    }

    function updateTotal() {
      document.getElementById('qty-value').textContent = quantity;
      document.getElementById('total-amount').textContent = formatUSD(ticketPrice * quantity);
    }

    document.getElementById('qty-minus').addEventListener('click', function () {
      if (quantity > 1) {
        quantity--;
        updateTotal();
      }
    });

    document.getElementById('qty-plus').addEventListener('click', function () {
      const maxQty = Math.min(20, availableSlots);
      if (quantity < maxQty) {
        quantity++;
        updateTotal();
      }
    });

    // Fetch live slot count on page load
    fetch("{{ route('awards_summit.slots') }}")
      .then(r => r.json())
      .then(data => updateSlotsIndicator(data.remaining))
      .catch(() => {});

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
