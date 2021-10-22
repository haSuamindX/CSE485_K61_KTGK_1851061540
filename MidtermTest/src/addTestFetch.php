<?php
//redirection page link
header("location:error.php");
$con=mysqli_connect("localhost","root","","exam");

if($con){
  echo "";
}
else{
	echo "connection failed";
}


if(isset($_POST['addTest'])){

}


?>