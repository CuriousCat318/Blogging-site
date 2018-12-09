
<?php
include "index.php";
session_start();
$name = $_GET['user'];

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

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(simple-pre-loader/images/loader-64x/Preloader_3.gif) center no-repeat #fff;
}
body {
  background-image: url("images/nightsky3.jpg");
}

img.img-circle { /* profile pic */
  width: 100px;
  height: 100px;
  border-radius: 100px;
  /* margin: 20px 200px; */

}
.profile {
  margin-top :70px;
  width:900px;
  background-color: black;
  color: white;
  border-radius: 3px;
  padding-top: 15px;
}
.margin {
  margin-bottom: 20px;

}
.bg-main{
  width:800px;
  background-color: white;
  border-radius: 3px;
	margin-top: 50px;

  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */

}
.center {
	margin-left: auto;
	margin-right: auto;
}

.bg-2 { /* content */
  background-color: white;
  /* length:1000px; */
  margin-top: 25px;
  margin-right: 60px;
  margin-left: 60px;
  margin-bottom: 25px;
  color:black;
  /* border: 2px solid black;
  box-shadow: 4px; */

  /* border-radius: 5px; */
}

.bg-3{ /*title and footer for each post */
  width:800px;
  margin-top:10px;
  /* length:500px; */
  background-color: white;
  color:black;

  /* border: 2px solid white; */
}

.bg-4 { /*create new */
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

.btn:hover {
	background-color: white;
	color: black;
}
.editrow {
	margin-top: 50px;
	margin-left: auto;
	margin-right: auto;
}
.edit {
	width: 50%;
	margin-left: auto;
	margin-right: auto;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>

	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(2000);;
	});
  </script>

</head>

<body>
	<div class="se-pre-con"></div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="aboutus.html"> cup of tea </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menubar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href=homepage.php> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=discover.html> Discover </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=createnew.php> Create new </a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse right" id="menubar">
      <ul class="navbar-nav navbar-right" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=# id="navbardrop" data-toggle="dropdown"> Your profile </a>
          <div class="dropdown-menu">
            <a class = "dropdown-item active" href="profile.php"> Go to your profile </a>
            <a class="dropdown-item" href="edit.php"> Edit Profile </a>
            <a class="dropdown-item" href="login.php"> Sign out </a>
          </div>
        </li>
      </ul>
    </div>

  </nav>
<?php
$uname = $_SESSION['uname'];
$query = "SELECT name,bio FROM user_details WHERE username='$name'";
$result =mysqli_query($con,$query);
$row = mysqli_fetch_row($result);
?>

  <div class="container-fluid profile text-center" style="margin-top:80px;" >
    <div class="row">
      <div class="col-sm-12" >
        <?php
  print "<h3 class='heading'>$row[0]</h3>";
        // header("Content-type: image/jpg");
?>
      <img src='images/bg2.jpg'  class="img-responsive img-circle margin" alt="blah" width="60px" style="display:inline">
<?php
        print "<p>$row[1]</p>"
        ?>

</div>
</div>
</div>


<?php
$query = "SELECT title,post,category,date,id from posts where uname='$name' order by date DESC";
$result = mysqli_query($con,$query);

// if there are no posts available






		while($row = mysqli_fetch_row($result)) {
			echo "<div class=\"container-fluid profile bg-main text-center\">";
				echo "  <div class=\"row bg-3\">

					<div class=\"col-sm-12 center\">
						 <h2 style = 'font-family: 'Oswald', sans-serif'> $row[0]  </h2>
					</div>

				</div>
				<div class=\"row\">
					<div class=\"col-sm-10 bg-2\">
						<p>$row[1]</p>

				</div>
				</div>
				<div class=\"row bg-3\">
					<div class=\"col-sm-6\">
						<p style = 'color: #006600'> Category: $row[2] </p>
					</div>
					<div class=\"col-sm-6 \">
						<p style = 'color: #006600'> Posted on: $row[3] </p>
					</div>






			</div>




		</div>
		</div>";

		}





?>


<footer class="page-footer font-small mdb-color lighten-3 pt-4">
</footer>

</body>
</html>
