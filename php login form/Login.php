<?php
$con=mysqli_connect("localhost","root","","Databasa");
if($con!=null)
{
	echo"<h1>Connected Successfully</h1>";
}
else{
	die("<h1>Error</h1>");
}

$un=$_POST['usa'];
$pass=$_POST['pwa'];
$sql="select * from dt where user= '$un' AND pass='$pass'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
	echo"<h1>Login Successfully</h1>";
}
else{
	echo"<h1>Error</h1>";
}
?>