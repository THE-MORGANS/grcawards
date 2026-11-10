<!DOCTYPE html>
<html lang="en">
@section('title', 'Guest Registration — GRC & Financial Crime Prevention Awards & Summit 2026')

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
      <a href="{{ route('landing.index') }}" class="pay-back">← Back to Home</a>
      <span class="ed-tag af"><span class="pin af"></span>Nairobi, Kenya · 20 November 2026</span>
      <h1>Guest <span class="ac">Registration.</span></h1>
      <p>Radisson Blu Hotel, Nairobi · 20 November 2026 — Special registration, no ticket purchase required.</p>
    </div>
  </header>

  <section class="band cream pay-wrap">
    <div class="wrap">

      @if(Session::has('error'))
      <div class="pay-card" style="border-left: 4px solid #e74c3c;">
        <p style="color:#e74c3c;font-weight:600;margin:0">{{ session('error') }}</p>
      </div>
      @endif

      @if($remaining < 1)
        <div class="pay-card" style="text-align:center">
        <h3>Fully Booked</h3>
        <p class="card-sub">Sorry, all seats for this edition have been reserved. Please contact
          <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a> to be added to the waitlist.
        </p>
    </div>
    @else
    <div class="pay-card">
      <h3>Your Details</h3>
      <!-- <p class="card-sub">{{ $remaining }} seat(s) remaining — registration is free.</p> -->

      <form method="POST" action="{{ route('awards_summit.guest.register') }}" onsubmit="return handleGuestRegistrationSubmit(this)">
        @csrf

        <div class="field-row">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Jane Doe" required>
          @error('name')
          <div class="pay-error" style="display:block">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-grid">
          <div class="field-row">
            <label for="organization">Organization</label>
            <input type="text" id="organization" name="organization" value="{{ old('organization') }}" placeholder="Company / Institution name" required>
            @error('organization')
            <div class="pay-error" style="display:block">{{ $message }}</div>
            @enderror
          </div>
          <div class="field-row">
            <label for="role">Role</label>
            <input type="text" id="role" name="role" value="{{ old('role') }}" placeholder="e.g. Head of Compliance" required>
            @error('role')
            <div class="pay-error" style="display:block">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form-grid">
          <div class="field-row">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="jane@company.com" required>
            @error('email')
            <div class="pay-error" style="display:block">{{ $message }}</div>
            @enderror
          </div>
          <div class="field-row">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+254 7XX XXX XXX" required>
            @error('phone')
            <div class="pay-error" style="display:block">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div style="max-width:640px;margin:20px auto 0">
          <button type="submit" class="btn btn-gold confirm-button" id="guest-register-btn">
            <span id="guest-register-btn-text">Complete Registration</span>
          </button>

          <div class="pay-terms">
            By registering, you agree to our <a href="{{ route('show_tc') }}">Terms of Service</a> and
            <a href="{{ route('show_policy') }}">Privacy Policy</a>
          </div>
        </div>
      </form>
    </div>
    @endif

    </div>
  </section>

  @include('partials.voter.footer_new_theme')
  @include('partials.voter.scripts')

  <style>
    .btn-spinner {
      display: inline-block;
      width: 14px;
      height: 14px;
      margin-right: 8px;
      border: 2px solid rgba(255, 255, 255, 0.4);
      border-top-color: #fff;
      border-radius: 50%;
      animation: guest-btn-spin 0.7s linear infinite;
      vertical-align: middle;
    }

    @keyframes guest-btn-spin {
      to { transform: rotate(360deg); }
    }
  </style>

  <script>
    function handleGuestRegistrationSubmit(form) {
      const btn = document.getElementById('guest-register-btn');
      const btnText = document.getElementById('guest-register-btn-text');

      if (btn.disabled) {
        return false;
      }

      btn.disabled = true;
      btn.style.opacity = '0.75';
      btn.style.cursor = 'not-allowed';
      btnText.innerHTML = '<span class="btn-spinner"></span>Submitting...';

      return true;
    }
  </script>

</body>

</html>