
<?php 

if(isset($_POST['submit'])){

    $drop=$_POST['drop'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    

    switch($drop){

        case "add":
            $num3=$num1+$num2;
            break;
        case "sub":
            $num3=$num1-$num2;
            break;  

        case "mul":
            $num3=$num1*$num2;
            break;
        case "div":
            $num3=$num1/$num2;
            break;
        default:
           $num3="Please select operation ";
    }



}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatpr</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>


<div class="cal">
    <h3 style="text-align:center;margin-top:50px;color:white">PHP_CALCULATOR</h3>
    <form action="calculator.php" method="POST">

        <input type="text" name="num1" placeholder="Enter first Number" value="<?php echo @$num1?>" required>
        <input type="text" name="num2" placeholder="Enter Second Number"  value="<?php echo @$num2?>" required>
        <select name="drop">
            <option>Please select</option>
            <option value="add">ADD</option>
            <option value="sub">SUB</option>
            <option value="mul">MUL</option>
            <option value="div">DIV</option>
        </select> <br>
        <input type="submit" name="submit">

        <h5 style="margin-top:30px;font-size:18px;">YOUR ANSWER: <br> <br><span style="color:white;font: size 23px;"><?php echo @$num3?></span></h5>
    </form>
    
</div>
    



</body>
</html>