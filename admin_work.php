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

  <script>
    function search()
    {
        $('#search').submit(function()
        {
            $.ajax(
            {
                type: "POST",
                url: 'admin/book_search.php',
                data: $(this).serialize(),
                success: function(data)
                {       
                  $("#result1").html(data);
                },
                error:function() 
                {
                }
            });
            return false;
        });
    }
  </script>
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
  
  <form id="search">
    <div class="form-group" style="padding: 20px;">
      <label for="exampleDropdownFormInputName2">Book Category</label>
      <select name="category" class="form-control" id="exampleDropdownFormInputName2" required="">
        <option value="">select book category</option>
        <option value="All">All</option>
        <option value="Education">Education</option>
        <option value="Action and Adventure">Action and Adventure</option>
        <option value="Comics">Comics</option>
        <option value="Biograph">Biograph</option>
        <option value="Drama">Drama</option>
        <option value="Poetry">Poetry</option>
        <option value="History">History</option>
      </select><br>
      <button type="submit" name="submit" onclick="search();" class="btn btn-success" style="padding: 10px;">Submit</button>
    </div>
  </form><br>
  <div id="result1"></div><br>

  <?php
    require_once "./admin/footer.php";
  }
  ?>
</body>
</html>
