<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//The format we are expecting the users to enter --> (123) 456-7890
$error_phone = null;
$error_email = null;
$phone = $_GET['phone']??NULL;
$email = $_GET['email']??NULL;

######## REGEX CODES STARTS HERE ###############
//Validate the phone number
$pattern = "#^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$#";
$is_phone_valid = preg_match($pattern,$phone, $matched);
//Validate the email address
$pattern = "#([a-zA-Z]){2,20}@(msn|hotmail|gmail)(\.ru|\.uz|\.kr)#";
$is_email_valid = preg_match($pattern,$email, $matched);
######## REGEX CODES ENDES HERE ################

if (!$is_phone_valid){
    $error_phone = " <span class='span_phone_error'>Your phone must be in (123) 456-7890 format</span><br>";
}

if (!$is_email_valid){
    $error_email = " <span class='span_phone_error'>Your email must match this format username@domain.com</span><br>";
}


?>
<div id="results">
<?php
echo "<pre>";
var_dump($matched);
echo "</pre>";
?>
</div>

<div id="form">
    <form>
        <p>
            Phone: <input value="<?=$phone;?>" type="text" name="phone" placeholder="(347) 576-4951">
            <?=$error_phone;?>
        </p>

        <p>
            Email: <input value="<?=$email;?>" type="text" name="email" placeholder="jondoe@mail.com">
            <?=$error_email;?>
        </p>

        <p>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </p>
    </form>
</div>



<style>
    .span_phone_error{
        padding:2px;
        background-color: red;
        color: yellow;
    }
    #results, #form{
        width: 80%;
        height: auto;
        background-color: lightgrey;
        border: 1px solid black;
        padding: 5px;
        margin: auto;
    }
</style>

</body>
</html>
