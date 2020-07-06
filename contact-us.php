<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Club | Contact Us</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script src="js/rollover.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, h1 a, .box');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page5" onLoad="MM_preloadImages('images/m1-act.gif','images/m2-act.gif','images/m3-act.gif','images/m4-act.gif','images/m5-act.gif')">
<header>
  <div class="container">
    <figure><img src="images/header-img.jpg"></figure>
    <h1><a href="#"></a></h1>
    <ul class="top-menu">
      <li><a href="login.php">Login</a></li>
      <li class="last"><a href="logout.php">Logout</a></li>
    </ul>
    <nav>
      <ul>
        <li><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m1','','images/m1-act.gif',1)"><img src="images/m1.gif" id="m1"></a></li>
        <li><a href="about-us.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m2','','images/m2-act.gif',1)"><img src="images/m2.gif" id="m2"></a></li>
        <li><a href="articles.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m3','','images/m3-act.gif',1)"><img src="images/m3.gif" id="m3"></a></li>
        <li><a href="contact-us.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m4','','images/m4-act.gif',1)"><img src="images/m4-act.gif" id="m4"></a></li>
        <li><a href="sitemap.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m5','','images/m5-act.gif',1)"><img src="images/m5.gif" id="m5"></a></li>
      </ul>
    </nav>
  </div>
</header>
<section id="content">
  <div class="container">
    <div class="inside">
      <div class="wrapper">
        <article class="col-1"> <img src="images/5page-title1.gif" class="title">
          <address>
          <span>Zip Code:</span>50122<br />
          <span>Country:</span>USA<br />
          <span>City:</span>New York<br />
          <span>Telephone 1:</span>+354 5635600<br />
          <span>Telephone 2:</span>+354 5635610<br />
          <span>Fax:</span>+354 5635620<br />
          <span>Email:</span><a href="#">businessco@mail.com</a>
          </address>
          </article>
        <article class="col-2"> <img src="images/5page-title2.gif" class="title">
          <form id="contacts-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
              <div class="rowElem">
                <label>Your Name:</label>
                <span>
                <input type="text" name="name" id="name">
                </span> </div>
              <div class="rowElem">
                <label>Your E-mail:</label>
                <span>
                <input type="email" name="email" id="email">
                </span> </div>
              <div class="txt_area">
                <label>Your Message:</label>
                <span>
                <textarea name="message" id="message" cols="1" rows="1"></textarea>
                </span> </div>
              <div class="alignright"><input type="submit" value="Submit"/> </div>
            </fieldset>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>

<?php
require 'connect.php';

$name =     $_POST['name'] ?? '';
$email =    $_POST['email'] ?? '';
$message =  $_POST['message'] ?? '';

if($name == '' || $email == '' || $message == '' ) {
    echo '<script type="text/javascript">';
    echo ' alert("Please fill in the boxes.")';
    echo '</script>';
}

else{
    mysqli_query($connection, "
    INSERT into ContactForm 
    (name, email, message) 
    values 
    ('$name', '$email','$message')") or die("Insert Error: " . mysqli_error($connection));

    echo '<script type="text/javascript">';
    echo ' alert("Thank you for your feedback!.")';
    echo '</script>';
}
?>

<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2020 <a href="index.html">Car Club</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</footer>

</body>
</html>