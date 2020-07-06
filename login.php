<?php
session_start();
require('connect.php');
include('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $count = mysqli_num_rows($result);
    if ($count == 1){
        $_SESSION['username'] = $username;
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials');</script>";
    }
}

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello " . $username . ". ";
    echo "This is the Admin Area. Please proceed to this link to add a car to the website --->";
    echo "<a href='carInsert_Form.php'>Here!</a>";
}

else{ 

?>
<!DOCTYPE html>
 <head>
<title>Car Club | Login</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<header>
  <div class="container">
    <figure><img src="images/header-img.jpg"></figure>
    <h1><a href="#"></a></h1>
    <ul class="top-menu">
      <li><a href="login.php">Login</a></li>
    </ul>
    <nav>
      <ul>
        <li><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m1','','images/m1-act.gif',1)"><img src="images/m1.gif" id="m1"></a></li>
        <li><a href="about-us.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m2','','images/m2-act.gif',1)"><img src="images/m2.gif" id="m2"></a></li>
        <li><a href="articles.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m3','','images/m3-act.gif',1)"><img src="images/m3.gif" id="m3"></a></li>
        <li><a href="contact-us.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m4','','images/m4-act.gif',1)"><img src="images/m4.gif" id="m4"></a></li>
        <li><a href="sitemap.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m5','','images/m5-act.gif',1)"><img src="images/m5.gif" id="m5"></a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
 <div class="container">
<h1>Login</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>

     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>

    <a class="btn" href="register.php">Signup</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="btn register" type="submit" name="submit" value="Login" /> &nbsp;&nbsp;&nbsp;
    <a class="btn" href="forgot-password.php">Forgot Password</a>
    </form>
</div>
</div>
<?php } ?>
</body>
</html>