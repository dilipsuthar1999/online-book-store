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
        <li><a href="admin_work.php">Home</a></li>
        <li><a href="#" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Add Books</a></li>
        <li><a href="admin_update_book.php">Update Books Details</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h style="font-size: 25px">Add New Book</h>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="addBook" method="POST" action="add_book.php"  enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">ISBN Number</label>
                  <input type="text" name="id" class="form-control" id="exampleDropdownFormInputName2" required>                
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Book Category</label>
                  <select name="category" class="form-control" id="exampleDropdownFormInputName2" required>
                    <option value="">Select Categoty of Book</option>
                    <option value="Education">Education</option>
                    <option value="Action and Adventure">Action and Adventure</option>
                    <option value="Comics">Comics</option>
                    <option value="Biograph">Biograph</option>
                    <option value="Drama">Drama</option>
                    <option value="Poetry">Poetry</option>
                    <option value="History">History</option>
                  </select>
                </div>                
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Book Image</label>
                  <input type="file" accept=".jpg" name="image" class="form-control" id="exampleDropdownFormInputName2" style="border:none;" required>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleDropdownFormInputName2" required>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Author</label>
                  <input type="text" name="author" class="form-control" id="exampleDropdownFormInputName2" required>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Publisher</label>
                  <input type="text" name="publisher" class="form-control" id="exampleDropdownFormInputName2" required>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormInputName2">Desription</label>
                  <textarea class="form-control" id="exampleDropdownFormInputName2" name="desription" required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormEmail2">Price</label>
                  <input type="number" name="price" class="form-control" id="exampleDropdownFormEmail2" required>
                </div>
                <button type="submit" name="add" value="add" class="btn btn-primary" onclick="">Submit</button>
              </form><br>
            </div>
        </div>
      </div>
  </div>