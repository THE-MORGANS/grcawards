<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #d4af37; }
        .logo { max-width: 150px; margin-bottom: 15px; }
        .content { padding: 30px 20px; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #777; background-color: #f9f9f9; border-radius: 0 0 10px 10px; }
        .ticket-info { background-color: #f0f4f8; border-left: 5px solid #d4af37; padding: 20px; margin: 25px 0; border-radius: 5px; }
        .ticket-number { font-size: 24px; font-weight: bold; color: #1a1a1a; letter-spacing: 2px; }
        .details-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .details-table td { padding: 10px 0; border-bottom: 1px solid #eee; font-size: 14px; }
        .label { font-weight: bold; color: #555; width: 40%; }
        .value { color: #1a1a1a; font-weight: 600; }
        .button { display: inline-block; padding: 15px 30px; background-color: #d4af37; color: #ffffff !important; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        .important-note { font-size: 13px; color: #d9534f; margin-top: 20px; font-style: italic; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="color: #1a1a1a; margin: 0;">Lusaka Summit 2026</h2>
            <p style="color: #d4af37; margin: 5px 0; font-weight: 600;">Governance, Risk, Compliance & Financial Crime Prevention</p>
        </div>
        
        <div class="content">
            <p>Dear <strong>{{ $registration->name }}</strong>,</p>
            
            <p>Thank you for registering for the <strong>Africa Governance, Risk, Compliance & Financial Crime Prevention Conference</strong> taking place in Lusaka, Zambia from March 15-17, 2026.</p>
            
            <p>We are pleased to confirm that your payment has been successfully processed. Below are your registration details and event ticket information.</p>
            
            <div class="ticket-info">
                <span style="font-size: 12px; color: #777; text-transform: uppercase;">Your Registration Ticket Number</span><br>
                <span class="ticket-number">{{ $registration->ticket_number }}</span>
            </div>
            
            <table class="details-table">
                <tr>
                    <td class="label">Payer ID</td>
                    <td class="value">{{ $registration->registration_id }}</td>
                </tr>
                <tr>
                    <td class="label">Attendance Type</td>
                    <td class="value">{{ $registration->attendance_option }}</td>
                </tr>
                <tr>
                    <td class="label">Total Delegates</td>
                    <td class="value">{{ $registration->delegate_count }}</td>
                </tr>
                <tr>
                    <td class="label">Amount Paid</td>
                    <td class="value">{{ strtoupper($registration->currency) }} {{ number_format($registration->amount, 2) }}</td>
                </tr>
                <tr>
                    <td class="label">Venue</td>
                    <td class="value">Neelkanth Sarovar Premiere, Lusaka</td>
                </tr>
                <tr>
                    <td class="label">Dates</td>
                    <td class="value">March 15 - 17, 2026</td>
                </tr>
            </table>
            
            <p style="margin-top: 30px;">Please present this ticket number at the registration desk upon arrival at the venue to collect your conference materials and badge.</p>
            
            <center>
                <a href="{{ route('landing.index') }}" class="button">Visit Conference Website</a>
            </center>

            <p class="important-note">
                * Note: Accommodation and travel are not included in the registration fee.
            </p>
        </div>
        
        <div class="footer">
            <p>&copy; 2026 GRC & FinCrime Prevention Awards & Summit. All rights reserved.</p>
            <p>For inquiries, please contact us at <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a></p>
        </div>
    </div>
</body>
</html>
