<?php
require 'header.php';
?>
<div class="container">
<br>
<br>
</div>
<div class="container bg-light" style="margin: auto;">
  <div class="row justify-content-center align-self-center">
 <h1 style="text-align: center;"> Signup </h1>
</div>
</div>
<div class="container bg-light" style="margin: auto;">
  <div class="row justify-content-center align-self-center">
 <?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == "emptyfields") {
    echo "<p>Fields Empty!<p>";
  }
  elseif ($_GET['error'] == "invalidmail") {
    echo "<p>Invalid Email!<p>";
  }

elseif ($_GET['error'] == "invaliduid") {
  echo "<p>Invalid Username!<p>";
}

elseif ($_GET['error'] == "passwordcheck") {
  echo "<p>Passwords do not match!<p>";
}

elseif ($_GET['error'] == "usertaken") {
  echo "<p>Username Taken!<p>";
}
}
elseif (isset($_GET['signup'])) {
  if($_GET['signup'] == "success") {
    echo "<p>Signup successful!<p>";
}
}
  ?>
 <form action="signup.inc.php" method="post">
   <div class="form-group">
   <input type="text" name="mail" placeholder="Email..."></input>
</div>
   <div class="form-group">
   <input type="text" name="uid" placeholder="Username..."></input>
</div>
   <div class="form-group">
   <input type="password" name="pwd" placeholder="Password..."></input>
</div>
   <div class="form-group">
   <input type="password" name="rpwd" placeholder="Repeat Password..."></input>
</div>
<div class="row justify-content-center align-self-center">
  <button class="btn btn-primary" type="submit" name="signup-submit">Submit</button>
 </form>
</div>
</div>
</div>
<?php
require 'footer.php';
 ?>
