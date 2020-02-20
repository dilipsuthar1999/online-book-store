<?php
	session_start();
	$conn=new mysqli("localhost","root","","online_book_store");		
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$quantity=$_POST['quantity']+$_SESSION['Quantity'];
		$sql="UPDATE books SET Price='$_POST[price]',Quantity='$quantity' where Id=$_SESSION[ISBN_Number]";
		if($conn->query($sql))
		{
			$_SESSION['msg']='Book Price or Quantity Updated';
//			header('location:admin_work.php');

		}
		else
		{
			$_SESSION['msg']='Book Price or Quantity Not Updated';
//			header('location:admin_work.php');
		}
					echo "1".$_SESSION['ISBN_Number']."  ".$quantity;
		unset($_SESSION['ISBN_Number']);
		unset($_SESSION['Quantity']);
	}
?>
