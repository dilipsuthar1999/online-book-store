<?php
  $conn=new mysqli("localhost","root","","online_book_store");
  session_start();

  if(mysqli_connect_error())
  {
    die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
  }
  else
  {
    require_once './folder/header.php';
?>
    <div style="padding: 20px;">
      <table class="table table-hover">
        <tr>
          <th>ISBN Number</th>
          <th>Image</th>
          <th>Name</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>

      <?php
          $query="SELECT * FROM books where ISBN_Number='$_POST[id]'";
          $result=mysqli_query($conn,$query);
          $user=mysqli_num_rows($result);
          if($user!=0)
          {
            while($data=mysqli_fetch_assoc($result))
            {
              $_SESSION['ISBN_Number']=$data['ISBN_Number'];
              $_SESSION['Quantity']=$data['Quantity'];
              echo "<tr>
                      <td>".$data['ISBN_Number']."</td>
                      <td><img src='".$data['Image']."' style='width:100px; height:100px;'></td>
                      <td>".$data['Name']."</td>
                      <td>".$data['Author']."</td>
                      <td>".$data['Publisher']."</td>
                      <td>".$data['Description']."</td>
                      <td>".$data['Price']."<br><br><form method='POST' action='book_update1.php'><input type='number' name='price' class='form-control'></td>
                      <td>".$data['Quantity']."<br><br><input type='number' name='quantity' class='form-control'></td>
                    </tr>
                  </table>
                  <button type='submit' class='btn btn-success' name='update' value='update'>Submit</button></form>";
              } 
          }
  }
?>
  </div>
