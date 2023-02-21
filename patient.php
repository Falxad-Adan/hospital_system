<?php include("main-folder/connection.php");
include("session_check.php");?>

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
          <div class="col-10"></div>
          <div class="col-2 mt-4">
        <button type="button" name="add" class="btn btn-info" data-toggle="modal" data-target="#insert_patient_modal"><i class="fa fa-user-nurse"></i> Add New patient</button>
        
      </div>
        </div>
        
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>patient_id</th>
                    <th>patient_name</th>   
                    <th>tell</th>
                    <th>address</th>
                    <th>age</th>
                    <th>balance</th>
                    <th>reg_date</th>
                    <th>userid</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (isset($_POST['btnedit'])){
                $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
                $tell = mysqli_real_escape_string($conn, $_POST['tell']);
                $address = mysqli_real_escape_string($conn, $_POST['address']); 
                $age= mysqli_real_escape_string($conn, $_POST['age']);
                $balance= mysqli_real_escape_string($conn, $_POST['balance']);
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                $update = mysqli_query($conn, "UPDATE patients set patient_id='$patient_id', patient_name=' $patient_name',tell='$tell',address='$address',age='$age',balance='$balance',reg_date='$reg_date' ,userid='$userid', where patient_id=' $patient_id'");
                echo "<h1 class='btn btn-success '>UPdated success</h1>";
                 }
                 ?>
                  <?php
              if (isset($_POST['btn_patient_insert'])){
                $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
                $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
                $tell = mysqli_real_escape_string($conn, $_POST['tell']);
                $address = mysqli_real_escape_string($conn, $_POST['address']); 
                $age= mysqli_real_escape_string($conn, $_POST['age']);
                $balance= mysqli_real_escape_string($conn, $_POST['balance']);
                $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                $userid= mysqli_real_escape_string($conn, $_POST['userid']);

                $insert = mysqli_query($conn, "INSERT INTO patients VALUES(null,' $patient_id , ' $patient_name','   $tell', '$address','$age','$balance','  $reg_date','$userid')");
             echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
              }
              ?>
                    <?php
                    if(isset($_GET['idd'])){
                    $id =$_GET['idd'];
                    $tir = mysqli_query($conn,"delete from patients where patient_id= $id");

                    }
                    ?>
                    <?php
                    $soo_aqri = mysqli_query($conn, "SELECT *from patients");
                    while($row = mysqli_fetch_array($soo_aqri)) {?>
                        <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[4];?></td>
                  <td>$<?php echo $row[5];?></td>
                  <td><?php echo $row[6];?></td>
                  <td><?php echo $row[7];?></td>
                  
        <td>
            <a href="patientedit.php? idd=<?php echo $row[0];?>" class="btn btn-success btn-sm"onclick= "return confirm('ma wxaa rabtaa inaa update gareyneyso xogtaan')"><i class="fa fa-edit"></i></a>
            <a href="patient.php? idd=<?php echo $row[0];?>" class="btn btn-danger btn-sm" onclick= "return confirm('ma hubtaa inaad delete gareyneyso xogtaan')"><i class="fa fa-trash"></i></a>
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
  <?php include("modal/insert_patient.php"); ?>
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