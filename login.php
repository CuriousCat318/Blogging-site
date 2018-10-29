<html>
<head>
  <title> Log in </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <style>
  body {
    background-size: 100% 100%;
  }
  #signup{
    width: 350px;
    padding: 15px 25px 25px 25px;
    height: 300px;
    margin: 125px 125px 125px 125px;
    /* background-color: white; */
    /* opacity:0.9; */
  }






  button.btn:hover {
        background-color: grey;
    }

  </style>
</head>

<body background="images/bg4.jpg">

  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"> cup of tea </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menubar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href=#> Log in </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=#> Sign up </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=#> Discover </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.html"> About us </a>
        </li>

      </ul>
    </div>
  </nav>
  <center>


    <div id="signup">
      <p style="font-size:30px;color:black">
          <b> cup of tea </b>
      </p>


      <form action="" method="POST" name="log-in">

        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" name="uname" class="form-control" placeholder="username" required/>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="password" name="password" id="password" class="form-control" placeholder="password"  required/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-dark btn-block" name="signup" > Log In </button>
          </div>
        </div>
      </form>
      <?php
      include 'index.php';
      session_start();

      if(isset($_POST['uname']) && isset($_POST['password'])){
        $uname = $_POST['uname'];
        $pw = $_POST['password'];
        // $hash_pw = password_hash($pw,PASSWORD_DEFAULT);

        $query = "SELECT username,password from user_details where username='$uname'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_row($result);
        //verify the hash
        if (password_verify($pw,$row[1])){
          // echo "success";
          $_SESSION['uname'] = $uname;
          header("location:homepage.php");
        }
        else {
          print "<p style='color:red'> Username or password is incorrect</p>";

        }
      }
      ?>
      </div>
    </center>

</body>
</html>
