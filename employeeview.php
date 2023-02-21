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
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Employee id</th>
                    <th>Employee name</th>
                    <th>Tell</th>     
                    <th>Address</th>
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Salary</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
              if (isset($_POST['btnedit'])){
                $id = mysqli_real_escape_string($conn, $_POST['empid']);
                $empname = mysqli_real_escape_string($conn, $_POST['empname']);
                $tell = mysqli_real_escape_string($conn, $_POST['tell']);
                $email = mysqli_real_escape_string($conn, $_POST['email']); 
                $address= mysqli_real_escape_string($conn, $_POST['address']); 
                $sex= mysqli_real_escape_string($conn, $_POST['sex']);
                $salary= mysqli_real_escape_string($conn, $_POST['salary']); 
                $date = mysqli_real_escape_string($conn, $_POST['date']);            
                $update = mysqli_query($conn, "UPDATE employee set emp_name=' $empname',tell='$tell',email='$email', address='$address',sex='$sex',salary='$salary',reg_date='$date' where emp_id=$id");
             echo "<h1 class='btn btn-success '>UPdated success</h1>";
              }
              ?>
                    <?php
                    if(isset($_GET['idd'])){
                    $id =$_GET['idd'];
                    $tir = mysqli_query($conn,"delete from employee where emp_id= $id");

                    }
                    ?>
                    <?php
                    $soo_aqri = mysqli_query($conn, "select * from employee");
                    while($row = mysqli_fetch_array($soo_aqri)) {?>
                        <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[4];?></td>
                  <td><?php echo $row[5];?></td>
                  <td>$<?php echo $row[6];?></td>
                  <td><?php echo $row[7];?></td>          
        <td>
            <a href="employee_edit.php?idd=<?php echo $row[0];?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
            <a href="employeeview.php? idd=<?php echo $row[0];?>" class="btn btn-danger btn-sm" onclick= "return confirm('ma hubtaa inaad delete gareyneyso xogtaan')"><i class="fa fa-trash"></i></a>

            <a href="employee_rpt.php? idd=<?php echo $row[0];?>" class="btn btn-info btn-sm" target=_blank><i class="fa fa-print"></i></a>
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
