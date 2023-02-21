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
         <div class="col-md-2"></div>
          <div class="col-md-8">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Employee Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >employee name</label>
                    <input type="text" class="form-control" name="empname" placeholder="Enter employee name" required>
                  </div>

                    <div class="form-group">
                    <label >tell</label>
                    <input type="text" class="form-control" name="tell" placeholder="Enter tell" required>
                  </div>
                  <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address"  placeholder="address" required>
                  
                  </div>

                    <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                    <label >sex</label>
                    <select class="form-control" name="sex" required>
                        <option selected disabled value="">select sex</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label >salary</label>
                    <input type="text" class="form-control" name="salary" placeholder="Enter salary" required>
                  </div>
                    <div class="form-group">
                    <label >Date</label>
                    <input type="date" class="form-control" name="date">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnregister">Register</button>
                </div>
              </form>
              <?php
              if (isset($_POST['btnregister'])){
                $empname = mysqli_real_escape_string($conn, $_POST['empname']);
                $tell = mysqli_real_escape_string($conn, $_POST['tell']);
                $email = mysqli_real_escape_string($conn, $_POST['email']); 
                $address= mysqli_real_escape_string($conn, $_POST['address']); 
                $sex= mysqli_real_escape_string($conn, $_POST['sex']);
                $salary= mysqli_real_escape_string($conn, $_POST['salary']); 
                $date = mysqli_real_escape_string($conn, $_POST['date']);            
                $insert = mysqli_query($conn, "INSERT INTO employee VALUES(null, ' $empname','$tell', '$email','$address','$sex','$salary','$date')");
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