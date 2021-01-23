<?php

$id = $_SESSION['idusers'];

if (isset($_POST['pimg-delete'])) {
   require 'dbh.inc.php';
   $filepath = getcwd().'uploads/profileimg'.$id.'.jpg';
   $status = 0;
   chmod($filepath, 0777);
   if (!unlink($filepath)) {
     header("Location: profile.php?error=cannotdelete");
     exit();
   } else {
     $sql = "UPDATE users SET status =? WHERE idusers =?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("Location: profile.php?error=sqlerror");
       exit();
     } else {
     mysqli_stmt_bind_param($stmt, ii, $status, $id);
     mysqli_stmt_execute($stmt);
     header("Location: profile.php?deletesuccess");
     exit();
   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);
 }

} else {
  header("Location: profile.php");
  exit();
}
