<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets R Friends</title>

    
    <?php

        //copy region.php code to get countries but switch to animals


//$mysqli = mysqli_connect("127.0.0.1","root","","mca");
$mysqli = new mysqli("195.35.59.14", "u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");


$sql = "SELECT * FROM animal
where animal_type='Cat' ;";


$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);

?>



    <div class="flex-container">
        
    <?php
    foreach($rows as $animal){
      
 
    ?>
        <a href="catprofile.php?animal_id=<?php echo $animal["animal_id"]; ?>"><div class="product">
<?php

            $animalid = $animal["animal_id"];
            if(is_file("cats/{$animalid}.png")){

            echo "<img src='cats/{$animalid}.png' width='200px'>";

            }else{
            echo "<img src='cats/comingsoon.png' width='200px'>";

            }
?>
            
            <p class="name"><b><?php echo $animal["Animal_Name"]; ?></b></p>
            <p><?php echo $animal["Animal_Gender"]; echo " "; echo $animal["Size"]; ?></p>
        </div></a>
    <?php
        }

    ?>


       
    </div>

    <p>Select a friend to adopt and choose an adoption date!</p>
    
    </body>
</html>