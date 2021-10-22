<?php
$con=mysqli_connect("localhost","root","","exam");

if($con){
  echo "";
}
else{
	die("error".mysql_connect_error());
}

?>