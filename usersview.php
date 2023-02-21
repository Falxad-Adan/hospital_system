<?php include("main-folder/connection.php");

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
          <div class="col-10"></div>
          <div class="col-2 mt-4">
        <button type="button" name="add" class="btn btn-info" data-toggle="modal" data-target="#insert_user_modal"><i class="fa fa-user"></i> Add New User</button>
        
      </div>
        </div>
        <?php include("modal/insert.php"); ?>
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>user_id</th>
                   
                    <th>username</th>
                    <th>password</th>
                    <th>usertype</th>
                 
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
              if (isset($_POST['btn_user_insert'])){
                $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
               $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']); 
                $usertype= mysqli_real_escape_string($conn, $_POST['usertype']);

                $insert = mysqli_query($conn, "INSERT INTO class VALUES(null,' $user_id', ' $username','$password','$usertype')");
             echo "<h1 class='btn btn-success '>Inserted successfully</h1>";
              }
              ?>
                    <?php
                    if(isset($_GET['idd'])){
                    $id =$_GET['idd'];
                    $tir = mysqli_query($conn,"delete from class where userid= $id");

                    }
                    ?>
                    <?php
                    $soo_aqri = mysqli_query($conn, "SELECT * from class");
                    while($row = mysqli_fetch_array($soo_aqri)) {?>
                        <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  
        <td>
            <a href="users.php? idd=<?php echo $row[0];?>" class="btn btn-success btn-sm"onclick= "return confirm('ma wxaa rabtaa inaa update gareyneyso xogtaan')"><i class="fa fa-edit"></i></a>
            <a href="usersview.php? idd=<?php echo $row[0];?>" class="btn btn-danger btn-sm" onclick= "return confirm('ma hubtaa inaad delete gareyneyso xogtaan')"><i class="fa fa-trash"></i></a>
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