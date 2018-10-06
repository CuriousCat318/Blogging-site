<?php
session_start();
if (isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
  $email = $_POST['email'];
  $uname = $_POST['uname'];
  $pw = $_POST['password'];
  $cpw = $_POST['cpassword'];
  $_SESSION['msg'] = 1;
  header("location:signup.html");
}
else{
  $_SESSION['errmsg'] = 0;
  header("location:signup.html");
}
?>
