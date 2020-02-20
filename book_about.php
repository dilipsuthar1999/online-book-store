<?php
	$conn=new mysqli("localhost","root","","online_book_store");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}	
	else
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	<?php
	 	require_once './folder/header.php';
	?>
</head>
<body>
	<?php
		require_once './template/header.php';
	?>

	<div class="row" style="padding: 10px;">
		<?php
			$query="SELECT * FROM books where ISBN_Number='$_GET[ISBN_Number]'";
		    $result=mysqli_query($conn,$query);
		    $user=mysqli_num_rows($result);
			if($user==1)
			{	
				while($data=mysqli_fetch_assoc($result))
				{
					echo "	<p style='padding:8px; font-size:25px;'><b><a href='index.php'>Books</a> > ".$data['Name']."</b></p>
							<div class='column'>
						    	<div class='card'>
				    				<img src='".$data['Image']."'>
				    			</div>
						  	</div>
						  	<div class='column'>
								<p style='font-size:20px;'><b>Book Description</b></p><p>".$data['Description']."</p>
							    <p style='font-size:20px;'><b>Book Detail</b></p><table class='table'><tr><td>ISBN Number</td><td>".$data['ISBN_Number']."</td></tr><tr><td>Author</td><td>".$data['Author']."</td></tr><tr><td>Price</td><td>&#x20b9; ".$data['Price']."</td></tr><tr>
							    <td>Stock</td><td>".$data['Quantity']."</td></tr></table>";
				}
			}
			
			if(isset($_SESSION['user']))
			{
				?>
			    	<p><a href="add_to_cart.php ? Id=<?php echo $_GET['ISBN_Number']; ?>" class='btn btn-success' style=''><i class='fas fa-shopping-cart' style='padding:5px;'></i> Add To Cart</a></p>
				<?php
			}
			else{}
		}
		?>

		</div>
	</div>

	<?php
		require_once './template/footer.php';
	?>
</body>
</html>
