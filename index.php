
<?php 
include("session_check.php");
include("main-folder/connection.php");
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
          <div class="col-lg-3 col-6">
         
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               
                <p>Total Patients</p>
                <?php
                include("main-folder/connection.php");
                $command="select count(*) as count from patients";
                $result=$conn->query($command);
                $res="";
                if($result){
                  while($row =$result->fetch_assoc()){
                    $res.="<p>" .$row["count"]."</p>";
                    echo $row['count'];
                  }

                }
              
                
                ?>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                      <p>Total Doctors</p>
                <?php
                include("main-folder/connection.php");
                $command="select count(*) as count from doctors";
                $result=$conn->query($command);
                $res=" ";
                if($result){
                  while($row =$result->fetch_assoc()){
                    $res.="<p>" .$row["count"]."</p>";
                    echo $row['count'];
                  }

                }
              
                
                ?>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
               
                <p>Total employee</p>
                <?php
                include("main-folder/connection.php");
                $command="select count(*) as count from employee";
                $result=$conn->query($command);
                $res=" ";
                if($result){
                  while($row =$result->fetch_assoc()){
                    $res.="<p>" .$row["count"]."</p>";
                    echo $row['count'];
                  }

                }
              
                
                ?>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              
                <p>Deparments</p>
                <?php
                include("main-folder/connection.php");
                $command="select count(*) as count from  departments ";
                $result=$conn->query($command);
                $res=" ";
                if($result){
                  while($row =$result->fetch_assoc()){
                    $res.="<p>" .$row["count"]."</p>";
                    echo $row['count'];
                  }

                }
              
                
                ?>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <img src="dist/img/cov.png" style="height:15%">
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
