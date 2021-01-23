<?php
session_start();
$id = $_SESSION['userid'];
 if (isset($_POST['pimg-upload'])) {
   require 'dbh.inc.php';


   $file = $_FILES['pimg'];
   $fileName = $file['name'];
   $fileSize = $file['size'];
   $fileTmp = $file['tmp_name'];
   $fileError = $file['error'];
   $status = 1;

   $fileExt = explode(".", $fileName);
   $fileActExt = strtolower(end($fileExt));


   $allowed = array("jpg", "jpeg", "png");
   if (!in_array($fileActExt, $allowed)) {
     header("Location: profile.php?error=wrongfiletype=".$fileActExt);
     exit();
   }
   elseif ($fileError !== 0) {
     header("Location: profile.php?error=".$fileError);
     exit();
   }
   elseif ($fileSize > 5000000) {
     header("Location: profile.php?error=filesize");
     exit();
   }
   else {
     $sql = "UPDATE users SET status =? WHERE idusers =?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("Location: profile.php?error=sqlerror");
       exit();
     } else {
     mysqli_stmt_bind_param($stmt, ii, $status, $id);
     mysqli_stmt_execute($stmt);
     $newFileName = "profileimg".$id.".".$fileActExt;
     $fileDestination = 'uploads/'.$newFileName;
     move_uploaded_file($fileTmp, $fileDestination);
     header("Location: profile.php");
     exit();
    }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);
 }
else {
  header("Location: profile.php");
  exit();
}
