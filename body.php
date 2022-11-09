
<?php

$conn=mysqli_connect("localhost","root","","crud");

?>



<?php

// insert part
if(isset($_POST['submit'])){

    extract($_POST);



    $sql="INSERT INTO `user`(`id`, `name`, `email`, `city`, `mob`) VALUES (NULL,'$name','$email','$city','$mob')";

    $res=mysqli_query($conn,$sql);




}

//  delete part

if(isset($_GET['sid1'])){

  $id=$_GET['sid1'];
  $sql="DELETE FROM `user` WHERE id=$id";
  $res=mysqli_query($conn,$sql);
  if($res){
    echo"<script>alert('Deleted successfully');window.location.href='index.php'</script>";

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
      <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
    </div>
    <div class="col">
      <input type="email" class="form-control" placeholder="Enter your emailid" name="email" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter your city" name="city" required>
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Enter your Mobileno" name="mob" required>
    </div>
    
   
    
    <div class="col">
      <input type="submit"  name="submit"  class="btn btn-primary" placeholder="Enter your adhaarno">
    </div>
  </div>
</form>
  
</div>



<!-- view part -->
<table class='table table-striped table-success container'>
    <tr >
      <th scope='col'>ID</th>
      <th scope='col'>NAME</th>
      <th scope='col'>EMAILID</th>
      <th scope='col'>CITY</th>
      <th scope='col'>MOBILENO</th>
    </tr>
  
  <?php


$sql ="SELECT * FROM `user`";
$result = mysqli_query($conn,$sql);

while($row = $result->fetch_assoc()) {

  $id=$row['id'];

  echo"
  <tr>
  <th scope='row'>{$row['id']}</th>
  <td>{$row['name']}</td>
  <td>{$row['email']}</td>
  <td>{$row['city']}</td>
  <td>{$row['mob']}</td>
  <td><a href='update.php?sid2=$id'>EDIT</a></td>
  <td><a href='?sid1=$id'>DELETE</a></td>
</tr>";

}

  ?>


</table>

<!-- viewpart -->









    
</body>
</html>






