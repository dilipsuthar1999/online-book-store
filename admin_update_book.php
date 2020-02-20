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
    
    if(isset($_SESSION['msg']))
    {
      ?>
       <script>alert('<?php echo $_SESSION['msg']; ?>')</script>
      <?php
    }
    unset($_SESSION['msg']);
  ?>
  
   <form action="book_update.php" method="POST">
    <div class="form-group" style="padding: 20px;">
      <label for="exampleDropdownFormInputName2">Update Book Detail</label>
      <input type="text" name="id" class="form-control" placeholder="ISBN Number of Book" required=""><br>
      <button type="submit" name="submit" class="btn btn-success" style="padding: 10px;">Submit</button>
    </div>
  </form><br><br>

  <?php
    require_once "./admin/footer.php";
  }
  ?>
</body>
</html>
