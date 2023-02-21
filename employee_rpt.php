<?php include("main-folder/connection.php");
$id=$_GET['idd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Report</title>
    <?php include("main-folder/head.php");?>
    <style>
        body{
            background: grey;
        }
        .container{
            background:#fff;
            height: 900px;
        }
        #sawir img{
            width:100%;
            height:250px ;
        }
    </style>
</head>
<body onload="window.print()">
    <div class ="container">
<div class="row" id="sawir">
    <img src="dist/img/photo2.png">
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
                    
                  </tr>
                  </thead>
                  <tbody>
                   
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
               

       

                   
                        </tr>
                   <?php
                    }
                    ?>
               </tbody>
                </table>
              </div>
</div>
    </div>
</body>
</html>