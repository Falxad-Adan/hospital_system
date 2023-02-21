<?php include("main-folder/connection.php");
$id=$_GET['idd'];
$res = mysqli_query($conn,"select*from checkup where checkup_id=$id");
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
              <li class="breadcrumb-item active">Contact</li>
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
                <h3 class="card-title">checkup Update Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="checkupedit.php" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label>checkup_ID</label>
                    <input type="number" class="form-control" name="checkup_id"value="<?php echo $row[0];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>Patient_ID</label>
                    <input type="number" class="form-control" name="patient_id"value="<?php echo $row[1];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>Doctor_ID</label>
                    <input type="number" class="form-control" required name="doctor_id"value="<?php echo $row[2];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>Disease_ID</label>
                    <input type="number" class="form-control" required name="desease_id" value="<?php echo $row[3];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>pa_charged_fee</label>
                    <input type="number" class="form-control" required name="pa_charged_fee"value="<?php echo $row[4];?>"required >
                  </div>
                  <div class="form-group">
                    <label >reg_date</label>
                    <input type="date" class="form-control" name="reg_date"value="<?php echo $row[5];?>">
                  </div>
                  <div class="form-group">
                    <label>userid</label>
                    <input type="userid" class="form-control" required name="userid"value="<?php echo $row[6];?>"readonly >
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnedit">Update</button>
                </div>
              </form>
        
              <?php
                  if (isset($_POST['btnedit'])){
                  $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                $doctor_id = mysqli_real_escape_string($conn, $_POST['doctor_id']);
                $desease_id = mysqli_real_escape_string($conn, $_POST['desease_id']); 
                $pa_charged_fee= mysqli_real_escape_string($conn, $_POST['pa_charged_fee']);               
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $update = mysqli_query($conn, "UPDATE checkup set patient_id=' $patient_id',doctor_id='$doctor_id',desease_id='$desease_id',pa_charged_fee='$pa_charged_fee',reg_date='$reg_date' ,userid='$userid', where checkup_id=' $checkup_id'");
                echo "<h1 class='btn btn-success '>UPdated success</h1>";
                
                 }
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