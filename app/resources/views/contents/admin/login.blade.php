<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Login | GRC & Financial Crime Prevention Awards & Summit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin sign-in for the GRC & Financial Crime Prevention Awards & Summit." name="description" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login_new_theme.css') }}">

    <style>
        body.admin-login-bg {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(130% 130% at 50% -25%, var(--cream) 0%, var(--paper) 55%, var(--paper) 100%);
        }

        .admin-login-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 25px 60px rgba(8, 14, 34, 0.35);
            overflow: hidden;
        }

        .admin-login-card .body {
            padding: 40px 36px;
        }

        .admin-login-tag {
            font-family: var(--sans);
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-size: 10.5px;
            color: var(--gold-deep);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
        }

        .admin-login-tag::before {
            content: "";
            width: 22px;
            height: 1px;
            background: var(--gold-deep);
        }

        .password-field {
            position: relative;
        }

        .password-field input {
            width: 100%;
            padding-right: 46px;
        }

        .password-eye {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--muted);
            font-size: 16px;
            user-select: none;
        }

        .password-eye:hover {
            color: var(--gold-deep);
        }

        .remember-row {
            display: flex;
            align-items: center;
            gap: 9px;
            margin: 4px 0 24px;
        }

        .remember-row input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--gold-deep);
            cursor: pointer;
        }

        .remember-row label {
            font-size: 13px;
            color: var(--muted);
            margin: 0;
            cursor: pointer;
        }
    </style>
</head>

<body class="loading admin-login-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <div class="wrap" style="max-width:440px;width:100%;padding:40px 24px;margin:0 auto">

        <div style="text-align:center;margin-bottom:28px">
            <a href="{{ route('landing.index') }}" style="display:inline-block">
                <img src="{{asset('assets/images/grclogo.png')}}" alt="GRC & Financial Crime Prevention Awards & Summit" style="height:64px;width:auto;margin:0 auto">
            </a>
        </div>

        <div class="admin-login-card">
            <div class="body">
                <div class="admin-login-tag">Admin Portal</div>
                <h1 style="font-family:var(--sans);font-weight:800;font-size:26px;color:var(--navy);margin-bottom:6px">Sign In</h1>


                <form method="POST" action="{{route('admin.loginn')}}">
                    @csrf

                    <div class="field">
                        <label for="email">Email address</label>
                        <input name="email" value="{{ old('email') }}" type="email" id="email" required
                            placeholder="e.g abcdefgh@ijk.com" autocomplete="email" autofocus>
                        @error('email')
                        <div class="field-err">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <div class="password-field">
                            <input type="password" id="password" name="password"
                                placeholder="Enter your password" autocomplete="current-password">
                            <span class="password-eye" id="check">👁</span>
                        </div>
                        @error('password')
                        <div class="field-err">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="remember-row">
                        <input type="checkbox" id="checkbox-signin" checked>
                        <label for="checkbox-signin">Remember me</label>
                    </div>

                    <div class="callout" style="border-left:5px solid var(--crimson);margin-bottom:18px;padding:16px 18px">
                        <h3 style="font-size:13.5px;margin-bottom:6px">⚖️ For Judges</h3>
                        <p style="color:var(--muted);font-size:12px;line-height:1.6;margin:0 0 12px">By signing in,
                            you confirm you have no personal, professional or commercial relationship with any
                            nominee in the categories you are assessing. All scores must be submitted independently,
                            confidentially and without bias, in line with the Awards' published judging criteria —
                            any conflict of interest must be declared and the affected category recused.</p>
                        <div style="display:flex;align-items:flex-start;gap:9px">
                            <input type="checkbox" id="judge-disclaimer" required
                                style="width:16px;height:16px;margin-top:2px;accent-color:var(--crimson);cursor:pointer;flex:none">
                            <label for="judge-disclaimer" style="font-size:12px;color:var(--navy);margin:0;cursor:pointer">I
                                have read and agree to the above.</label>
                        </div>
                    </div>

                    <button class="btn btn-gold btn-block" type="submit">Log In →</button>

                </form>
            </div>
        </div>

        <p style="text-align:center;margin-top:24px;font-size:11.5px;letter-spacing:.04em;color:var(--muted)">
            &copy; {{date('Y')}} GRC &amp; FinCrime Prevention Awards &mdash; The Morgans Consortium</p>

    </div>

    @include('partials.admin.scripts')

    <script>
        $(document).ready(function() {
            $('#check').click(function() {
                if ('password' == $('#password').attr('type')) {
                    $('#password').prop('type', 'text');
                } else {
                    $('#password').prop('type', 'password');
                }
            });
        })
    </script>

</body>

</html>