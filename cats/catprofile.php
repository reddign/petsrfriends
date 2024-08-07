<?php
//include "includes/header.php";
$animalid = $_GET["animal"];
?>

<BR><BR><BR>

<?php 
//echo $regionid; 
//get the region name
$sql = "SELECT animal_name FROM animals
where animal_id={$animalid} ;";
$mysqli = new mysqli("195.35.59.14","u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
echo "<H1>";
echo $rows[0]["animal_name"];
echo "</H1>";
//send region to database and get countries
$sql = "SELECT * FROM animals
where region_id={$regionid} ;";
$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);
//print_r($rows);
?>
 <table class="w3-table-all w3-hoverable" >
    <thead>
    <tr style="background-color: skyblue;">
        <th>Country Name</th>
        <th>Location</th>
        <th>Capitol</th>
    </tr>
    </thead>
    <tbody>
<?PHP
foreach($rows as $row){
    echo "<tr><td>";
    $c=$row["COUNTRY_ID"];
    echo "<a href='country.php?countryid={$c}'>";
    echo $row["COUNTRY_NAME"];
    echo "</a>";
    echo "</td><td>";
    echo $row["LOCATION"];
    echo "</td><td> ";
    echo $row["CAPITOL"];
    echo "</td></tr>";
}
    ?>
    </tbody>
</table>


<?php
include "includes/footer.php";
?>
