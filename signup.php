<?php
  include 'index.php';
  session_start();
if (isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
  $email = $_POST['email'];
  $uname = $_POST['uname'];
  $pw = $_POST['password'];
  $cpw = $_POST['cpassword'];

  if ($pw == $cpw) {
  $hash = password_hash($pw,PASSWORD_DEFAULT);
  }
  // else {
  //
  // }
  $query = "INSERT INTO user_details(email,username,password) VALUES ('$email','$uname','$hash')";
  if (!mysqli_query($con,$query)){
    echo mysqli_error($con);
  }
  else {

  $_SESSION['msg'] = 1;
  header("location:signup.html"); //move to login.html
  }

}

?>
