<?php

$con = @mysqli_connect('localhost','root','','tech_blog');
if(!$con){
  echo "Error: ".mysqli_connect_error();
  exit();
}


?>
