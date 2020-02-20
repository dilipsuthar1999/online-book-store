<?php
	$conn=new mysqli("localhost","root","","online_book_store");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		if(isset($_SESSION['user']))
		{
			$query="SELECT * FROM cart where ISBN_Number='$_GET[Id]' and Email='$_SESSION[user]'";
		   	$result=mysqli_query($conn,$query);
		   	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
		   	if($user)
			{
				$_SESSION['insert_wrong']='Already In Cart';
				header('location:book_detail.php ? Id='.$_GET['Id']);
			}
			else
			{
				$sql="INSERT INTO cart (Email,ISBN_Number) VALUES ('$_SESSION[email]','$_GET[Id]')";
				if($conn->query($sql))
				{
					$_SESSION['msg1']='Insert Into Cart';
					header('location:book_detail.php ? Id='.$_GET['Id']);
				}
				else
				{
					$_SESSION['msg1']='Not Inserted Into Cart';
					header('location:book_detail.php ? Id='.$_GET['Id']);
				}
			}
		}
		else
		{
			header('location:index.php');
		}
	}
?>