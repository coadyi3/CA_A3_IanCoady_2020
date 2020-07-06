<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Club | Insert Car</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script src="js/rollover.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>
<body id="page6" onLoad="MM_preloadImages('images/m1-act.gif','images/m2-act.gif','images/m3-act.gif','images/m4-act.gif','images/m5-act.gif')">

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
        <li><a href="contact-us.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m4','','images/m4-act.gif',1)"><img src="images/m4.gif" id="m4"></a></li>
        <li><a href="sitemap.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('m5','','images/m5-act.gif',1)"><img src="images/m5.gif" id="m5"></a></li>
		</ul>
    </nav>
  </div>
</header>

<div id="content"> 
    <div class="container">
    <h2> Insert a Car</h2>

    <form method="GET" action="carInsert.php">
        <select name="make" onchange="">
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat">Fiat</option>
            <option value="Audi">Audi</option>
            <option value="Ford">Ford</option>
            <option value="Renault">Renault</option>
            <option value="Suburu">Suburu</option>
          </select><br><br>
        Purchase Type:<br>  <input type="radio" name="purchaseType" id="new" value="new" onclick="newCar();" required>New    <input type="radio" name="purchaseType" id="used" value="used" onclick="usedCar()">Used<br><br>
        Model:<br>          <input type="text" name="model" id="model" size=30 required><br><br>
        Colour:<br>
        <select name="color" id="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="black">Black</option>
            <option value="white">White</option>
            <option value="grey">Grey</option>
            <option value="pink">Pink</option>
            <option value="purple">Purple</option>
            <option value="orange">Orange</option>
        </select><br>
        Year:<br>           <input type="number" name="year" id="year" value=2020 onchange="checkYear(this);" size=4 required ><br><br>
        Type:<br>           <input type="radio" name="type" value="saloon" checked>Saloon	<input type="radio" name="type" value="hatchback">Hatchback		<input type="radio" name="type" value="Coupe">Coupe		<input type="radio" name="type" value="estate">Estate		<input type="radio" name="type" value="7 Seater">7 Seater
        <br><br>
        Doors:<br>
        <select name="doors" id="doors" required>
            <option value="3">3</option>
            <option value="5">5</option>
        </select><br><br>
        Engine Size:<br>    <input type="text" name="cc" id="cc" size=30 required><br><br>
        Fuel type *:<br>
                            <input type="radio" name="fuel" value="petrol" checked>Petrol<br><br>
                            <input type="radio" name="fuel" value="deisel">Deisel<br><br>
        Phone Number:<br>   <input type="text" name="phone" id="phone" size=30 required><br><br>
        Email:<br>          <input type="text" name="email" id="email" size=30 required><br><br>
                            <input type="submit" value="Submit"> <input type=reset>
    </form>
    </div>
</div>
<br><br>

<script type="application/javascript">
    function newCar(){
        var yearBox = document.getElementById("year");
        yearBox.value = 2020;
        yearBox.disabled = true;
    }

    function usedCar(){
        var yearBox = document.getElementById("year")
        yearBox.value = "";
        yearBox.disabled = false;
    }

    function checkYear(input){
        if(input.value < 1930) input.value = 1930;
        if(input.value > 2019) input.value = 2019;
    }
</script>

<footer>
  <div class="footerlink">
      <p class="lf">Copyright &copy; 2020 <a href="index.html">Car Club</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</footer>

</body>
</html>