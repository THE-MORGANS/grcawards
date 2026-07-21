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

        body{background:var(--off-white);color:var(--text);font-family:var(--font-body);line-height:1.5}

        .success-page{max-width:640px;margin:40px auto 40px;padding:0 20px;text-align:center}

        .success-card{
            background:var(--white);border:1px solid var(--rule);border-radius:4px;
            padding:36px 32px;
        }

        .success-icon{
            width:64px;height:64px;background:var(--parchment);color:var(--gold);
            border-radius:50%;display:flex;align-items:center;justify-content:center;
            font-size:32px;margin:0 auto 16px;
        }

        .success-kicker{font-family:var(--font-mono);font-size:11px;letter-spacing:0.2em;color:var(--gold);text-transform:uppercase;margin-bottom:6px}
        .success-title{font-family:var(--font-display);font-size:28px;font-weight:700;color:var(--ink);margin-bottom:10px}
        .success-message{color:var(--mid);font-size:14px;line-height:1.6;margin-bottom:20px}

        .registration-details{background:var(--parchment);border-radius:4px;padding:18px 20px;margin-bottom:20px;text-align:left}
        .detail-row{display:flex;justify-content:space-between;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid var(--rule)}
        .detail-row:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
        .detail-label{font-family:var(--font-mono);font-size:11px;letter-spacing:0.05em;text-transform:uppercase;color:var(--mid)}
        .detail-value{font-weight:600;color:var(--ink);font-size:13px}

        .ticket-box{background:var(--ink);color:var(--white);padding:20px;border-radius:4px;margin:20px 0}
        .ticket-label{font-family:var(--font-mono);font-size:10px;text-transform:uppercase;letter-spacing:0.12em;opacity:0.6;margin-bottom:6px}
        .ticket-number{font-family:var(--font-display);font-size:24px;font-weight:700;letter-spacing:1px;color:var(--gold)}
        .ticket-qr-wrap{margin-top:14px;background:#ffffff;padding:10px;border-radius:6px;display:inline-block}

        .seats-box{background:var(--parchment);border-radius:4px;padding:14px;margin-bottom:20px;text-align:center}

        .action-buttons{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
        .btn-primary{background:var(--ink);color:var(--white);padding:12px 24px;border-radius:3px;font-family:var(--font-mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;text-decoration:none;font-weight:600;transition:all .2s}
        .btn-primary:hover{background:var(--terracotta);color:var(--white)}
        .btn-secondary{background:var(--off-white);border:1px solid var(--rule);color:var(--ink);padding:12px 24px;border-radius:3px;font-family:var(--font-mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;text-decoration:none;font-weight:600;transition:all .2s}
        .btn-secondary:hover{border-color:var(--gold);color:var(--gold)}

        @media print {
            @page{margin:8mm 12mm;size:A4 portrait}
            html, body{background:#fff !important;margin:0 !important;padding:0 !important;height:auto !important;font-size:12px !important;-webkit-print-color-adjust:exact !important;print-color-adjust:exact !important}
            body > *:not(.success-page),
            .success-page > *:not(.success-card),
            .action-buttons{display:none !important}
            .success-page{margin:0 !important;padding:0 !important;width:100% !important;max-width:100% !important}
            .success-card{border:1px solid #ddd !important;padding:20px 24px !important;width:100% !important;margin:0 !important;box-shadow:none !important}
            
            .success-icon{width:44px !important;height:44px !important;font-size:24px !important;margin:0 auto 8px !important}
            .success-kicker{font-size:9px !important;margin-bottom:2px !important}
            .success-title{font-size:20px !important;margin-bottom:4px !important}
            .success-message{font-size:12px !important;margin-bottom:12px !important;line-height:1.3 !important}
            
            .ticket-box{
                padding:12px 18px !important;margin:10px 0 !important;
                display:flex !important;align-items:center !important;justify-content:space-between !important;
                text-align:left !important;
            }
            .ticket-box-text{flex:1}
            .ticket-number{font-size:20px !important}
            .ticket-qr-wrap{margin-top:0 !important;padding:6px !important;border-radius:4px !important}
            .ticket-qr-wrap img{width:90px !important;height:90px !important}
            .ticket-qr-label{font-size:9px !important;margin-top:3px !important}

            .seats-box{padding:10px 14px !important;margin-bottom:12px !important}
            .seats-box-title{font-size:10px !important;margin-bottom:6px !important}
            .seat-badge{font-size:12px !important;padding:6px 12px !important}

            .registration-details{padding:10px 14px !important;margin-bottom:10px !important}
            .detail-row{margin-bottom:5px !important;padding-bottom:5px !important}
            .detail-label, .detail-value{font-size:11px !important}
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
                <div class="ticket-box-text">
                    <div class="ticket-label">Your Confirmation Number</div>
                    <div class="ticket-number">{{ $registration->registration_id }}</div>
                    <div style="font-size:11px;margin-top:4px;opacity:0.75">
                        Ticket ID: {{ $registration->ticket_number }}
                    </div>
                </div>
                
                <div class="ticket-qr-wrap">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=130x130&data={{ urlencode('Reservation ID: ' . $registration->registration_id . "\nName: " . $registration->name) }}" alt="Reservation Barcode" width="130" height="130" style="display:block;margin:0 auto">
                    <div class="ticket-qr-label" style="font-family:var(--font-mono);font-size:10px;color:#1a1a1a;margin-top:6px;font-weight:600">
                        {{ $registration->name }} · {{ $registration->registration_id }}
                    </div>
                </div>
            </div>

            @if($registration->seat_numbers && count($registration->seat_numbers) > 0)
            <div class="seats-box">
                <div class="seats-box-title" style="font-family:var(--font-mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase;color:var(--mid);margin-bottom:10px">
                    Your Assigned Seat{{ count($registration->seat_numbers) > 1 ? 's' : '' }}
                </div>
                <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center">
                    @foreach($registration->seat_numbers as $seat)
                    <span class="seat-badge" style="display:inline-block;background:var(--ink);color:var(--gold);font-family:var(--font-mono);font-size:13px;font-weight:700;letter-spacing:1px;padding:8px 14px;border-radius:4px">
                        {{ $seat }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endif

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
