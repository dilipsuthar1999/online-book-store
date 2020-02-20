<nav class="navbar navbar-default" style="padding-left:20px; padding-right: 20px; background-color: #c2f0f0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><i class="fas fa-book"></i> Book Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION['user']))
          {
        ?>
        <li><a href="#"><i class='fas fa-shopping-cart' style='padding:5px;'></i> Cart</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <?php    
          }
          else
          { 
        ?>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#smallShoes"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

  <div class="modal fade" id="smallShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="modalLabelSmall">Login</h4>
        </div>
        <div class="modal-body">
          <form id="loginForm">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" required="" class="form-control">
            </div>
            <div class="form-group">  
              <label>Password</label>
              <input type="password" name="password" required="" class="form-control"><br>
            </div>
            <button type="submit" name="signin" value="signin" onclick="login();" class="btn btn-success">Log in</button>
          </form><br>
          <div class="modal-footer" style="text-align: center;">
            <div class="alert alert-info" id="result"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

