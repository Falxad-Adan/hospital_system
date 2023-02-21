<div class="modal fade" id="insert_drugs_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Drugs Registration Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="drugs.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <label>drug_ID</label>
                    <input type="number" class="form-control" name="drug_id">
                  </div>
                  <div class="form-group">
                    <label>drug_name</label>
                    <input type="text" class="form-control" name="drug_name">
                  </div>
                  <div class="form-group">
                    <label >issu_date</label>
                    <input type="date" class="form-control" name="issu_date">
                  </div>
                  <div class="form-group">
                    <label >expire_date</label>
                    <input type="date" class="form-control" name="expire_date">
                  </div>
                  <div class="form-group">
                    <label>price</label>
                    <input type="text" class="form-control" name="price">
                  </div>
                  <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description">
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
                $drug_name = mysqli_real_escape_string($conn, $_POST['drug_name']);            
                $issu_date = mysqli_real_escape_string($conn, $_POST['issu_date']);            
                $expire_date = mysqli_real_escape_string($conn, $_POST['expire_date']);            
                $price = mysqli_real_escape_string($conn, $_POST['price']);            
                $description = mysqli_real_escape_string($conn, $_POST['description']);            
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $class_id= mysqli_real_escape_string($conn, $_POST['class_id']);
                $insert = mysqli_query($conn, "INSERT INTO drugs VALUES(null,  '$drug_name','$issu_date','$expire_date','$price','$description','$reg_date','$class_id')");
               echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
               $soo_aqri = mysqli_query($conn, "select * from drugs");
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