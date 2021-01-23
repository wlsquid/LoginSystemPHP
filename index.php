<?php
require 'header.php';
?>
 <div class="container">
   <?php
if (isset($_SESSION['userid'])) {
  echo "<p> you are logged in</p>";
  echo $_SESSION['useruid'];
}
else {
  echo "<p>you are logged out</p>";
}
    ?>
 </div>
<?php
require 'footer.php';
 ?>
