<?php 
$u = $_GET['u'];
$p = $_GET['p'];
$con = mysqli_connect("localhost", "root", "", "subham");
$sql = "select * from datatable where username='$u' and password='$p' limit 1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == 0){
	echo "Please check your username and password";
}else{
	echo "Success";
}
 ?>