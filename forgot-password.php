<?php session_start();
include "connect.php"; //connects to the database
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $query="select * from `admin` where username='$username'";
    $result   = mysqli_query($connection, $query);


    $count=mysqli_num_rows($result);
    // If the count is equal to one, we will send message other wise display an error message.
    if($count==1)
    {
        $rows=mysqli_fetch_array($result);
        $pass  =  $rows['password'];
        $to = $rows['email'];
        $from = "Car Club";
        $body  =  "Car Club password recovery Script<br>
        -----------------------------------------------<br>
        
        Email Details is : $to;<br>
        Here is your password  : $pass;<br><br>
        Sincerely,<br>
        Car Club<br>";
        $subject = "Car Club Password recovered";
        $headers1 = "From: $from\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $headers1 .= "X-Priority: 1\r\n";
        $headers1 .= "X-MSMail-Priority: High\r\n";
        $headers1 .= "X-Mailer: Just My Server\r\n";
        $sentmail = mail( $to, $subject, $body, $headers1 );
    }

    else {
        if ($_POST ['email'] != "") {
            echo "\"<script type='text/javascript'>alert('Not found your email in our database');</script>\";.";
        }
    }
    //If the message is sent successfully, display success message otherwise display an error message.
    if($sentmail==1){
        echo "\"<script type='text/javascript'>alert('Your Password Has Been Sent To Your Email Address.');</script>\";.";
    }
}
?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<title>Car Club - forgot Password</title>
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
    <h1>Forgot Password</h1>
    <form action="" method="POST">
        <p><label>User Name : </label>
        <input id="username" type="text" name="username" placeholder="username" /></p>

        <input class="btn register" type="submit" name="submit" value="Submit" />
        </form>
</div>
</div>

</body>
</html>