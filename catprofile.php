<?php
//includes "includes/header.php";
$animalid = $_GET["animal_id"];
?>

<style>
    
    p {
        color: #686A4E;
    }
    H1 { 
        font-weight: "bold";
        font-size: 5em;
        font-family: "Segoe Script";
        margin-bottom: 10px;
        color: #B2AC88;
    }
    .name {
        font-size: 25px;
        margin: 20px;
        text-align: center;
        font-family: "system-ui";
    }
    header {
        text-align: center;
        text-decoration: none;
    }
    body {
        background-color:beige;
        text-align: center;
        text-decoration: none;
    }

    a {
        text-decoration: none;
        text-decoration-color: brown;
    }

    .product {
        color: brown;
        text-decoration-color: brown;    
    }

    .flex-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      border-radius: 10px;
      /* background-color: DodgerBlue; */
    }
    



    img {
        margin-top: 5px;
        height: 200px;
        width: 200px;
        object-fit: cover;
        border: 2px black;
        border-radius:5px;
    }
    

    .flex-container  > a > div:hover {
            /* border: 3px solid #808000; */
            text-decoration: none;
            box-shadow: 0 0 30px #DD9927;
            -ms-transform: scale(1); /* IE 9 */
            -webkit-transform: scale(1); /* Safari 3-8 */
            transform: scale(1.1); 
`          }
    


    .flex-container > a > div {
      background-color: #fbf7f5;
      width: 200px;
      margin: 10px;
      padding: 20px;
      text-align: center;
      line-height: 15px;
      font-size: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 20px;
      transition: transform .5s;
    }
</style>


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
echo htmlentities($rows[0]["Animal_Type"]);
echo "<BR><BR>";

echo"<b>Color</b>: ";
echo $rows[0]["color"];
echo "<BR><BR>";

echo"<b>Coat Length</b>: ";
echo $rows[0]["coat_length"];
echo "<br><br>";

echo "<b>Date of Rescue</b>: ";
echo $rows[0]["date_of_rescue"];
echo "<BR><BR>";

echo "<BR>";

echo "<BR>";


if(is_file("cats/{$animalid}.png")){

    echo "<img src='cats/{$animalid}.png' width='200px' height='200px' >";

}else{
    echo "<img src='cats/comingsoon.png' width='200px'>";

}

//print_r($rows);
//currency sql
//print_r($rows[0]);


//<BR> <BR>
?>

<?php
//include "includes/footer.php";
?>