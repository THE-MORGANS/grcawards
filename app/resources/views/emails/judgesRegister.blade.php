<div width="100%" style="margin:0;padding:0!important;background-color:#f5f6fa">
    <center style="width:100%;background-color:#f5f6fa">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tbody><tr>
                <td style="padding:30px 0">
                    <table style="width:100%;max-width:620px;margin:0 auto">
            <tbody>
            <tr>
                <td style="text-align:center;padding-bottom:15px">
                    <img style="max-height:50px;width:auto" src="https://grcfincrimeawards.com/assets/logo.png" alt="GRC awards" class="CToWUd">
                </td>
            </tr>
            </tbody>
        </table>
                        <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff">
            <tbody>
                    <tr>
                <td style="padding:10px 30px 10px">
                    Dear Mr./Mrs.  {{ $data['name'] }},
                </td>
            </tr>
                    
            <tr>
                <td style="padding:0 30px">
                    <p>We are honoured to have you as one of our judges on GRC Financial Crime Awards 2023 
                        <br> Please see below login details to have access to our judges voting portal.
                    </p>
    <table width="100%">
    <tbody><tr>
    <td width="150">Name</td>
    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
    <td width="150">Email</td>
    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td>{{ $data['email']}} </td>
    </tr>
    <tr>
    <td width="150">Password</td>
    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td> {{ $data['password'] }}</td>
    </tr>
    </tbody>
</table>
<a href="https://grcfincrimeawards.com/admin/login"> Click Here to Login </a>
    </center>
</div>