
<?php  include("login_session.php");?> 
<?php
include("main-folder/connection.php");
  
  ?>

 
<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hayaan Hospital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .login-box .card{
     height: 400px;
     border-radius:30px;
     border: 2px dashed blue;
     overflow:hidden;
    }
  </style>
  </head>
  <body class="hold-transition login-page bg-gray">
<div class="login-box bg-black">
  <div class="login-logo">
    <a href=""><b>Hayan Hospital</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please Enter Username & Password</p>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" name="btnlogin" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

       <?php

if(isset($_POST['btnlogin'])){
  $user = mysqli_query($conn, "SELECT * FROM class WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
  if(mysqli_num_rows($user) > 0){
    $us = mysqli_fetch_array($user);

    $usern = $us['username'];
    $_SESSION['userid'] = $us['id'];
    $_SESSION['username'] = $usern;
    $_SESSION['usertype'] = $us['usertype'];

    echo "<script>window.location='index.php'</script>";
  }else{
    echo "<br>";
    echo "<h1 class='btn btn-success' style='width:100%'>Invalid Username or Password</h1>";
  }
}

  // if(isset($_POST['btnlogin'])){

  //     $username = $_POST['username'];
  //     $password = $_POST['password'];



  //     $checkQuery = "SELECT * FROM class WHERE username = '$username' and password = '$password' ";

  //     $result = $conn->query($checkQuery);

  //     if(mysqli_num_rows($result) > 1){
  //       echo "Login successfully";
        

  //       $_SESSION["username"] = $username;
  //       header("location: index.php");

  //     }

  //     else {
  //       echo "<br>";
  //       echo "<h1 class='btn btn-success' style='width:100%'>Invalid Username or Password</h1>";
        
  //     }
  //   }
      //   if(isset($_POST['btnlogin'])){

            
      //    $username = mysqli_query($conn,"SELECT * FROM class WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
      //     if(mysqli_num_rows($username)>0){
      //   $username = mysqli_fetch_array($username);
           
      //       $username = $username['username'];
      //       $_SESSION['user_id'] = $username['id'];
      //       $_SESSION['username'] = $username;
      //       $_SESSION['usertype'] = $usertype['usertype'];
      //       echo "<script>window.location='index.php'</script>";
      //     }else{
      //       echo "<br>";
      //     //   echo "<h1 class='btn btn-success' style='width:100%'>Invalid Username or Password</h1>";
      //     // }
      //   }
      // }
        ?> 
      

      <!-- /.social-auth-links -->
      </div>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>













