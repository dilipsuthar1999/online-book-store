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
    require_once "./template/header.php";
  ?>

  <div class="jumbotron-white" style="padding: 25px;">
    <h1 class="display-4">Book Store</h1>
    <p class="lead">This is a online book store, where you can buy book for the limited and Unlimited period as you want.</p>
    <hr class="my-4">
  </div>

  <div class="row" style="padding: 5px;">
    <?php
        $query="SELECT * FROM books";
        $result=mysqli_query($conn,$query);
        $user=mysqli_num_rows($result);
        if($user!=0)
        {
          while($data=mysqli_fetch_assoc($result))
          {
            echo "<div class='column'>
                    <a href='book_about.php ? ISBN_Number=".$data['ISBN_Number']."' style='text-decoration:none; color:black;'>  
                      <div class='card'>
                        <img src='".$data['Image']."'><br>
                        <h4>".$data['Name']."</h4>
                      </div>
                    </a>
                  </div>";
          } 
        }
      }
    ?>
  </div>

  <?php
    require_once "./template/footer.php";
  ?>
</body>
</html>
