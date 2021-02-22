<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    
</head>
<body>
    <form>
        <input type="text" name="num-1" placeholder="number 1">
        <input type="text" name="num-2" placeholder="number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button name="submit" type="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is:</p>
<?php
$a = $_GET['submit'];
 if (isset($a)) {
     $result1 = $_GET['num-1'];
     $result2 = $_GET['num-2'];
     $operator = $_GET['operator'];
     switch ($operator) {
         case 'None':
             echo "you need to select a method";
             break;
             case 'Add':
             echo $result1 + $result2;
             break;
             case 'Multiply':
             echo  $result1 * $result2;
             break;
             case 'Divide':
             echo  $result1 / $result2;
             break;
             case 'Subtract':
             echo  $result1 - $result2;
             break;
         
         default:
              
             echo "";
     }
 }
?>
<style>
button {
    margin-top:10px;
    background-color:red;
    border-radius:5px;
    align-items:center;
    justify-content:center;
    color:#fff;
}
select {
    padding:2px;
}
p {
    background-color:blue;
    font-size:20px;
    box-sizing:border-box;
}
</style>
</body>
</html>