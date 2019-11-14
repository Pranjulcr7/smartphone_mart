<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign Up Page</title>
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
  font-size: 90px;
  font-weight: 800;
  letter-spacing: -3px;
  line-height: 1;
  text-shadow: #EDEDED 3px 2px 0;
  position: relative;
}
#logo:after {
  content:"SmartphoneMart";
  position: absolute;
  left: 8px;
  top: 32px;
}
#logo:after {
  /*background: url(https://subtlepatterns.com/patterns/crossed_stripes.png) repeat;*/
  background-image: -webkit-linear-gradient(left top, transparent 0%, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
  background-size: 4px 4px;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  z-index: -5;
  display: block;
  text-shadow: none;
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
#menu li:before {
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
}

body{
  background: url(images/img2.png) no-repeat center fixed;
  background-size: cover;

}  </style>
  


</head>
<body>

  <?php
    error_reporting(E_ERROR);

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $ID = $_POST['UID'];
            $PASSWORD = $_POST['password'];
            $NAME = $_POST['name'];
            $SEX = $_POST['sex'];
            $PHONE = $_POST['phoneno'];
            $ADDRESS = $_POST['address'];
            $EMAIL = $_POST['email_id'];

          $con = mysqli_connect("localhost","root","","online_smartphone");
                       
        }
      $query = "INSERT INTO User (user_id, password, name, sex, phone_number, shipping_address, email) VALUES ('$ID', '$PASSWORD', '$NAME', '$SEX', '$PHONE', '$ADDRESS', '$EMAIL')";
                        $result = mysqli_query($con,$query);
                        if($result){
       echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('You are registered successfully');
         window.location.href='login.php';
           </SCRIPT>");
                  }
        ?>


  
  <div id="main-wrapper">
    <div class="navbar">
  <div id="header" align='center'>
  <a href="/" id="logo">SmartphoneMart</a>
  <ul id="menu">
  </ul>
</div>
    
    </div style="margin-left: 0px;margin-top: -50px;padding-top: 0px" >
    <div class="template-page-wrapper" style="color:orange">
      <form class="form-horizontal templatemo-signin-form" role="form" action="" method="POST" style="margin-top: -50px;padding-top: 0px;
      margin-left: 190px; margin-top: 30px">
        <div class="form-group">
          <div class="col-md-12">
            <label for="UID" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="UID" placeholder="User ID" name = "UID">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
          </div>
        </div>
          <div class="form-group">
          <div class="col-md-12">
            <label for="Department" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Full Name" name ="name">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="Department" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sex" placeholder="sex" name ="sex">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="Phone Number" class="col-sm-2 control-label">
              
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="phoneno" placeholder="Phone Number" name="phoneno">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="address" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="address" placeholder="Shipping Address" name="address">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="email" class="col-sm-2 control-label">
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email_id" placeholder="Email Id" name="email_id">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Sign up" class="btn btn-lg btn-danger btn-block" style="width: 460px; margin-left: 10px;margin-right: 40px" >
            </div>
            <a href="login.php"
          style="color: white ;font-family: courier; font-weight: oblique;
          font-size: 160%;text-shadow: 1px 1px green;margin-left: 250px"><i>
           Already a user? Login
         </i>
         </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>