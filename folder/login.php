<?php
	session_start();
	$conn=new mysqli("localhost","root","","online_book_store");		
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$pass=md5($_POST['password']);
		$query="SELECT Email,Password FROM users where Email='$_POST[email]' && Password='$pass'";
       	$result=mysqli_query($conn,$query);
    	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
       	if($user)
		{
			$_SESSION['user']=$_POST['email'];
			echo "loading...";
		}
		else
		{
			echo "Invalid Email or Password !!!";
		}
	}
?>