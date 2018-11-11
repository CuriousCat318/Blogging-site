<?php
include 'index.php';
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

  no-js #loader { display: none;  }
  .js #loader { display: block; position: absolute; left: 100px; top: 0; }
  .se-pre-con {
  	position: fixed;
  	left: 0px;
  	top: 0px;
  	width: 100%;
  	height: 100%;
  	z-index: 9999;
  	background: url(simple-pre-loader/images/loader-64x/Preloader_6.gif) center no-repeat #fff;
  }
  .profile {
    margin-top : 70px;
    margin-bottom: 20px;
  }
  body {
    background-image: url("images/nightsky1.jpg");
  }
  .bg-main{
    width:900px;
    background-color: white;
    border-radius: 3px;
    /* border: 2px solid black; */
    /* box-shadow:4px 4px black; */
    box-shadow: 0 4px 8px 0 rgba(1, 1, 1, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border: 2px solid black;

  }
  .bg-1{
    width:900px;
    /* length:500px; */
    /* background-color: black; */
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
    /* margin-left: 40px; */
    margin-top:20px;
    /* length:500px; */
    /* background-color: white; */
    color:black;
    /* border: 2px solid white; */
  }

  .bg-4 {
    width:900px;
    /* background-color: white; */
    border-radius: 3px;
  }

  .bg-5 {
    width:900px;
    background-color: lightgrey;
    padding-left:  180px;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color : #f1f1f1;
    transition: .5s;
  }
  .btn:hover,.btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color : #000;
  }
  .navbar {
    /* background-color: #2d2d30; */
    opacity:0.9;
  }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(2500);;
	});
  </script>
</head>
<body>
  <div class="se-pre-con"></div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"> cup of tea </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menubar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href=#> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=discover.html> Discover </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createnew.html"> Create new </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="profile.htm"> Your Articles </a>
        </li> -->
      </ul>
    </div>
    <div class="collapse navbar-collapse right" id="menubar">
      <ul class="navbar-nav navbar-right" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=# id="navbardrop" data-toggle="dropdown"> Your profile </a>
          <div class="dropdown-menu">
            <a class = "dropdown-item" href=profile.htm> Go to your profile </a>
            <a class="dropdown-item" href=#> Edit Profile </a>
            <a class="dropdown-item" href="#"> Sign out </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <?php
  $query = "SELECT p.title,p.post,p.category,p.date,u.name from posts as p ,user_details as u  where p.uname=u.username order by date DESC";
  $result = mysqli_query($con,$query);


    echo "<div class=\"container-fluid profile bg-4 text-center\">
        <div class=\"row bg-5\">
        <div class=\"col-sm-8 \">
           <h2> Write a new post </h2>
           <hr>
           <form action='createnew.php'>
           <button type='submit' class='btn btn-dark btn-block' name='submit'> Write your post here! </button>
        </div>
      </div>
      <hr>";





  while($row = mysqli_fetch_row($result)) {
    echo " <div class=\"container-fluid profile bg-main text-center\">";
      echo "  <div class=\"row bg-3\">
      <div class='col-sm-3'>
      <p> Posted by  </p>
      <p> $row[4] on $row[3] </p>
      </div>
        <div class=\"col-sm-9\">
           <h2 style = 'font-family: '> $row[0]  </h2>
        </div>
      </div>
      <hr>
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

  ?>




</body>
</html>
