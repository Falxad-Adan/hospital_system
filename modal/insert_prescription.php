<div class="modal fade" id="insert_prescription_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">prescription Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="prescription.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>prescription_ID</label>
                    <input type="number" class="form-control" name="prescription_id">
                  </div>
                  <select class="form-control" name="patient_id" required>
                        <option selected disabled value="">select patient_ID</option>
                        <?php 
                        $res = mysqli_query($conn , "select patient_id,patient_id from patients");
                         while($row =mysqli_fetch_array($res)){
                            echo"<option value ='$row[patient_id]'>$row[patient_id] </option>";
                        }
                        ?>
                    </select>
                  <div class="form-group">
                    <label>drug_ID </label>
                    <input type="number" class="form-control" required name="drug_id">
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
              <button type="button" class="btn btn-success"name="btn_insert_prescription">insert</button>
            
            </div>
            
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
                $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                $drug_id= mysqli_real_escape_string($conn, $_POST['drug_id']);               
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $insert = mysqli_query($conn, "INSERT INTO prescription VALUES(null,'$patient_id','$drug_id','$reg_date','$userid')");
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