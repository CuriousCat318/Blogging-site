<?php
session_start();
include 'index.php';
$uname = $_SESSION['uname']
?>
<html>
<head>
  <title> Edit Profile </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
#edit {
  padding:15px 25px 25px 25px;
  margin: 225px 225px 125px 125px;
}
</style>
</head>


<body background="tiger.jpeg">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="aboutus.html"> cup of tea </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menubar">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href=homepage.html> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#> Discover </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#> Create new </a>
          </li>


        </ul>
    </div>
    <div class="collapse navbar-collapse right" id="menubar">
      <ul class="navbar-nav navbar-right" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=# id="navbardrop" data-toggle="dropdown"> Your profile </a>
          <div class="dropdown-menu">
            <a class = "dropdown-item" href=profile.htm> Go to your profile </a>
            <a class="dropdown-item active" href=#> Edit Profile </a>
            <a class="dropdown-item" href="#"> Sign out </a>
          </div>
        </li>
      </ul>
    </div>


  </nav>
  <?php
  $query = "SELECT name,bio FROM user_details WHERE username='$uname'";
  $result =mysqli_query($con,$query);
  $row = mysqli_fetch_row($result);
  ?>
  <div id="edit">
  <center>
  <form action="editprofile.php" method="POST" id="edit-profile" name="edit-profile" enctype="multipart/form-data">
    <div class="form-group row">
      <div class="col-sm-8">
          <label for="name" > Name </label>
        <?php
        echo "<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value='$row[0]' placeholder='Name of the blog' required/>";
        ?>
      </div>
    </div>
    <div class="form-group row">

      <div class="col-sm-8">
          <label for="bio"> Bio </label>
        <?php
        echo "<textarea class=\"form-control rounded-2\" form=\"edit-profile\" id=\"bio\" name=\"bio\"  placeholder=\"Write something nice about yourself here!\" rows=\"3\">$row[1]</textarea>";
        ?>
      </div>
    </div>
    <div class="form-group row">

      <div class="col-sm-8">
          <label for="bio"> Profile Picture </label>
        <input type="file" name="pic" id="pic">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <button type="submit" class="btn btn-dark btn-block" name="submit" > Done!  </button>
      </div>
    </div>
  </div>
  </center>
