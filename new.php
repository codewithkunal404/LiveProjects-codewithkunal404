





<?php 

$num1=rand(1,30);
$num2=rand(30,1);
$add=$num1+$num2;


if(isset($_POST['test'])){
$res=$_POST['res'];
$hres=$_POST['hres'];

    if($hres==$res){
        $ans=" <i class='fa-solid fa-check'></i>  Right answer ";
        $color="green";
    }
    
    elseif(empty($_POST['res'])){

        $ans="please fill captcha !!";
        $color="red";

    
            
    }
    else{
        $ans="  <i class='fa-solid fa-xmark'></i>  Wrong answer !!";
        $color="red";
        
        
    }
    


}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
    <script src="https://kit.fontawesome.com/a8ca07b5eb.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="box" style="width:400px;height:400px;position:absolute;transform:translate(-50%,-50%);left:50%;top:50%;background-color:white;border:2px solid black;box-sizing:border-box; text-align:center;">


<h1 style="color:<?php echo @$color;?>;font-family:Arial, Helvetica, sans-serif;">Captcha</h1>
<br>

<!-- canvas -->
<canvas id="myCanvas" width="160" height="60" style="border:1px solid #d3d3d3;padding:20px;background:url(https://codingnepalweb.com/demos/custom-captcha-in-javascript/captcha-bg.png)"></canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.textAlign = "center";
ctx.textAlign = "center";
ctx.font = "35px Arial";
ctx.fillText("<?php echo $num1."+".$num2." = ?";?>",c.width/2, c.height/2);
</script>

<!-- canvas -->

<!-- form -->

<form action="new.php" method="POST">
<br>
<input type="text" name="res" style="width:150px;height:50px;border:none;border:2px solid black;box-sizing:border-box;font-size:20px;padding:0px 20px;" value="<?php echo @$res;?>">  <button style=" width:60px;height:60px;font-size:2em;position:absolute;right:20px;bottom:220px;" onclick="window.location.reload();"><img src="captcha.png"  width="40px"></button>
<input type="hidden" name="hres" value="<?php echo $add;?>"> <br>
<br>
<input type="submit" name="test" style="padding:10px 20px;font-size:20px;">
</form>
<!-- from -->

<!-- message -->
<h4 style="color:<?php echo @$color;?>;"><?php echo @$ans;?></h4>

</div>

</div>

    
</body>
</html>