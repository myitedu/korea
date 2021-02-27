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
$keyword = $_GET['keyword']??'Ipsum';

$comments = file_get_contents("comments");

$find_pattern = "#{$keyword}#i";



$replace_pattern = "<span class='bad_word'>*** $0 ***</span>";

$result = preg_replace($find_pattern,$replace_pattern,$comments);
?>

<p>
<form>
    Search: <input value="<?=$keyword;?>" name="keyword" type="text" placeholder="Your keywrod">
    <button type="submit">GO</button>
</form>
</p>
<p>
    <?=$result;?>
</p>

<style>
    .bad_word{
        background-color: yellow;
        color: red;
        padding:3px;
        font-weight: bold;
    }
</style>


</body>
</html>