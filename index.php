<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets R Friends</title>

    <style>

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

          /* background-color: DodgerBlue; */
        }
        


        img {
            margin-top: 20px;
            height: 100px;
            width: 100px;
        }

        .flex-container  > a > div:hover {
                background: #fff;
                border: 3px solid #c3e6ff;
                text-decoration: none;
        }

        .flex-container > a > div {
          background-color: #f1f1f1;
          width: 200px;
          margin: 10px;
          padding: 20px;
          text-align: center;
          line-height: 15px;
          font-size: 20px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>

</head>
<header>
    <h1><a href="google.com">Pets R Friends</a></h1>
</header>
<br>
<body>
    <h1>Our Dogs</h1>
    <?php

        //copy region.php code to get countries but switch to animals


//$mysqli = mysqli_connect("127.0.0.1","root","","mca");
$mysqli = new mysqli("195.35.59.14", "u121755072_petsrfriends","#v4ZxLBaL2","u121755072_petsrfriends");


$sql = "SELECT * FROM animal
where animal_type='Dog' ;";


$result = $mysqli -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);

?>



    <div class="flex-container">
        
    <?php
    foreach($rows as $animal){
      
 
    ?>
        <a href="profilepage.php?animal_id=<?php echo $animal["animal_id"]; ?>"><div class="product">
<?php

            $animalid = $animal["animal_id"];
            if(is_file("imageFolder/{$animalid}.jpg")){

            echo "<img src='imageFolder/{$animalid}.jpg' width='200px'>";

            }else{
            echo "<img src='imageFolder/comingsoon.jpg' width='200px'>";

            }
?>
            
            <h5><?php echo $animal["Animal_Name"]; ?></h5>
            <h6>$400</h6>
        </div></a>
    <?php
        }

    ?>


       
    </div>

    <p>Select a friend to adopt and choose an adoption date!</p>
    <p>A container with "flex-wrap: nowrap;" will never wrap its items.</p>
    <p><strong>Note:</strong> Flexbox is not supported in Internet Explorer 10 or earlier versions.</p>
    
    </body>
</html>