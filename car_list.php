<?php

 ob_start();

 session_start();

 require_once 'dbconnect.php';

 

 // if session is not set this will redirect to login page

 if( !isset($_SESSION['user']) ) {

  header("Location: index.php");

  exit;

 }

 // select logged-in users detail

 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cr11_lorand_kovacs_php_car_rental";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the publisher table
$sql = "SELECT id, model, manifacturer, zip_id FROM car";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Manifacturer: " . $row["manifacturer"] . " - Model: " . $row["model"] . " - District: " . $row["zip_id"] . "<br>"; 
	}
} else {
	echo "0 results";
}
?>
<!DOCTYPE html>

<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<head>

<title>Welcome - <?php echo $userRow['userEmail']; ?></title>

</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-sm-4">

            Hi' <?php echo $userRow['userEmail']; ?>

            <a href="home.php?home">Go back to Home page</a>

            <a href="logout.php?logout">Sign Out</a>

   
</div></div></div>
         

   

</body>

</html>

<?php ob_end_flush(); ?>