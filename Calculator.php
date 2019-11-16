<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- input form for user --->
<form action="site.php" method = "post">
First Num: <input type="number" name="nu m1" step="0.0001"><br><br>
OPERATOR: <input type="text" name="operator"><br><br>
Second Num: <input type="number" name="num2" step="0.0001"><br><br>
<input type="submit">
</form>

 <?php 

// variables for storing user inputs
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
 
// condition check for user inputs
if($operator == "+"){
    echo $num1 + $num2;
}elseif($operator =="-"){
    echo $num1 - $num2;
}
if($operator == "*"){
    echo $num1 * $num2;
}elseif($operator =="/"){
    echo $num1 / $num2;
}else{
    echo "Invalid Operator";
}
 ?>


</body>
</html>
