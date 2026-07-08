<!DOCTYPE html>
<html lang="en">
@section('title', 'Reservation Confirmed - GRC & Financial Crime Prevention Awards & Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        *,*::before,*::after{box-sizing:border-box}
        :root{
            --ink:#0B0E14;
            --parchment:#F8F2E6;
            --gold:#C5881E;
            --amber:#E8A83A;
            --terracotta:#A8511E;
            --off-white:#FDFBF6;
            --rule:#E0D3BC;
            --text:#2A2420;
            --mid:#6B5E52;
            --white:#FFFFFF;
            --font-display:'Cormorant Garamond',serif;
            --font-body:'Inter',sans-serif;
            --font-mono:'DM Mono',monospace;
        }

        body{background:var(--off-white);color:var(--text);font-family:var(--font-body);line-height:1.6}

        .success-page{max-width:640px;margin:70px auto 60px;padding:0 24px;text-align:center}

        .success-card{
            background:var(--white);border:1px solid var(--rule);border-radius:4px;
            padding:50px 40px;
        }

        .success-icon{
            width:88px;height:88px;background:var(--parchment);color:var(--gold);
            border-radius:50%;display:flex;align-items:center;justify-content:center;
            font-size:44px;margin:0 auto 26px;
        }

        .success-kicker{font-family:var(--font-mono);font-size:11px;letter-spacing:0.2em;color:var(--gold);text-transform:uppercase;margin-bottom:10px}
        .success-title{font-family:var(--font-display);font-size:32px;font-weight:700;color:var(--ink);margin-bottom:14px}
        .success-message{color:var(--mid);font-size:15px;line-height:1.7;margin-bottom:32px}

        .registration-details{background:var(--parchment);border-radius:4px;padding:24px;margin-bottom:30px;text-align:left}
        .detail-row{display:flex;justify-content:space-between;margin-bottom:12px;padding-bottom:12px;border-bottom:1px solid var(--rule)}
        .detail-row:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
        .detail-label{font-family:var(--font-mono);font-size:11px;letter-spacing:0.05em;text-transform:uppercase;color:var(--mid)}
        .detail-value{font-weight:600;color:var(--ink);font-size:14px}

        .ticket-box{background:var(--ink);color:var(--white);padding:22px;border-radius:4px;margin:28px 0}
        .ticket-label{font-family:var(--font-mono);font-size:10px;text-transform:uppercase;letter-spacing:0.12em;opacity:0.6;margin-bottom:8px}
        .ticket-number{font-family:var(--font-display);font-size:26px;font-weight:700;letter-spacing:1px;color:var(--gold)}

        .action-buttons{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
        .btn-primary{background:var(--ink);color:var(--white);padding:14px 28px;border-radius:3px;font-family:var(--font-mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;text-decoration:none;font-weight:600;transition:all .2s}
        .btn-primary:hover{background:var(--terracotta);color:var(--white)}
        .btn-secondary{background:var(--off-white);border:1px solid var(--rule);color:var(--ink);padding:14px 28px;border-radius:3px;font-family:var(--font-mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;text-decoration:none;font-weight:600;transition:all .2s}
        .btn-secondary:hover{border-color:var(--gold);color:var(--gold)}

        @media print {
            @page{margin:0;size:auto}
            body{background:#fff;margin:0;padding:0}
            body > *:not(.success-page),
            .success-page > *:not(.success-card),
            .action-buttons{display:none !important}
            .success-page{margin:0 !important;padding:40px !important;width:100% !important;max-width:100% !important}
            .success-card{border:1px solid #eee !important;padding:0 !important;width:100% !important;margin:0 !important}
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

            <div class="success-kicker">Africa Edition 2026 · Nairobi</div>
            <h1 class="success-title">Reservation Confirmed!</h1>
            <p class="success-message">
                Thank you, <strong>{{ $registration->name }}</strong>. Your <strong>{{ $registration->ticket_name }}</strong> for the GRC & Financial Crime Prevention Awards & Summit has been successfully reserved.
            </p>

            <div class="ticket-box">
                <div class="ticket-label">Your Confirmation Number</div>
                <div class="ticket-number">{{ $registration->registration_id }}</div>
                <div style="font-size:11px;margin-top:10px;opacity:0.75">
                    Ticket ID: {{ $registration->ticket_number }}
                </div>
            </div>

            <div class="registration-details">
                <div class="detail-row">
                    <span class="detail-label">Email Address</span>
                    <span class="detail-value">{{ $registration->email }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Pass Type</span>
                    <span class="detail-value">{{ $registration->ticket_name }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Number of Tickets</span>
                    <span class="detail-value">{{ $registration->quantity }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Amount Paid</span>
                    <span class="detail-value">{{ strtoupper($registration->currency) }} {{ number_format($registration->amount, 2) }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Venue</span>
                    <span class="detail-value">Marriott Hotel, Nairobi</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Date</span>
                    <span class="detail-value">20 November 2026</span>
                </div>
            </div>

            <div class="action-buttons">
                <a href="#" class="btn-primary" onclick="window.print()">Print Receipt</a>
                <a href="{{ route('landing.index') }}" class="btn-secondary">Return Home</a>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    @include('partials.voter.scripts')
</body>
</html>
