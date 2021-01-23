<?php
 session_start();
 ?>
<!doctype html>
<html>
<title>Sample User Authentication</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport-width" content="width=device-width initial-scale:1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php
if (isset($_SESSION['userid'])) {
  echo '<div>
   <div class="navbar navbar-expand-md bg-light">
     <ul class="navbar-nav">
       <a class="nav-link" href="index.php">
       <li class="nav-item">Home
       </li></a>
       <a class="nav-link" href="profile.php">
       <li class="nav-item">Profile
       </li></a>
       <a class="nav-link" href="#">
       <li class="nav-item">Contact
       </li>
     </a>
     </ul>
     <div class="navbar-nav ml-auto">';
}
else {
 echo '<div>
 <div class="navbar navbar-expand-md bg-light">
   <ul class="navbar-nav">
     <a class="nav-link" href="index.php">
     <li class="nav-item">Home
     </li></a>
     <a class="nav-link" href="#">
     <li class="nav-item">About
     </li></a>
     <a class="nav-link" href="#">
     <li class="nav-item">Contact
     </li>
   </a>
   </ul>
   <div class="navbar-nav ml-auto">';
 }
?>
<?php
if (isset($_SESSION['userid'])) {
echo "<form class='form-inline ml-auto' action='logout.inc.php' method=post'>
 <button type='submit' name=logout-submit'>Logout</button>
</form>";
}
else {
echo " <form class='form-inline' action='login.inc.php' method='post'>
   <input class='mr-sm-2' type='text' name='mailuid' placeholder='Email/Username...'></input>
   <input class='mr-sm-2' type='password' name='pwd' placeholder='Password...'></input>
   <button class='mr-sm-2' type='submit' name='login-submit'>Sign In</button>
 </form>
 <a href='signup.php'>Signup
 </a>";
}
 ?>


   </div>
</div>
</div>
