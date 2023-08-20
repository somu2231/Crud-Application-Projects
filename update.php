<?php
include 'connect.php';

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE `crud` 
        SET id=$id,
        name ='$name',
        email='$email',
        mobile='$mobile',
        password='$password'
         WHERE id=$id";

$sql="INSERT INTO 'crud'.'crud' (`name`, `email`, `mobile`, `password`,) VALUES ('$name', '$email', '$mobile', '$password',);";
echo $sql;
    if($sql){
        echo "updated successsfully "; 
       header('location:display.php');

    }else{
        die(mysqli_error($connection));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
     <div class="container my-5">
     <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocpmplete="off">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password">
</div>
 
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
    </div>
   
  </body>
</html> 