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
          if($_POST['category']=='All')
          {
            $query="SELECT * FROM books";
            $result=mysqli_query($conn,$query);
            $user=mysqli_num_rows($result);
            if($user!=0)
            {
              while($data=mysqli_fetch_assoc($result))
              {
                echo "<tr>
                        <td>".$data['ISBN_Number']."</td>
                        <td><img src='".$data['Image']."' style='width:100px; height:100px;'></td>
                        <td>".$data['Name']."</td>
                        <td>".$data['Author']."</td>
                        <td>".$data['Publisher']."</td>
                        <td>".$data['Description']."</td>
                        <td>".$data['Price']."</td>
                        <td>".$data['Quantity']."</td>
                      </tr>";
              } 
            }
          }
          else
          {
            $query="SELECT * FROM books where Category='$_POST[category]'";
            $result=mysqli_query($conn,$query);
            $user=mysqli_num_rows($result);
            if($user!=0)
            {
              while($data=mysqli_fetch_assoc($result))
              {
                echo "<tr>
                        <td>".$data['ISBN_Number']."</td>
                        <td><img src='".$data['Image']."' style='width:100px; height:100px;'></td>
                        <td>".$data['Name']."</td>
                        <td>".$data['Author']."</td>
                        <td>".$data['Publisher']."</td>
                        <td>".$data['Description']."</td>
                        <td>".$data['Price']."</td>
                        <td>".$data['Quantity']."</td>
                      </tr>";
              } 
            }
          }
  }
?>
      </table>
    </div>