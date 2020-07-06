<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Club | Available Cars</title>
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

<div class="container">
<br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Type:
        <select name="type" id="type">
            <option value="all">All</option>
            <option value="new">New</option>
            <option value="used">Used</option>
        </select><br><br>
        <input type="submit" value="Search"/>
    </form>
<?php
require 'connect.php';

$purType= $_POST["type"] ?? 'all';

if($purType == "all") {
    $result = mysqli_query($connection, "SELECT vehicles.*, usedcars.year, newcars.year FROM ((vehicles left JOIN usedcars ON vehicles.id = usedcars.vehicleID) left JOIN newcars ON vehicles.id = newcars.vehicleID)") or die("SELECT Error: " . mysqli_error($db));
    $num_rows = mysqli_num_rows($result);

    echo "<br><br><br><br>";
    echo "Available cars: <br><br>";

    echo "<table width=900 border=1>";
    echo "<tr><td>ID</td><td>Make</td><td>History</td><td>Model</td><td>Colour</td><td>Type</td><td>Doors</td><td>Engine Size</td><td>Fuel Type</td><td>Phone</td><td>Email</td><td>Used Car Year</td><td>New Car Year</td>";


    while ($get_info = mysqli_fetch_row($result)) {
        echo "<tr>";

        foreach ($get_info as $field)
            echo "<td>$field</td>";
        echo "</tr>";
    }
}

if($purType == "new") {
    $result = mysqli_query($connection, "SELECT vehicles.*, newcars.year FROM vehicles left JOIN newcars ON vehicles.id = newcars.vehicleID where newcars.year = 2020") or die("SELECT Error: " . mysqli_error($db));
    $num_rows = mysqli_num_rows($result);

    echo "<br><br><br><br>";
    echo "Available cars: <br><br>";

    echo "<table width=900 border=1>";
    echo "<tr><td>ID</td><td>Make</td><td>History</td><td>Model</td><td>Colour</td><td>Type</td><td>Doors</td><td>Engine Size</td><td>Fuel Type</td><td>Phone</td><td>Email</td><td>New Car Year</td>";


    while ($get_info = mysqli_fetch_row($result)) {
        echo "<tr>";

        foreach ($get_info as $field)
            echo "<td>$field</td>";
        echo "</tr>";
    }
}

if($purType == "used") {
    $result = mysqli_query($connection, "SELECT vehicles.*, usedcars.year FROM vehicles left JOIN usedcars ON vehicles.id = usedcars.vehicleID where usedcars.year < 2020") or die("SELECT Error: " . mysqli_error($db));
    $num_rows = mysqli_num_rows($result);

    echo "<br><br><br><br>";
    echo "Available cars: <br><br>";

    echo "<table width=900 border=1>";
    echo "<tr><td>ID</td><td>Make</td><td>History</td><td>Model</td><td>Colour</td><td>Type</td><td>Doors</td><td>Engine Size</td><td>Fuel Type</td><td>Phone</td><td>Email</td><td>Used Car Year</td>";


    while ($get_info = mysqli_fetch_row($result)) {
        echo "<tr>";

        foreach ($get_info as $field)
            echo "<td>$field</td>";
        echo "</tr>";
    }
}
    echo "</table>";
mysqli_close($connection);
?>
<br><br><br>
</div>
<footer>
  <div class="footerlink">
      <p class="lf">Copyright &copy; 2020 <a href="index.html">Car Club</a> - All Rights Reserved</p>
    <div style="clear:both;"></div>
  </div>
</footer>

</body>
</html>