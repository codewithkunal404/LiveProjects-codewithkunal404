
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
    
    <style>
        
        
        *{
    margin: 0%;
    padding: 0%;
    font-family: 'Montserrat', sans-serif;
    


}


.cal{
    width:600px;
    height:600px;
    background: linear-gradient(#4839B0,#E50A86);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    box-shadow: 20px 6px 0px 0px rgb(128 128 128 / 26%);


}
form{
   position: absolute;
   left: 50%;
   top: 45%;
   transform: translate(-50%,-50%);

}

input{
    width:300px;
    height:40px;
    margin-top: 20px;
    border-radius: 40px;
    padding: 0px 30px;
    font-size: 18px;
    color: black;
    border: 2px solid rgba(0, 0, 0, 0.656);
    outline: none;
    transition: 0.3s;



}
input:hover{
    width:260px;
    transition: 0.3s;

}
input[type="submit"]{
    background-color:#4839B0;
    width:200px;
    height:40px;
    color: white;
    font-size: 20px;
    border: none;


}
input[type="submit"]:active{
    background-color:#4839B0;
    width:180px;
    height:40px;
    color: white;
    font-size: 20px;
    border: none;


}
select{
    width:280px;
    height:40px;
    margin-top: 20px;
    border-radius: 40px;
    padding: 0px 30px;
    font-size: 18px;
    color: black;
    border: none;
}
        
    </style>
    
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
