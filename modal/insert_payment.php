<div class="modal fade" id="insert_payment_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">payment Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="payment.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>payment_ID</label>
                    <input type="number" class="form-control"required name="payment_id">
                  </div>
                  <label>payment_name</label>
                  <select class="form-control" name="patient_name" required>
                        <option selected disabled value="">select patient_ID</option>
                        <?php 
                        $res = mysqli_query($conn , "select patient_name,patient_name from patients");
                         while($row =mysqli_fetch_array($res)){
                            echo"<option value ='$row[patient_name]'>$row[patient_name] </option>";
                        }
                        ?>
                    </select>
                  
                  <div class="form-group">
                    <label>pa_charged_fee</label>
                    <input type="number" class="form-control"required name="pa_charged_fee">
                  </div>
                  <div class="form-group">
                    <label>paid</label>
                    <input type="number" class="form-control"required name="paid">
                  </div>
                  <div class="form-group">
                    <label>remained</label>
                    <input type="number" class="form-control"required name="remained">
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
                <!-- <div class="card-footer">
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success"name="btn_insert_department">insert</button>
            
            </div>
            
                </div> -->
              </form>
              <?php
              if (isset($_POST['btnregister'])){
               $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
                $pa_charged_fee = mysqli_real_escape_string($conn, $_POST['pa_charged_fee']);             
                $paid = mysqli_real_escape_string($conn, $_POST['paid']);             
                $remained = mysqli_real_escape_string($conn, $_POST['remained']);             
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $insert = mysqli_query($conn,"INSERT INTO payment VALUES(null,'$patient_name','$pa_charged_fee','$paid','$remained','$reg_date','$userid')");
                echo "<h1 class='btn btn-success'>Inserted successfully</h1>";
               $soo_aqri = mysqli_query($conn,"select * from payment");
               while($row = mysqli_fetch_array($soo_aqri));
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