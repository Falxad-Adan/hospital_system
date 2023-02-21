<?php include("main-folder/connection.php");
$id=$_GET['idd'];
$res = mysqli_query($conn,"select*from drugs where drug_id=$id");
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
                <h3 class="card-title">drugs Update Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="drugs.php" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label>drug_id</label>
                    <input type="number" class="form-control" name="drug_id"value="<?php echo $row[0];?>"readonly>
                  </div>
                  <div class="form-group">
                    <label>drug_name</label>
                    <input type="text" class="form-control" name="drug_name"value="<?php echo $row[1];?>">
                  </div>
                  
                  <div class="form-group">
                    <label >issu_date</label>
                    <input type="date" class="form-control" name="issu_date"value="<?php echo $row[2];?>">
                  </div>
                  
                  <div class="form-group">
                    <label >expire_date</label>
                    <input type="date" class="form-control" name="expire_date"value="<?php echo $row[3];?>">
                  </div>
                  <div class="form-group">
                    <label>	price</label>
                    <input type="number" class="form-control" name="price"value="<?php echo $row[4];?>">
                  </div>
                  <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description"value="<?php echo $row[5];?>">
                  </div>
                  <div class="form-group">
                    <label >reg_date</label>
                    <input type="date" class="form-control" name="reg_date"value="<?php echo $row[6];?>">
                  </div>
                  <div class="form-group">
                    <label>userid</label>
                    <input type="userid" class="form-control" required name="userid"value="<?php echo $row[7];?>"readonly >
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btnedit">Update</button>
                </div>
              </form>
        
              <?php
                  if (isset($_POST['btnedit'])){
                    $drug_id = mysqli_real_escape_string($conn, $_POST['drug_id']);
                    $drug_name = mysqli_real_escape_string($conn, $_POST['drug_name']);            
                    $issu_date = mysqli_real_escape_string($conn, $_POST['issu_date']);            
                    $expire_date = mysqli_real_escape_string($conn, $_POST['expire_date']);            
                    $price = mysqli_real_escape_string($conn, $_POST['price']);            
                    $description = mysqli_real_escape_string($conn, $_POST['description']);            
                    $reg_date= mysqli_real_escape_string($conn, $_POST['reg_date']);
                    $userid= mysqli_real_escape_string($conn, $_POST['userid']);
                    $update = mysqli_query($conn, "UPDATE drugs set drug_id='$drug_id',drug_name=' $drug_name',issu_date='$issu_date',expire_date=' $expire_date',price='$price',description=' $description',reg_date='$reg_date' ,userid='$userid'where drug_id=' $drug_id'");
                    echo "<h1 class='btn btn-success '>UPdated success</h1>";
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