<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$num1 = $_POST["num1"]??NULL;
$num2 = $_POST["num2"]??NULL;
$num3 = $_POST["num3"]??NULL;
$num4 = $_POST["num4"]??NULL;
$num5 = $_POST["num5"]??NULL;

//pattern
$pattern1 = "#^[A-Z]{5}$#";
$pattern2 = "#^([A-Z]{2})([1-9])([A-Z]{2})$#";
$pattern3 = "#^([1-9])([A-Z]{2})([1-9])([A-Z])$#";
$pattern4 = "#^([A-Z])([1-9])([A-Z]{2})([1-9])$#";
$pattern5 = "#^([A-Z])([1-9]{2)([A-Z])([1-8])$#";

//Validate the keys
$is_num1_valid = preg_match($pattern1,$num1);
$is_num2_valid = preg_match($pattern2,$num2);
$is_num3_valid = preg_match($pattern3,$num3);
$is_num4_valid = preg_match($pattern4,$num4);
$is_num5_valid = preg_match($pattern5,$num5);
############ REGEX STARTS HERE ##########
$error = NULL;
$succes = NULL;
if (isset($_POST["submit"])) {
    if ($is_num1_valid && $is_num2_valid && $is_num3_valid && $is_num4_valid && $is_num5_valid) {
        $succes = "<span class='success'>YEAH, IT IS VALID</span><br>";
    }else {
        $error = "<span class='error'>SORRY, IT IS NOT VALID</span>";
        
    }
        
}
########### REGEX ENDS HERE ############
?>
<div class='cover'>
    <h2>Windows product key</h2><hr>
    <h4>It looks similar to this: XXXXX-XXXXX-XXXXX-XXXXX-XXXXX</h4>
    <form action="regex.php" method="POST">
    <input type="text" name="num1" autofocus>
    <input type="text" name="num2" autofocus>
    <input type="text" name="num3" autofocus>
    <input type="text" name="num4" autofocus>
    <input type="text" name="num5" autofocus><br>
    <button type='reset'>Back</button>
    <button type='submit' name='submit'>Next</button>
    <div class="fine"><?=$succes;?></div>
    <div class='err'><?=$error;?></div><br>
    
    </form>
    </div>
<style>
* {
    box-sizing:border-box;
    margin:0;
    padding:0;
}
.error {
    margin-top:20px;
    font-size:20px;
    width:100%;
    height:30px;
    color: white;
    background-color:red;
}
.fine {
    margin:20px 0 20px 100px;
    display:inline;
    background-color:green;
    color: white;
    font-size:30px;

}
.err {
    width:100%;
    margin:20px 0 20px 100px;
    display:inline;
    font-size:30px;
    text-align:center;
}
.succes {
    font-size:20px;
    width:100%;
    height:30px;
    color: white;
    background-color:green;
}
button {
    margin-top:10px;
    padding:5px 10px 5px 10px;
}
h2, h4 {
    color:lightblue;
}
h2 {
    text-align:center;
    margin-bottom:28px;
}
body {
    background-color:black;
}
.cover {
    background-color:grey;
    margin:40vh;
    margin-top: 30vh;
    border:2px solid yellow;
    border-radius:10px;
    padding: 100px 0 100px 0;
    padding-left:10px;
    
}
input{
    padding-top:5px;
    
}
</style>
</body>
</html>