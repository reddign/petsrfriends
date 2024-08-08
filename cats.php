<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets R Friends</title>

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

</head>
<br>
<body>
    <h1>Our Cats</h1>
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