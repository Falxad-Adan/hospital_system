<?php include("main-folder/connection.php");?>

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
          <div class="col-10"></div>
          <div class="col-2 mt-4">
        <button type="button" name="add" class="btn btn-info btn-sm" data-toggle="modal" data-target="#insert_doctor_modal"><i class="fa fa-dollar"></i> Add doctors</button>
        
      </div>
        </div>
        
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>doctor_id</th>
                    <th>emp_id</th>   
                    <th>experince</th>
                    <th>department_id</th>
                    <th>shift</th>
                    <th>reg_date</th>
                    <th>userid</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (isset($_POST['btnedit'])){
                $doctor_id = mysqli_real_escape_string($conn, $_POST['doctor_id']);
                $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);            
                $experince = mysqli_real_escape_string($conn, $_POST['experince']);            
                $department_id = mysqli_real_escape_string($conn, $_POST['department_id']);            
                $shift = mysqli_real_escape_string($conn, $_POST['shift']);            
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['class_id']);
                $update = mysqli_query($conn, "UPDATE doctors set doctor_id='$doctor_id',emp_id=' $emp_id',experince='$experince',department_id=' $department_id',shift='$shift',reg_date='$reg_date' ,userid='$userid'where doctor_id=' $doctor_id'");
                echo "<h1 class='btn btn-success '>UPdated success</h1>";
                
                 }
                 ?>
                  <?php
              if (isset($_POST['btn_insert_doctor'])){
                $doctor_id = mysqli_real_escape_string($conn, $_POST['doctor_id']);
                $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);            
                $experince = mysqli_real_escape_string($conn, $_POST['experince']);            
                $department_id = mysqli_real_escape_string($conn, $_POST['department_id']);            
                $shift = mysqli_real_escape_string($conn, $_POST['shift']);            
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $insert = mysqli_query($conn, "INSERT INTO doctors VALUES(null, '$doctor_id', '$emp_id','$experince','$department_id','$shift','$reg_date','$userid')");
               echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
               $soo_aqri = mysqli_query($conn, "select * from doctors");
               while($row = mysqli_fetch_array($soo_aqri)) ;
              }
              ?>
                    <?php
                    if(isset($_GET['idd'])){
                    $id =$_GET['idd'];
                    $tir = mysqli_query($conn,"delete from doctors where doctor_id= $id");

                    }
                ?>
                    <?php
                    $soo_aqri = mysqli_query($conn, "SELECT *from doctors");
                    while($row = mysqli_fetch_array($soo_aqri)) {?>
                        <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[4];?></td>
                  <td><?php echo $row[5];?></td>
                  <td><?php echo $row[6];?></td>
                  
                  
                
                  
                  
        <td>
            <a href="doctor_edit.php? idd=<?php echo $row[0];?>" class="btn btn-success btn-sm"onclick= "return confirm('ma wxaa rabtaa inaa update gareyneyso xogtaan')"><i class="fa fa-edit"></i></a>
            <a href="doctor.php? idd=<?php echo $row[0];?>" class="btn btn-danger btn-sm" onclick= "return confirm('ma hubtaa inaad delete gareyneyso xogtaan')"><i class="fa fa-trash"></i></a>
            <a href="" class="btn btn-info btn-sm"><i class="fa fa-print"></i></a>
        </td>

                   
                        </tr>
                   <?php
                    }
                    ?>
               </tbody>
                </table>
              </div>
              
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("modal/insert_doctor.php");?>
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