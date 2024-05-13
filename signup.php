<?php
require_once('classes/database.php');
$con = new database();
 
if(isset($_POST['Signup'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $confirm = $_POST['pass2'];
  $firstname = $_POST ['Fname'];
  $lastname = $_POST ['Lname'];
  $birthday = $_POST ['birthday'];
  $sex = $_POST ['sex'];


 
  if($password == $confirm){
    if($con->signup($username, $password, $birthday, $sex, $firstname, $lastname)){
        header('location:login.php');
} else {
    echo 'Username already exist';
}
} else {
    echo 'Password do not match';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="container-fluid login-container rounded shadow" >
  <h2 class="text-center mb-4">Sign Up</h2>
  <form method="post">
    <div class="mb-3">
      <label for="first Name" class="form-label">First Name:</label>
      <input type="text" class="form-control" name="Fname" placeholder="Enter your First Name" >
    </div>
    <div class="mb-3">
      <label for="last Name" class="form-label">Last Name:</label>
      <input type="text" class="form-control" name="Lname" placeholder="Enter your Last Name" >
    </div>
    <div class="container">
      <div class="mb-3">
      <label for="birthday" class="form-label">Birthday:</label>
      <input type="date" class="form-control" name="birthday">
    </div>
    <div class="mb-3">
      <label for="sex" class="form-label">Sex:</label>
      <select class="form-select" name="sex">
        <option selected disabled>Select Sex</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="user" placeholder="Enter your name" >
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="username">Confirm Password:</label>
      <input type="text" class="form-control" name="pass2" placeholder="Re-enter password" >    
      <div class="container">
      <div class="row gx-1">
        <div class="col"><input type="submit" class="btn btn-danger btn-block" name="Signup"></input></div>
      </div>
    </div>
 
  </form>
</div>
 
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>