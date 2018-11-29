<?php
include '../index.php';
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
  <link rel="stylesheet" href="style.css">
  
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
  <div class="row profile">
    <h1> Food </h1>
  </div>
  <?php
  $query = "SELECT p.title,p.post,p.category,p.date,u.name from posts as p ,user_details as u  where p.uname=u.username and p.category='Food' order by date DESC";
  $result = mysqli_query($con,$query);


    // echo "<div class=\"container-fluid profile bg-4 text-center\">
    //     <div class=\"row bg-5\">
    //     <div class=\"col-sm-8 \">
    //        <h2> Write a new post </h2>
    //        <hr>
    //        <form action='createnew.php'>
    //        <button type='submit' class='btn btn-dark btn-block' name='submit'> Write your post here! </button>
    //     </div>
    //   </div>
    //   <hr>";





    while($row = mysqli_fetch_row($result)) {
      echo " <div class=\"container-fluid profile bg-main text-center\">";
        echo "  <div class=\"row bg-3\">
        <div class='col-sm-2'>
        <p style = 'color: #006600'> Posted by  </p>
        <img src='../images/bg2.jpg'  class=\"img-responsive img-circle margin\" alt=\"blah\" width=\"60px\" style=\"display:inline\">
        <p style = 'color: #006600'> $row[4] </p>

        </div>
          <div class=\"col-sm-8\">
             <h2 style = 'font-family: 'Oswald', sans-serif'> $row[0]  </h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-8 bg-2\">
            <p>$row[1]</p>

        </div>
        </div>
        <div class=\"row bg-3\">
          <div class=\"col-sm-6 \">
            <p style = 'color: #006600'> Category: $row[2] </p>
          </div>
          <div class=\"col-sm-6 \">
            <p style = 'color: #006600'> Posted on: $row[3] </p>
          </div>



      </div>
    </div>";

    }

  ?>




</body>
</html>
