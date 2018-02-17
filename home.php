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

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>

</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4">


            Hi' <?php echo $userRow['userEmail']; ?>

            <a href="office_list.php?office_list">List of our offices</a>

            <a href="car_list.php?car_list">List of our cars</a>

            <a href="cars_locations.php?cars_locations">List of our cars with their locations</a>

            <a href="logout.php?logout">Sign Out</a>

   

   </div></div></div>      

   

</body>

</html>

<?php ob_end_flush(); ?>

