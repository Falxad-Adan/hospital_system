 <?php 
session_start();
if(!empty($_POST)){
include("main-folder/connection.php");
extract($_POST);
$sql= "call user_login('$username','$password')";
$res= $conn->query($sql);
if($res){
  $rs=$res->fetch_assoc();
  if($rs['msg']=='success'){
  $_SESSION['id']=$rs['id'];
  $_SESSION['username']=$rs['username'];
  $_SESSION['usertype']=$rs['usertype'];

  header("location: index.php");
  
  

}else{
  echo $conn->error;
}

}
}
?> 

