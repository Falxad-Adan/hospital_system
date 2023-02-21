<div class="modal fade" id="insert_doctor_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">doctors Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="doctor.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>doctor_ID</label>
                    <input type="number" class="form-control" name="doctor_id">
                  </div>
                  <div class="form-group">
                    <label>emp_id</label>
                    <input type="number" class="form-control" name="emp_id">
                  </div>
                  <div class="form-group">
                    <label >experince</label>
                    <input type="text" class="form-control" name="experince">
                  </div>
                  <div class="form-group">
                    <label >department_id</label>
                    <input type="number" class="form-control" name="department_id">
                  </div>
                  <div class="form-group">
                    <label>shift</label>
                    <input type="text" class="form-control" name="shift">
                  </div>
                  
                  <div class="form-group">
                    <label >reg_date</label>
                    <input type="date" class="form-control" name="reg_date">
                  </div>
                  <div class="form-group">
                    <label>userid</label>
                    <input type="hidden" class="form-control" required name="userid" >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnregister">Register</button>
                </div>

</div>
                </div>  
                <!-- /.card-body -->
                <div class="card-footer">
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success"name="btn_insert_drugs">insert</button>
            
            </div>
            
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
                $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);            
                $experince = mysqli_real_escape_string($conn, $_POST['experince']);            
                $department_id = mysqli_real_escape_string($conn, $_POST['department_id']);            
                $shift = mysqli_real_escape_string($conn, $_POST['shift']);            
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $class_id= mysqli_real_escape_string($conn, $_POST['class_id']);
                $insert = mysqli_query($conn, "INSERT INTO doctors VALUES(null,'$emp_id','$experince','$department_id','$shift','$reg_date','$class_id')");
                echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
               $soo_aqri = mysqli_query($conn, "select * from doctors");
               while($row = mysqli_fetch_array($soo_aqri)) ;
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