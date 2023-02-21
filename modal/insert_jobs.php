<div class="modal fade" id="insert_jobs_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">jobs Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="jobs.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>job_ID</label>
                    <input type="number" class="form-control" name="job_id">
                  </div>
                  <div class="form-group">
                    <label>job_name </label>
                    <input type="text" class="form-control" name="job_name ">
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
                  $job_name = mysqli_real_escape_string($conn, $_POST['job_name']);            
                    $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                    $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                    $insert = mysqli_query($conn, "INSERT INTO  jobs  VALUES(null, '$job_name','$reg_date','$userid')");
               echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
               $soo_aqri = mysqli_query($conn, "select * from jobs ");
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