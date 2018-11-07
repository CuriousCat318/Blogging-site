//profile page of the user
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
.profile {
  margin-top :70px;
}
.margin {
  margin-bottom: 20px;

}
.bg-main{
  width:900px;
  background-color: white;
  border-radius: 3px;
  /* border: 2px solid black; */
  /* box-shadow:4px 4px black; */
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.bg-1{
  width:900px;
  /* length:500px; */
  background-color: black;
  color:white;
  /* border: 2px solid white; */
}
.bg-2 {
  background-color: lightgrey;
  /* length:1000px; */
  margin-top: 25px;
  margin-right: 60px;
  margin-left: 140px;
  margin-bottom: 25px;
  color:black;
  /* border: 2px solid black;
  box-shadow: 4px; */

  /* border-radius: 5px; */
}

.bg-3{
  width:900px;
  margin-top:10px;
  /* length:500px; */
  background-color: white;
  color:black;
  /* border: 2px solid white; */
}

.bg-4 {
  width:900px;
  background-color: white;
  border-radius: 3px;
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
            <a class = "dropdown-item active" href="#"> Go to your profile </a>
            <a class="dropdown-item" href="edit.php"> Edit Profile </a>
            <a class="dropdown-item" href="#"> Sign out </a>
          </div>
        </li>
      </ul>
    </div>

  </nav>
<?php
$uname = $_SESSION['uname'];
$query = "SELECT name,bio FROM user_details WHERE username='$uname'";
$result =mysqli_query($con,$query);
$row = mysqli_fetch_row($result);
?>

  <div class="container-fluid bg-1 text-center" style="margin-top:80px;" >
    <div class="row">
      <div class="col-sm-12" >
        <?php
  print "<h3 class='heading'>$row[0]</h3>";
        // header("Content-type: image/jpg");
?>
      <img src='getImage.php'  class="img-responsive img-circle margin" alt="blah" width="60px" style="display:inline">
<?php
        print "<p>$row[1]</p>"
        ?>

</div>
</div>
</div>
<?php
$query = "SELECT title,post,category,date from posts where uname='$uname' order by date DESC";
$result = mysqli_query($con,$query);
// $rows = mysqli_fetch_row($result);

if (mysqli_num_rows($result) == 0){
  echo "<div class=\"container-fluid profile bg-main text-center\">
      <div class=\"row  bg-3\">
      <div class=\"col-sm-12\">
         <h2> Nothing to show here! </h2>
         <form action=createnew.php>
         <button type='submit' class='btn btn-dark btn-block' name='submit'> Write your post here! </button>
      </div>
    </div>";
}
else {
  echo "<div class=\"container-fluid profile bg-4 text-center\">
      <div class=\"row bg-3\">
      <div class=\"col-sm-4\">
         <h2> Write a new post </h2>
         <form action=createnew.php>
         <button type='submit' class='btn btn-dark btn-block' name='submit'> Write your post here! </button>
      </div>
    </div>
    <hr>";





while($row = mysqli_fetch_row($result)) {
  echo " <div class=\"container-fluid profile bg-main text-center\">";
    echo "  <div class=\"row bg-3\">
      <div class=\"col-sm-12\">
         <h2> $row[0] </h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-sm-8 bg-2\">
        <p> $row[1] </p>
      </div>
    </div>
    <div class=\"row bg-3\">
      <div class=\"col-sm-6 \">
        <p> Category: $row[2] </p>
      </div>
      <div class=\"col-sm-6 \">
        <p> Posted on: $row[3] </p>
      </div>



  </div>
</div>";

}
}
?>



</body>
</html>
