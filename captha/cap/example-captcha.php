<html>
  <body>
    <form action="" method="post">
<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lcj99kSAAAAAE00IvFcFFy_91QFxaDNZAKgk80M";
$privatekey = "6Lcj99kSAAAAAKyQKPklm3LVDUUS7sM32yLFlxvu";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?

echo recaptcha_get_html($publickey, $error);
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
                echo "<span class="Error">Incorrecto</span>";
        }
}
?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
