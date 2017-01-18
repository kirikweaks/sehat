<?php

/* By Qassim Hassan, http://wp-time.com/send-email-via-gmail-api-using-php/ */

$scope = "https://mail.google.com/"; // Do not change it!

$redirect_uri = "http://localhost/cobagmail/sign-in.php"; // Enter your redirect_uri

$client_id = "957992773798-o4ngtthci0bcatm7a3m1suarp7vqopnl.apps.googleusercontent.com"; // Enter your client_id

$client_secret = "tEMaoQ_x4FMgZrIID3EHaUJV"; // Enter your client_secret

$login_url = "https://accounts.google.com/o/oauth2/v2/auth?scope=$scope&response_type=code&redirect_uri=$redirect_uri&client_id=$client_id"; // Do not change it!

?>