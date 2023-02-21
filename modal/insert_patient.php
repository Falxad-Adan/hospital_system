<div class="modal fade" id="insert_patient_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Patient Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="patient.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>Patient_ID</label>
                    <input type="text" class="form-control" name="patient_id">
                  </div>
                  <div class="form-group">
                    
                    <label>Patient_Name</label>
                    <input type="text" class="form-control" name="patient_name">
                  </div>
                  <div class="form-group">
                    <label>Tell</label>
                    <input type="number" class="form-control" required name="tell">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="address" class="form-control" required name="address" >
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input type="age" class="form-control" required name="age" >
                  </div>
                  <div class="form-group">
                    <label>Balance</label>
                    <input type="balance" class="form-control" required name="balance">
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
              <button type="button" class="btn btn-success"name="btn_patient_insert">insert</button>
            
            </div>
            
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
                $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
                $tell = mysqli_real_escape_string($conn, $_POST['tell']);
                $address = mysqli_real_escape_string($conn, $_POST['address']); 
                $age= mysqli_real_escape_string($conn, $_POST['age']);
                $balance= mysqli_real_escape_string($conn, $_POST['balance']);
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $insert = mysqli_query($conn, "INSERT INTO patients VALUES(null, ' $patient_name','   $tell', '$address','$age','$balance','  $reg_date','$userid')");
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