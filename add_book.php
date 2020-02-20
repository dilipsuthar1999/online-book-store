<?php
	$conn=new mysqli("localhost","root","","online_book_store");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$query="SELECT * FROM books where ISBN_Number='$_POST[id]'";
       	$result=mysqli_query($conn,$query);
    	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
       	if($user)
		{
			$_SESSION['msg']="Book Already Exist !!!";
			header('location:admin_work.php');
		}
		else
		{
			$filename=$_FILES['image']['name'];
			$tempname=$_FILES['image']['tmp_name'];
			$folder="books/".$filename;
			move_uploaded_file($tempname,$folder);
			$q="0";
	        $sql="INSERT INTO books (ISBN_Number,Category,Image,Name,Author,Publisher,Description,Price,Quantity) VALUES ('$_POST[id]','$_POST[category]','$folder','$_POST[name]','$_POST[author]','$_POST[publisher]','$_POST[desription]','$_POST[price]','$q')";
			if($conn->query($sql))
			{
				$_SESSION['msg']="Book Added Successfully !!!";
				header('location:admin_work.php');
     		}
     		else
     		{
     			$_SESSION['msg']="Book Not Added !!!";
    			header('location:admin_work.php'); 		
     		}
     	}
	}
?>