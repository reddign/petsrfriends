<?php

//print_r($_POST);
//Get data from the posted variables
$email = $_POST["email"];
$first = $_POST["first"];
$last = $_POST["last"];
$zip = $_POST["zip"];
$password = $_POST["password"];


$sql = "INSERT INTO users 
(email,first,last,zip,password)
VALUES
('{$email}','{$first}','{$last}',
'{$zip}',MD5('{$password}'))";

$mysqli = new mysqli("195.35.59.14","u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
$stmt = $mysqli->prepare($sql);
$stmt->execute();

// $to = $email;
// require("email.php");

header("location:index.html");

?>