<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Registration Successful - Lusaka Summit 2026')

<head>
    @include('partials.voter.head')
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/summit_registration.css')}}" rel="stylesheet" />
    <style>
        .success-page {
            max-width: 700px;
            margin: 60px auto;
            padding: 0 15px;
            text-align: center;
        }

        .success-card {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: #f0fff4;
            color: #22c55e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            margin: 0 auto 30px;
        }

        .success-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .success-message {
            color: var(--text-body);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .registration-details {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 35px;
            text-align: left;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #eee;
        }

        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            font-weight: 600;
            color: var(--text-body);
            font-size: 0.9rem;
        }

        .detail-value {
            font-weight: 700;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .ticket-box {
            background: var(--dark);
            color: #fff;
            padding: 20px;
            border-radius: 12px;
            margin: 30px 0;
            position: relative;
            overflow: hidden;
        }

        .ticket-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.7;
            margin-bottom: 5px;
        }

        .ticket-number {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--gold);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn-success-primary {
            background: var(--gold);
            color: #fff;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-success-secondary {
            background: #f0f0f0;
            color: var(--dark);
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-success-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }

        .next-steps {
            margin-top: 50px;
            text-align: left;
        }

        .next-steps h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .step-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .step-dot {
            width: 24px;
            height: 24px;
            background: var(--gold);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
            flex-shrink: 0;
        }

        @media print {
            @page {
                margin: 0;
                size: auto;
            }
            
            body {
                background: #fff;
                margin: 0;
                padding: 0;
            }

            /* Hide everything by default */
            body > *:not(.success-page),
            .success-page > *:not(.success-card),
            .action-buttons,
            .next-steps {
                display: none !important;
            }

            .success-icon {
                width: 60px !important;
                height: 60px !important;
                font-size: 30px !important;
                margin-bottom: 15px !important;
            }

            .success-page {
                margin: 0 !important;
                padding: 40px !important;
                width: 100% !important;
                max-width: 100% !important;
            }

            .success-card {
                box-shadow: none !important;
                border: 1px solid #eee !important;
                padding: 0 !important;
                width: 100% !important;
                margin: 0 !important;
            }

            .success-title {
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <div class="success-page">
        <div class="success-card">
            <div class="success-icon">
                <i class="mdi mdi-check-decagram"></i>
            </div>

            <h1 class="success-title">Registration Confirmed!</h1>
            <p class="success-message">
                Thank you, <strong>{{ $registration->name }}</strong>. Your payment for the Lusaka Summit 2026 has been successfully processed and your slots are secured.
            </p>

            <div class="ticket-box">
                <div class="ticket-label">Your Confirmation Number</div>
                <div class="ticket-number">{{ $registration->registration_id }}</div>
                <div style="font-size: 0.7rem; margin-top: 10px; opacity: 0.8;">
                    Ticket ID: {{ $registration->ticket_number }}
                </div>
            </div>

            <div class="registration-details">
                <div class="detail-row">
                    <span class="detail-label">Email Address</span>
                    <span class="detail-value">{{ $registration->email }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Attendance Option</span>
                    <span class="detail-value">{{ $registration->attendance_option }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Total Delegates</span>
                    <span class="detail-value">{{ $registration->delegate_count }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Amount Paid</span>
                    <span class="detail-value">{{ strtoupper($registration->currency) }} {{ number_format($registration->amount, 2) }}</span>
                </div>
                @if($registration->referred_by_ssth)
                <div class="detail-row">
                    <span class="detail-label">Referred By SSTH</span>
                    <span class="detail-value" style="color: #22c55e;">
                        <i class="mdi mdi-check-circle"></i> Yes
                    </span>
                </div>
                @endif
            </div>

            <div class="action-buttons">
                <a href="#" class="btn-success-primary" onclick="window.print()">
                    <i class="mdi mdi-printer"></i> Print Receipt
                </a>
                <a href="{{ route('landing.index') }}" class="btn-success-secondary">
                    Return Home
                </a>
            </div>

            <div class="next-steps">
                <h4>What's Next?</h4>
                <div class="step-item">
                    <div class="step-dot">1</div>
                    <div>
                        <p style="margin: 0; font-weight: 600;">Check Your Email</p>
                        <p style="margin: 5px 0 0; font-size: 0.85rem; color: var(--text-body);">We've sent a detailed confirmation email with your ticket and event details.</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-dot">2</div>
                    <div>
                        <p style="margin: 0; font-weight: 600;">Accommodation Details</p>
                        <p style="margin: 5px 0 0; font-size: 0.85rem; color: var(--text-body);">Information about discounted hotel bookings will be sent to your email within 24 hours.</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-dot">3</div>
                    <div>
                        <p style="margin: 0; font-weight: 600;">Event Updates</p>
                        <p style="margin: 5px 0 0; font-size: 0.85rem; color: var(--text-body);">Stay tuned for agenda updates and speaker announcements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    @include('partials.voter.scripts')
</body>

</html>
