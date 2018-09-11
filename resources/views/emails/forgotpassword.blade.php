Hi <strong>{{ $name }}</strong>,
<br><br>
We have received a request to reset your password, If you didn't make the request,<br>
just ignore this email. Otherwise, you can reset your password using this link : <br><br><br><br>
<a style="background-color:#0577cb; text-decoration:none; font-size:1.1em; font-weight:700; color:#ffffff; text-align:center; padding:1em 2em" href={{ URL::to('http://maritimax.com/reset/password?token=' . $token) }}> Click here to Reset Password</a>
<br><br>
<br><br>
Regards,<br>
Maritimax Team


