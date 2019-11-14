<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="css/templatemo_main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
@import url(https://fonts.googleapis.com/css?family=Squada+One);
body {
  padding: 20px 80px;
  background: #eee url(https://subtlepatterns.com/patterns/extra_clean_paper.png);
}
#logo {
  font-family: 'Open Sans', sans-serif;
  color: #4169E1;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 70px;
  font-weight: 700;
  letter-spacing: -3px;
  line-height: 1;
  text-shadow: #EDEDED 3px 2px 0;
  position: relative;
}
  
  th, td {
    width: 450px;
      height: 180px;
      padding: 5px;
      text-align: left;
      vertical-align: middle;
      border-bottom: 1px solid #ddd;
  }
  table {
    border-collapse: collapse;
    border-spacing: 0px;
    padding: 5px;
    width: 100%;
      display:block;
      font-family: sans-serif;
  }
  #divTable{
    margin-top: 100px;
    margin: auto;
    align-content: center;
    text-align: center;
    overflow:scroll;
    height:600px;
    font-family: monospace;
  }

#menu {
  width: 1090px;
  height: 42px;
  list-style: none;
  margin: 10px 0 0 0; padding: 25px 10px;
  border-top: 4px double #AAA;
  border-bottom: 4px double #AAA;
  position: relative;
  text-align: center;
}
#menu li {
  display: inline-block;
  width: 173px;
  margin: 0 10px;
  position: relative;
  -webkit-transform: skewy(-3deg);
  -webkit-backface-visibility: hidden;
  -webkit-transition: 200ms all;
}
#menu li a {
  text-transform: uppercase;
  font-family: 'Squada One', cursive;
  font-weight: 800;
  display: block;
  background: #FFF;
  padding: 2px 10px;
  color: #333;
  font-size: 35px;
  text-align: center;
  text-decoration: none;
  position: relative;
  z-index: 1;
  text-shadow: 
        1px 1px 0px #FFF, 
        2px 2px 0px #999,
        3px 3px 0px #FFF;
    background-image: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,.05) 100%);
    -webkit-transition: 1s all;
    background-image: -webkit-linear-gradient(left top, 
        transparent 0%, transparent 25%, 
        rgba(0,0,0,.15) 25%, rgba(0,0,0,.15) 50%, 
        transparent 50%, transparent 75%, 
        rgba(0,0,0,.15) 75%);
  background-size: 4px 4px;
    box-shadow: 
        0 0 0 1px rgba(0,0,0,.4) inset, 
        0 0 20px -5px rgba(0,0,0,.4),
        0 0 0px 3px #FFF inset;
}
#menu li:hover {
    width: 203px;
    margin: 0 -5px;
}
#menu a:hover {
  color: #d90075;
}
#menu li:after,
/*#menu li:before {
  content: '';
  position: absolute;
  width: 50px;
  height: 100%;
  background: #BBB;
  -webkit-transform: skewY(8deg);
  x-index: -3;
    border-radius: 4px;
}
#menu li:after {
    background-image: -webkit-linear-gradient(left, transparent 0%, rgba(0,0,0,.4) 100%);
  right: 0;
  top: -4px; 
}
#menu li:before {
  left: 0;
  bottom: -4px;
    background-image: -webkit-linear-gradient(right, transparent 0%, rgba(0,0,0,.4) 100%);
}*/

body{
  background: url(images/img3.jpg) no-repeat center fixed;
  background-size: cover;

}  </style>
    </head>
        <div class="navbar">
          <div id="header" align='left'>
  <a href="/" id="logo">SmartphoneMart</a>
  <a href="/" id="logo" style="font-size: 32px; letter-spacing: 0px;text-transform: capitalize; align: right; margin-bottom: 10px;
   margin-left: 43px; color: green; font-family: monospace;
  text-shadow:0.5px 0.5px white; padding-left: 20px">
  <?php
    error_reporting(E_ERROR);
    session_start();    
    $user=$_SESSION['$name'];                   
  ?>
  <?php
    echo "Welcome $user";
  ?>
  </a> 
  <!-- <ul id="menu">
    
    <li>
      <input type="text" name="">
    </li>
    
    <li>
      <a href="login.php">Logout</a>
    </li>
  </ul> -->
    
    </div>
  </div>
    <body >
        <!-- <article> -->


<form class="" role="form" action="" method="POST">
    <!-- <div class="form-group">
          <div class="col-md-12"> -->
<div style="display:flex; flex-direction: row; justify-content: center;">
<input type="text" class="form-control" placeholder="Enter name to search" name="model" required="" style="width: 400px; height: 50px;
 border-radius: 20px; padding: 10px">

<!-- </div>
</div> -->
<button type="submit" class="btn btn-lg btn-success btn-block"
style="width: 180px; height: 48px; margin-left: 20px; border-radius: 40px">
 SEARCH </button>
 </div>
</form>

<?php
$conn=mysqli_connect("localhost","root","","online_smartphone");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

if(isset($_POST['model'])){
  $MODEL = $_POST['model'];
  $sql = "SELECT * FROM `Phone` WHERE 
          (model LIKE '%$MODEL%' or brand LIKE '%$MODEL%')
          and availability>=1 ORDER BY item_id DESC";
  $result = mysqli_query($conn, $sql);
?>

<?php 
if(($row = mysqli_num_rows($result))!=0) { ?>
<div id="divTable">
  <table
  style="margin: 10px; align-content: center; padding: 15px;
  border-spacing: 5px;">
<?php
while($row = mysqli_fetch_assoc($result)){ ?>
    <tr >
      <td>
        <img src="images/<?php echo $row['item_id']; ?>.jpg"
                 height="200" width="200">
      </td>
      <td>
        <h2 style="color:brown"><?php echo $row['brand'];?></h2>
        <h2 style="color:brown"><?php echo $row['model'];?></h2>
      </td>
      <td>
        <h4>Color :  <?php echo $row['color']; ?></h4>
        <h4>Ram :  <?php echo $row['ram']; ?></h4>
        <h4>Storage :  <?php echo $row['storage']; ?></h4>
        <h4>Processor :  <?php echo $row['processor']; ?></h4>
      </td>
      <td>
        <form action="" method="POST">
          <h2 style="margin-bottom: 50px; color: orange">
            Rs <?php echo $row['price']; ?>
            </h2>
          <button name="itemid" type="submit" 
          value="<?php echo $row['item_id']; ?>"
          style="align-self: center; width: 100px; height: 40px">
            Buy
          </button>
        </form>
      </td>
    </tr>
<?php  } ?>
  </table>
</div>
<?php  } 
else { ?>
    <h1 style="text-align: center;color: red">No phone found</h1>
<?php }} ?>

<?php
$conn1 = mysqli_connect("localhost","root","","online_smartphone");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

if(isset($_POST['itemid'])){
    $userid=$_SESSION['$Uid'];
    $itemid = $_POST['itemid'];
    $sql2= "SELECT * FROM `Phone` WHERE
            item_id='$itemid' and availability>=1";
    $result2= mysqli_query($conn1,$sql2);
    $count = mysqli_num_rows($result2);

    if($count!=0){
      $row=mysqli_fetch_assoc($result2);
      $itemid = $row['item_id'];
      $sql="UPDATE `Phone` SET availability=availability-1
              WHERE item_id='$itemid'";
      $result = mysqli_query($conn, $sql);
      $sql1="INSERT INTO `Purchase`(`user_id`, `item_id`) 
              VALUES ('$userid','$itemid')";
      $result1 = mysqli_query($conn, $sql1);

        echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Phone Reserved successfully');
            </SCRIPT>");
      }
      else{
        echo("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('reservation unsuccessful');
            </SCRIPT>");
      }
    }
?>
</article>
</div>
    </body>
</html>
