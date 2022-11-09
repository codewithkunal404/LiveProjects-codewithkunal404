
<?php

$conn=mysqli_connect("localhost","root","","crud");

?>



<?php



$id=$_GET['sid2'];

$sql ="SELECT * FROM `user` WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
extract($row);







if(isset($_POST['update'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $mob=$_POST['mob'];


$sql="UPDATE `user` SET `id`='$id',`name`='$name',`email`='$email',`city`='$city',`mob`='$mob' WHERE id=$id";
$res=mysqli_query($conn,$sql);

if($res){
  echo"
  <script>alert('updated successfully');window.location.href='index.php'</script>";

}




}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid bg-dark h3 p-2 text-center text-white">~Data Entry work~</div>

<div class="container mt-3 bg-dark p-3 d-flex justify-content-md-center ">

<form method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo $name;?>"  required>
    </div>
    <div class="col">
      <input type="email" class="form-control" placeholder="Enter your emailid" name="email" value="<?php echo $email;?>" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter your city" name="city" value="<?php echo $city;?>" required>
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Enter your Mobileno" name="mob" value="<?php echo $mob;?>" required>
    </div>
    
   
    
    <div class="col">
      <input type="submit"  name="update"  class="btn btn-primary" value="update" >
    </div>
  </div>
</form>
  
</div>
  
</body>
</html>
