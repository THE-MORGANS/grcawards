<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voter Access | GRC & FinCrime Prevention Awards</title>
    <meta name="keywords" content="">
    <meta name="description" content="Securely access the GRC & Financial Crime Prevention Awards voting portal.">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1665490219/grcfincrimeawards/landing_page/grc_awards_summit_favicon_fmv96j.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Base Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; font-size: 16px; }

        :root {
            --ink: #0B0E14;
            --gold: #B8780F;
            --amber: #C98A1A;
            --off-white: #FDFBF6;
            --parchment: #F8F2E6;
            --rule: #DDD0B8;
            --text: #1E1A18;
            --mid: #5A4E44;
            --light-mid: #8A7B70;
            --white: #FFFFFF;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Inter', sans-serif;
            --font-mono: 'DM Mono', monospace;
        }

        body {
            background: var(--off-white);
            color: var(--text);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* ── PAGE LAYOUT ──────────────────────────── */
        .login-page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        /* Subtle warm ambient */
        .login-page::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 70% 60% at 90% 5%, rgba(197,136,30,0.06) 0%, transparent 60%),
                radial-gradient(ellipse 50% 50% at 5% 95%, rgba(197,136,30,0.04) 0%, transparent 60%);
            pointer-events: none;
            z-index: 0;
        }

        /* ── MAIN CONTENT ─────────────────────────── */
        .login-body {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 24px;
            position: relative;
            z-index: 1;
        }

        .login-card-wrap {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 0;
            max-width: 900px;
            width: 100%;
            border: 1px solid var(--rule);
            background: var(--white);
            box-shadow: 0 8px 48px rgba(42,36,32,0.10), 0 2px 12px rgba(42,36,32,0.06);
            overflow: hidden;
        }

        /* Left decorative panel — kept dark for elegant contrast */
        .login-left {
            background: var(--ink);
            border-right: 1px solid rgba(197,136,30,0.18);
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .login-left::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 80% 80% at 80% 15%, rgba(197,136,30,0.10) 0%, transparent 70%);
            pointer-events: none;
        }
        .ll-kicker {
            font-family: var(--font-mono);
            font-size: 10px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .ll-kicker::before {
            content: '';
            display: block;
            width: 28px;
            height: 1px;
            background: var(--gold);
        }
        .ll-title {
            font-family: var(--font-display);
            font-size: clamp(30px, 4vw, 46px);
            font-weight: 300;
            line-height: 1.1;
            color: #FFFFFF;
            margin-bottom: 20px;
        }
        .ll-title em { font-style: italic; color: var(--gold); }
        .ll-title strong { font-weight: 700; display: block; }
        .ll-body {
            font-size: 13.5px;
            color: rgba(255,255,255,0.42);
            line-height: 1.75;
            margin-bottom: 36px;
        }
        .ll-facts {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .ll-fact {
            padding: 14px 18px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .ll-fact-icon { font-size: 18px; color: var(--gold); flex-shrink: 0; }
        .ll-fact-text { font-size: 12.5px; color: rgba(255,255,255,0.38); line-height: 1.5; }
        .ll-fact-text strong { color: rgba(255,255,255,0.75); font-weight: 500; display: block; font-size: 13px; }

        /* ── RIGHT FORM PANEL ─────────────────────── */
        .login-right {
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: var(--white);
        }
        .form-kicker {
            font-family: var(--font-mono);
            font-size: 9px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 10px;
        }
        .form-heading {
            font-family: var(--font-display);
            font-size: 28px;
            font-weight: 600;
            color: var(--text);
            line-height: 1.2;
            margin-bottom: 6px;
        }
        .form-subheading {
            font-size: 13px;
            color: var(--light-mid);
            margin-bottom: 28px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--rule);
        }

        /* ── FORM FIELDS ──────────────────────────── */
        .field-group { margin-bottom: 20px; }
        .field-label {
            font-family: var(--font-mono);
            font-size: 9.5px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--light-mid);
            margin-bottom: 8px;
            display: block;
        }
        .field-input {
            width: 100%;
            padding: 13px 16px;
            background: var(--off-white);
            border: 1px solid var(--rule);
            color: var(--text);
            font-family: var(--font-body);
            font-size: 14px;
            border-radius: 0;
            outline: none;
            transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        }
        .field-input::placeholder { color: var(--light-mid); opacity: 0.7; }
        .field-input:focus {
            border-color: var(--gold);
            background: #FFFDF8;
            box-shadow: 0 0 0 3px rgba(184,120,15,0.08);
        }
        .field-error {
            font-size: 12px;
            color: #DC2626;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .field-error::before { content: '⚠'; font-size: 11px; }

        /* ── CAPTCHA ──────────────────────────────── */
        .captcha-box {
            background: var(--parchment);
            border: 1px solid var(--rule);
            padding: 14px;
            margin-bottom: 10px;
        }
        .captcha-box .captcha-img-wrapper {
            width: 100%;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .captcha-img-wrapper img {
            width: 100% !important;
            height: auto !important;
            display: block;
            border-radius: 2px;
        }
        .captcha-refresh-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 16px;
            background: var(--white);
            border: 1px solid var(--rule);
            color: var(--mid);
            font-family: var(--font-mono);
            font-size: 10px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
        }
        .captcha-refresh-btn:hover {
            border-color: var(--gold);
            color: var(--gold);
        }
        .captcha-refresh-btn i { color: var(--gold); font-size: 14px; }

        /* ── AGREEMENT ────────────────────────────── */
        .agreement-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 16px;
            background: var(--parchment);
            border: 1px solid var(--rule);
            margin-bottom: 24px;
        }
        .agreement-row input[type="checkbox"] {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            margin-top: 2px;
            accent-color: var(--gold);
            cursor: pointer;
        }
        .agreement-row p {
            font-size: 12px;
            color: var(--mid);
            line-height: 1.6;
        }
        .agreement-row p a {
            color: var(--gold);
            text-decoration: none;
        }
        .agreement-row p a:hover { text-decoration: underline; }

        /* ── SUBMIT BUTTON ────────────────────────── */
        .submit-btn {
            width: 100%;
            padding: 16px 24px;
            background: var(--gold);
            color: var(--ink);
            border: none;
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .submit-btn:hover { background: var(--amber); }
        .submit-btn:active { transform: scale(0.99); }

        /* ── FOOTER STRIP ─────────────────────────── */
        .login-footer-strip {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px 24px;
            border-top: 1px solid var(--rule);
        }
        .login-footer-strip p {
            font-family: var(--font-mono);
            font-size: 10px;
            letter-spacing: 0.1em;
            color: var(--light-mid);
            text-transform: uppercase;
        }

        /* ── RESPONSIVE ───────────────────────────── */
        @media (max-width: 768px) {
            .login-card-wrap {
                grid-template-columns: 1fr;
            }
            .login-left { display: none; }
            .login-right { padding: 40px 28px; }
            .site-header { padding: 16px 24px; }
        }
    </style>
</head>

<body>
<div class="login-page">

    {{-- Top Navigation Bar --}}
    @include('partials.voter.topbar')

    {{-- Main Login Body --}}
    <div class="login-body">
        <div class="login-card-wrap">

            {{-- Left Decorative Panel --}}
            <div class="login-left">
                <div>
                    <div class="ll-kicker">Voter Portal</div>
                    <h1 class="ll-title">
                        <em>Cast Your</em>
                        <strong>Vote.</strong>
                    </h1>
                    <p class="ll-body">
                        Welcome to the GRC & Financial Crime Prevention Awards voting portal.
                        Enter your email below to access your ballot and vote for this year's nominees.
                    </p>
                </div>
                <div class="ll-facts">
                    <div class="ll-fact">
                        <span class="ll-fact-icon"><i class="mdi mdi-shield-check"></i></span>
                        <div class="ll-fact-text">
                            <strong>Secure & Private</strong>
                            Your vote is encrypted and anonymous.
                        </div>
                    </div>
                    <div class="ll-fact">
                        <span class="ll-fact-icon"><i class="mdi mdi-clock-outline"></i></span>
                        <div class="ll-fact-text">
                            <strong>Quick Access</strong>
                            No password required — just your email.
                        </div>
                    </div>
                    <div class="ll-fact">
                        <span class="ll-fact-icon"><i class="mdi mdi-trophy-outline"></i></span>
                        <div class="ll-fact-text">
                            <strong>One Vote Per Voter</strong>
                            Votes are verified to ensure fairness.
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Form Panel --}}
            <div class="login-right">
                <div class="form-kicker">Step 1 of 2</div>
                <h2 class="form-heading">Enter Your Email</h2>
                <p class="form-subheading">We'll use this to verify and register your vote.</p>

                <form id="loginForm" method="POST" action="{{ route('register') }}" name="loginForm">
                    @csrf

                    {{-- Email Field --}}
                    <div class="field-group">
                        <label class="field-label" for="email">Email Address</label>
                        <input id="email" class="field-input" type="email" name="email"
                               placeholder="yourname@example.com"
                               value="{{ old('email') }}">
                        @error('email')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                        @if(Session::has('danger'))
                            <div class="field-error">{{ session('danger') }}</div>
                        @endif
                    </div>

                    {{-- Captcha Field --}}
                    <div class="field-group">
                        <label class="field-label">Security Check</label>
                        <div class="captcha-box">
                            <div class="captcha-img-wrapper">
                                {!! captcha_img('flat') !!}
                            </div>
                            <button type="button" class="captcha-refresh-btn"
                                    onclick="document.querySelector('.captcha-img-wrapper img').src = '/captcha/flat?' + Math.random()">
                                <i class="mdi mdi-refresh"></i> Generate New Code
                            </button>
                        </div>
                        <input id="captcha" class="field-input" type="text" name="captcha"
                               placeholder="Enter the code shown above" required>
                        @error('captcha')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Agreement --}}
                    <div class="agreement-row">
                        <input type="checkbox" name="i_agree" id="i_agree" value="1Xagrzi" checked>
                        <p>I have read and agree to the
                            <a href="{{ route('show_policy') }}" target="_blank">Privacy Policy</a>
                            and
                            <a href="{{ route('show_tc') }}" target="_blank">Terms & Conditions</a>.
                        </p>
                    </div>

                    {{-- Submit --}}
                    <button id="submits" type="submit" class="submit-btn">
                        <i class="mdi mdi-arrow-right-circle"></i>
                        <span>Proceed to Voting Page</span>
                        {{-- <span>Close Window</span> --}}
                    </button>

                </form>
            </div>

        </div>
    </div>

    {{-- Footer Strip --}}
    <div class="login-footer-strip">
        <p>&copy; {{ date('Y') }} THE MORGANS Consortium &middot; GRC & FinCrime Prevention Awards</p>
    </div>

</div>

{{-- Scripts --}}
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>
</html>
