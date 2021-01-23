<?php
 require 'header.php';
?>
<?php
//session_start();
if (!isset($_SESSION['userid'])) {
  header ('Location: index.php?error=notloggedin');
  exit();
}
else {
  $id = $_SESSION['userid'];
  echo "<div class='container' style='height:50px;'></div><div class= 'container'>
  <div class='row'>
  <div class='col-sm-4 bg-light text-center'>
  <img src= 'uploads/profileimg".$id.".jpg?".mt_rand()."' class='mr-3 mt-3 rounded-circle' style=' height:250px; width:250px; overflow:hidden;'>
  <br><br><button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#imgchange'>change profile picture</button>
  <br><br><div id='imgchange' class='collapse bg-secondary p-2'>
     <form  action='pimgupload.inc.php' method='post' enctype='multipart/form-data'>
      <br><input class='' type='file' name='pimg'>
        <br><br><button class='' type='submit' name='pimg-upload'>Upload</button>
     </form>
     <br>~or~<br>
     <form action='delpimg.inc.php' method='post'>
      <br><button class='' type='submit' name='pimg-delete'>Delete Profile Picture</button>
     </form>

  </div>
  <div>
  <br><br>".$_SESSION['useruid']."
  <div>
  </div>
  </div>
  <div>
  <br><br>tasks involved in
  </div>
  </div>
  </div>
  <div class ='col-sm-8'></div>
  </div>
  ";
}
 ?>


<?php
require 'footer.php';
?>
