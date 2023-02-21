<?php include("main-folder/connection.php");
$id=$_GET['idd'];
$res = mysqli_query($conn,"select*from employee where emp_id=$id");
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3 class="card-title">Employee Update Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="employeeview.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >employee ID</label>
                    <input type="text" class="form-control" name="empid" value="<?php echo $row[0];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label >employee name</label>
                    <input type="text" class="form-control" name="empname" value="<?php echo $row[1];?>" required>
                  </div>

                    <div class="form-group">
                    <label >tell</label>
                    <input type="text" class="form-control" name="tell"value="<?php echo $row[2];?>"required>
                  </div>
                  <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address"  value="<?php echo $row[3];?>" required>
                  
                  </div>

                    <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email"value="<?php echo $row[4];?>" required>
                  </div>
                  <div class="form-group">
                    <label >sex</label>
                    <select class="form-control" name="sex" required>
                        <!-- <option selected disabled value="">select sex</option> -->
                        <option value="<?php echo $row[5];?>"><?php echo $row[5];?></option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label >salary</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo $row[6];?>" required>
                  </div>
                    <div class="form-group">
                    <label >Date</label>
                    <input type="date" class="form-control" name="date"value="<?php echo $row[7];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnedit">Update</button>
                </div>
              </form>
              

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