<?php
//includes "includes/header.php";
$animalid = $_GET["animal_id"];
?>




<?php
$sql = "SELECT * FROM animal
where animal_id={$animalid} ;";
//$mysqli = new mysqli("127.0.0.1","root","","mca");
$mysqli = new mysqli("195.35.59.14", "u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");

if ($mysqli->connect_errno){
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}


$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
echo "<H1>";
echo $rows[0]["Animal_Name"];
echo "</H1>";

echo "<b>Gender</b>: ";
echo $rows[0]["Animal_Gender"];
echo "<BR><BR>";

echo "<b>Date of Birth</b>: ";
echo $rows[0]["Est_Birth_Date"];
echo "<BR><BR>";

echo "<b>Animal Type</b>: ";
//echo $rows[0]["CLIMATE"];
// echo htmlentities($rows[0]["Animal_Type"]);
echo htmlentities($rows[0]["Animal_Type"]);
echo "<BR><BR>";

echo"<b>Color</b>: ";
echo $rows[0]["color"];
$currencyid = $rows[0]["coat_length"];

$sql = "SELECT * FROM animal where
animal_id in (
SELECT animal_id FROM animal
where animal_id={$animal_id} );";
$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
// echo "<BR>";
// echo "<b>Languages</b>:<BR>";

foreach($rows as $row){
    echo $row["Animal_Name"];
    echo "<BR>";
}

//print_r($rows);

//currencies

$sql = "SELECT * FROM animal
where Animal_Name='{$Animal_Name}' ;";

$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);

// echo "<BR>";
// echo "<b>Currency</b>:<BR>";

echo $rows[0]["Est_Birth_Date"];

//print_r($rows);
//currency sql
//print_r($rows[0]);


//<BR> <BR>
?>

<?php
//include "includes/footer.php";
?>