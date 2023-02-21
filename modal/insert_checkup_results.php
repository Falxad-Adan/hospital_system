<div class="modal fade" id="insert_checkup_results_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">checkup_Results Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="checkup_results.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>checkup_result_ID</label>
                    <input type="number" class="form-control" name="checkup_result_id">
                  </div>
                  <div class="form-group">
                    <label>Patient_ID</label>
                    <input type="number" class="form-control" name="patient_id">
                  </div>
                  <div class="form-group">
                    <label>patient_view</label>
                    <input type="number" class="form-control" required name="patient_view">
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
              <button type="button" class="btn btn-success"name="btn_insert_checkup_results">insert</button>
            
            </div>
            
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
               
                $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                $patient_view= mysqli_real_escape_string($conn, $_POST['patient_view']);               
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $insert = mysqli_query($conn, "INSERT INTO checkup_result VALUES(null, ' $patient_id','$patient_view', '$reg_date','$userid')");
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