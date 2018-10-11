
<?php
include "index.php";
session_start();

?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
img.img-circle {
  width: 100px;
  height: 100px;
  border-radius: 100px;
  /* margin: 20px 200px; */

}
.margin {
  margin-bottom: 20px;

}
.bg-1{
  width:900px;
  /* length:500px; */
  background-color: black;
  color:white;
}
.bg-2 {
  background-color: grey;
  /* length:1000px; */
  width:900px;
  color:white;
}
h3.heading {
  text-align: center;
  /* color: white; */
}
.right {
  /* padding: 0px 200px; */

}
</style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"> cup of tea </a>
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
        <!-- <li class="nav-item active">
          <a class="nav-link" href=#> Your Profile </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href=#> Edit Profile </a>
        </li> -->
        <!-- <ul class="navbar-nav navbar-right">
          <li><a href="#">Your profile</a></li>
        </ul> -->
      </ul>


    </div>
    <div class="collapse navbar-collapse right" id="menubar">
      <ul class="navbar-nav navbar-right" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=# id="navbardrop" data-toggle="dropdown"> Your profile </a>
          <div class="dropdown-menu">
            <a class = "dropdown-item active" href="#"> Go to your profile </a>
            <a class="dropdown-item" href="editprofile.html"> Edit Profile </a>
            <a class="dropdown-item" href="#"> Sign out </a>
          </div>
        </li>
      </ul>
    </div>

  </nav>
<?php
$query = "SELECT name,bio FROM user_details WHERE username='rhea'";
$result =mysqli_query($con,$query);
$row = mysqli_fetch_row($result);


?>

  <div class="container-fluid bg-1 text-center" style="margin-top:80px;" >
    <div class="row">
      <div class="col-sm-12" >
        <?php
  print "<h3 class='heading'>$row[0]</h3>";
?>
      <img src="images/bg1.jpg"  class="img-responsive img-circle margin" alt="blah" width="60px" style="display:inline">
      <?php
        print "<p>$row[1]</p>"
        ?>
</div>
</div>
</div>
  <div class="container-fluid bg-2 text-center">
    <div class="row">
      <div class="col-sm-12">
        <p> bbbb </p>
      </div>
    </div>
  </div>



</body>
</html>
