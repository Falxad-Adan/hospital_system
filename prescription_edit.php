<?php include("main-folder/connection.php");
$id=$_GET['idd'];
$res = mysqli_query($conn,"select*from prescription where prescription_id=$id");
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <?php include("main-folder/head.php");?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <?php include("main-folder/navbar.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include("main-folder/sidebar.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hayan Hospital</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="signout.php">Logout</a></li>
                </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       <div class="row">
         <div class="col-md-2"></div>
          <div class="col-md-8">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">prescription Update Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prescription.php" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label>prescription_ID</label>
                    <input type="number" class="form-control" name="prescription_id"value="<?php echo $row[0];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>Patient_ID</label>
                    <input type="number" class="form-control" name="patient_id"value="<?php echo $row[1];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>drug_ID</label>
                    <input type="number" class="form-control" required name="drug_id"value="<?php echo $row[2];?>">
                  </div>
                 
                  <div class="form-group">
                    <label >reg_date</label>
                    <input type="date" class="form-control" name="reg_date"value="<?php echo $row[3];?>">
                  </div>
                  <div class="form-group">
                    <label>userid</label>
                    <input type="userid" class="form-control" required name="userid"value="<?php echo $row[4];?>"readonly >
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnedit">Update</button>
                </div>
              </form>
        
              <?php
                  if (isset($_POST['btnedit'])){
                    $prescription_id = mysqli_real_escape_string($conn, $_POST['prescription_id']);
                    $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                    $drug_id = mysqli_real_escape_string($conn, $_POST['drug_id']);             
                    $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                    $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                    $update = mysqli_query($conn, "UPDATE prescription set prescription_id='$prescription_id',patient_id=' $patient_id',drug_id=' $drug_id',reg_date='$reg_date' ,userid='$userid'where prescription_id=' $prescription_id'");
                    echo "<h1 class='btn btn-success '>UPdated success</h1>";
                    $soo_aqri = mysqli_query($conn, "select * from prescription");
                    while($row = mysqli_fetch_array($soo_aqri)) ;
                 }
                 ?>
             <?php
                   
                ?>
            </div>
          </div>
           <div class="col-md-2"></div>
       </div>
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php require("main-folder/footer.php");?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php require("main-folder/script.php")?>
</body>
</html>