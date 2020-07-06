<?php
	require('connect.php');
	include('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `admin` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Car Club - Registration</title>
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
      <li class="last"><a href="logout.php">Logout</a></li>
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
<h1>Register</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
	
	<p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input id="password" type="email" name="email" required placeholder="@email" /></p>
 
     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <a class="btn" href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="btn register" type="submit" name="submit" value="Register" />
    </form>
</div>
</div>
</body>
</html>