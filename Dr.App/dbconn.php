<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="docapp";
$connect = mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	die("connetion_failed:". mysqli_connect_error());
}
//else{
//	echo "connection created";
//}

	mysqli_select_db($connect,'docapp') or die("Could not select database");
	
?>