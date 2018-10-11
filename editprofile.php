<?php
include 'index.php';
session_start();
if (isset($_POST['name']) && isset($_POST['bio'])) {
  $name = $_POST['name'];
  $bio = $_POST['bio'];
  $uname = $_SESSION['uname'];
  // echo "Bio is".$bio;
  $query = "UPDATE user_details SET name='$name', bio='$bio' where username='$uname'";
  if(!mysqli_query($con,$query)){
  echo $_SESSION['errmsg'] = '1';
  }
  else {
    $_SESSION['msg'] = '1';

      echo "<script language='javascript'>";
      echo "alert('Your changes have been saved')";
      echo "</script>";

    header("location:profile.php");
  }
}
?>
