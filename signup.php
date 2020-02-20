<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php
    require_once './folder/header.php';
  ?>
</head>
<body>
	<header style="width:25%">LOGUP</header>
	<form action="" method="POST" style="width:25%">
		<label>Name</label><br>
		<input type="text" name="name" required=""><br>
		<label>Contact Number</label><br>
		<input type="text" name="contact" required=""><br>		
		<label>Email</label><br>
		<input type="email" name="email" required=""><br>
		<label>Password</label><br>
		<input type="password" name="password" required="" pattern="{8,}" title="8"><br>
		<label>Confirm Password</label><br>
		<input type="password" name="password" required=""><br>
		<button type="submit" name="signin" value="signin">Log up</button>
	</form>
	<footer id="result" style="width:25%"></footer>
</body>
</html>
