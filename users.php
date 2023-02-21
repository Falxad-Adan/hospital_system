
<?php 
include("session_check.php");
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
                <h3 class="card-title">User Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                    <label >username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                  </div>
                  <div class="form-group">
                    <label >password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                  </div>
                  <div class="form-group">
                  <label >usertype</label>
                    <select class="form-control" name="usertype" required>
                        <option selected disabled value="">select usertype</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                    </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnregister">Register</button>
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password= mysqli_real_escape_string($conn, $_POST['password']); 
                $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);            
                $insert = mysqli_query($conn, "INSERT INTO class VALUES(null, ' $username','$password','$usertype')");
             echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
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