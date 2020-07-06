<html><head><title>Insert Car Record</title></head>
<body>
<?php
include 'connect.php';

if($connection->connect_errno > 0){
    die('Error : ('. $connection->connect_errno .') '. $connection->connect_error);
}
$unique_id_length = 8;

$unique_id_found = false;

$possible_chars = "1234567890";

while (!$unique_id_found)
{
    $unique_id = "";
    $i = 0;
    while ($i < $unique_id_length) {

        // Pick a random character from the $possible_chars list
        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);

        $unique_id .= $char;

        $i++;

    }

    $result = mysqli_query($connection,"SELECT 'id' FROM vehicles 
              WHERE 'id' = '$unique_id'") or die("Insert Error: ".mysqli_error($db));
    if (mysqli_num_rows($result)==0){
        $unique_id_found = true;

    }
}

$make       = $_GET['make'];
$purType    = $_GET['purchaseType'];
$model      = $_GET['model'];
$color      = $_GET['color'];
$year       = $_GET['year'] ?? "2020";
$type       = $_GET['type'];
$doors      = $_GET['doors'];
$cc         = $_GET['cc'];
$fuel       = $_GET['fuel'];
$phone      = $_GET['phone'];
$email      = $_GET['email'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $email = $_GET['email'];
} else {
    $email = "ERROR: Invalid Email";
}

if($purType == "new") {
    $result = mysqli_query($connection, "INSERT INTO vehicles 
    (id, make, purType, model, colour, type, doors, engine, fuel, phone, email) 
    VALUES 
    ('$unique_id','$make','$purType', '$model', '$color', '$type', '$doors', '$cc', '$fuel', '$phone', '$email')")
    or die("Insert Error: " . mysqli_error($connection));

    $result = mysqli_query($connection, "INSERT INTO newcars
    (vehicleID, year)
    VALUES
    ('$unique_id', '$year')")
    or die("Insert Error: " . mysqli_error($connection));
    
}

else{
    $result = mysqli_query($connection, "INSERT INTO vehicles 
    (id, make, purType, model, colour, type, doors, engine, fuel, phone, email) 
    VALUES 
    ('$unique_id','$make','$purType', '$model', '$color', '$type', '$doors', '$cc', '$fuel', '$phone', '$email')")
    or die("Insert Error: " . mysqli_error($connection));

    $result = mysqli_query($connection, "INSERT INTO usedcars
    (vehicleID, year)
    VALUES
    ('$unique_id', '$year')")
    or die("Insert Error: " . mysqli_error($connection));
}

mysqli_close($connection);

?>

<form method="POST" action="carInsert_Form.php">
    <input type="submit" value="Insert Another Car">
</form>

<form method="POST" action="logout.php">
    <input type="submit" value="Logout">
</form>

<form method="POST" action="availableCars.php">
    <input type="submit" value="View Availble Cars">
</form>

</body>
</html>
