<?php
require_once 'connect.php';
include ('connect.php');
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
$sql = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
    echo "You are logged in";
}else {
    echo "Login Failed";
}
}
?>
<html>
<head>
<title>Login</title>
</head>

<body>
<header>
  <div class="container">
    <figure><img src="images/header-img.jpg"></figure>
    <h1><a href="#"></a></h1>
    <ul class="top-menu">
      <li><a href="login.php">Login</a></li>
      <li class="last"><a href="#">FAQ</a></li>
    </ul>
    <form action="#" id="search-form">
      <fieldset>
        <div class="rowElem"> <span>
          <input type="text">
          </span> <a href="#"><img src="images/button-search.gif"></a> </div>
      </fieldset>
    </form>
    <nav>
      <ul>
        <li><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m1','','images/m1-act.gif',1)"><img src="images/m1.gif" id="m1"></a></li>
        <li><a href="about-us.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m2','','images/m2-act.gif',1)"><img src="images/m2.gif" id="m2"></a></li>
        <li><a href="articles.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m3','','images/m3-act.gif',1)"><img src="images/m3.gif" id="m3"></a></li>
        <li><a href="contact-us.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m4','','images/m4-act.gif',1)"><img src="images/m4.gif" id="m4"></a></li>
        <li><a href="sitemap.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m5','','images/m5-act.gif',1)"><img src="images/m5-act.gif" id="m5"></a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="container">
<form action="" method="post">
<label>User Name :</label>
<input type="text" name="username" /><br />
<label>Password</label>
<input type="password" name="password" /><br />
<input type="submit" value="Login" name="submit"/>
</form>
</div>
<?php
 
?>
</body>
</html>