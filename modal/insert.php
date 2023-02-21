<div class="modal fade" id="insert_user_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">User Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="usersview.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                    
                  </div>
                  <div class="form-group">
                    <label >username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                  </div>
                  <div class="form-group">
                    <label >password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                  </div>
                  <div class="form-group">
                  <label >usertype</label>
                    <select class="form-control" name="usertype" required>
                        <option selected disabled value="">select usertype</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
</div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnregister">Register</button>
                </div>

                <!-- /.card-body -->
                
                    
               
              </form>
              <?php
              if (isset($_POST["btnregister"])){
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password= mysqli_real_escape_string($conn, $_POST['password']); 
                $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);            
                $insert = mysqli_query($conn, "INSERT INTO class VALUES(null, ' $username','$password','$usertype')");
             echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
              }
              ?>
              </div>
              </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>