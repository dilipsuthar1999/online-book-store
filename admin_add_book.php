<?php
  $conn=new mysqli("localhost","root","","book");
  session_start();

  if(mysqli_connect_error())
  {
    die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
  }
  else
  {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php
    require_once './folder/header.php';
  ?>
</head>
<body>
  <?php
    require_once "./admin/header.php";
  ?>

  <div style="padding: 20px;">

  </div>

  <?php
    require_once "./admin/footer.php";
  ?>
</body>
</html>

<?php
  }
?>