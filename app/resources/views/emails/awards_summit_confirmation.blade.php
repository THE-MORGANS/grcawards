<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #C5881E; }
        .content { padding: 30px 20px; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #777; background-color: #f9f9f9; border-radius: 0 0 10px 10px; }
        .ticket-info { background-color: #f0f4f8; border-left: 5px solid #C5881E; padding: 20px; margin: 25px 0; border-radius: 5px; }
        .ticket-number { font-size: 24px; font-weight: bold; color: #1a1a1a; letter-spacing: 2px; }
        .details-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .details-table td { padding: 10px 0; border-bottom: 1px solid #eee; font-size: 14px; }
        .label { font-weight: bold; color: #555; width: 40%; }
        .value { color: #1a1a1a; font-weight: 600; }
        .button { display: inline-block; padding: 15px 30px; background-color: #C5881E; color: #ffffff !important; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        .important-note { font-size: 13px; color: #A8511E; margin-top: 20px; font-style: italic; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="color: #1a1a1a; margin: 0;">GRC & Financial Crime Prevention Awards & Summit 2026</h2>
            <p style="color: #C5881E; margin: 5px 0; font-weight: 600;">Africa Edition — Nairobi, Kenya</p>
        </div>

        <div class="content">
            <p>Dear <strong>{{ $registration->name }}</strong>,</p>

            <p>Thank you for reserving your <strong>{{ $registration->ticket_name }}</strong> for the <strong>Africa Edition of the GRC & Financial Crime Prevention Awards & Summit</strong>, taking place at the Marriott Hotel, Nairobi on 20 November 2026.</p>

            <p>We are pleased to confirm that your payment has been successfully processed. Below are your reservation details and ticket information.</p>

            <div class="ticket-info">
                <span style="font-size: 12px; color: #777; text-transform: uppercase;">Your Confirmation Number</span><br>
                <span class="ticket-number">{{ $registration->ticket_number }}</span>
            </div>

            <table class="details-table">
                <tr>
                    <td class="label">Reservation ID</td>
                    <td class="value">{{ $registration->registration_id }}</td>
                </tr>
                <tr>
                    <td class="label">Pass Type</td>
                    <td class="value">{{ $registration->ticket_name }}</td>
                </tr>
                <tr>
                    <td class="label">Number of Tickets</td>
                    <td class="value">{{ $registration->quantity }}</td>
                </tr>
                <tr>
                    <td class="label">Amount Paid</td>
                    <td class="value">{{ strtoupper($registration->currency) }} {{ number_format($registration->amount, 2) }}</td>
                </tr>
                <tr>
                    <td class="label">Venue</td>
                    <td class="value">Marriott Hotel, Nairobi</td>
                </tr>
                <tr>
                    <td class="label">Date</td>
                    <td class="value">20 November 2026</td>
                </tr>
            </table>

            <p style="margin-top: 30px;">Please present this confirmation number at the registration desk upon arrival at the venue to collect your delegate pack and badge.</p>

            <center>
                <a href="{{ route('landing.index') }}" class="button">Visit Summit Website</a>
            </center>

            <p class="important-note">
                * Note: Accommodation and travel are not included in the ticket price.
            </p>
        </div>

        <div class="footer">
            <p>&copy; 2026 GRC & FinCrime Prevention Awards & Summit. All rights reserved.</p>
            <p>For inquiries, please contact us at <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a></p>
        </div>
    </div>
</body>
</html>
