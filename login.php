<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users
WHERE email='{$email}' and password=MD5('{$password}') ;";

$mysqli = new mysqli("195.35.59.14","u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);


if (count($rows)>0){
    $_SESSION["LoggedIn"]="YES";
    $_SESSION["email"]=$_POST["email"];
    header("location:index.html");  //may the landing page will be different??
}else{
    //don't log them in
    $_SESSION["LoggedIn"]="NO";
    $_SESSION["UserID"]="";
    header("location:register.htm");
}


?>