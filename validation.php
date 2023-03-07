<?php
	session_start();
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		
			
	$server="localhost";
  	$username="root";
  	$password="";
  	$dbname="rymowatch";

  	$con = mysqli_connect($server, $username, $password, $dbname);

	mysqli_select_db($con, 'rymowatch');

	$username=$_POST['username'];
	$password=$_POST['password'];

	$s="select * from regi where username='$username' && password='$password'";

	$result= mysqli_query($con, $s);

	$num=mysqli_num_rows($result);

	if($num==1)
	{
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
		header('location:index.php');
	}
	else
	{
		header('location:login.php');
	}
}
?>