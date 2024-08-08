<?php
include "includes/header.php"
?>
<style>
header {
    text-align: center;
}
body {
    background-image: url('images/catdog.jpg')
}
h1 {
    text-align: center;
    font-size: 25px;
    color: whitesmoke;
    
}
h1 span {
    background-color: rgba(126, 81, 8, 0.30);
}
p span {
    background-color: rgba(126, 50, 8, 0.75);
}
p {
    text-align: left;
    font-size: 25px;
    color: whitesmoke;
    display: inline;
}
.box_textshadow {
    text-shadow: 2px 2px 0px #463119; /* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
}
.fun {
    display: block;
    margin-left: 50;
    margin-right: auto;
    display: inline-block;
    width: 400px;
    height: 350px;
    padding: 0px;
}
.fun2 {
    display: block;
    margin-left: auto;
    margin-right: 50;
    display: inline-block;
    width: 400px;
    height: 350px;
    padding: 0px;
}
.fun3 {
    margin-left: 575;
    margin-right: auto;
    margin-top: 0;
    width: 400px;
    height: 350px;
    padding: 0px;
}
.container {
    position: relative;
    text-align: center;
    color: white;
    }
    .bottom-left {
    position: absolute;
    bottom: -80px;
    left: 110px;
    color: whitesmoke;
    font-size: 30px;
    }
    .bottom-left2 {
    position: absolute;
    bottom: -80px;
    left: 525px;
    color: whitesmoke;
    font-size: 30px;
    }
    .bg {
    background-color: #C70039;
    padding: 3px; /*adds space around text*/
    }
    img {
    transition: box-shadow 0.3s ease;
    border-style: ridge;
    border-width: 10px;
    border-color: #bc6c25;
    padding: 0;
    }
    img:hover { 
    box-shadow: 6px 6px 12px rgba(0, 0, 0, 0.6); 
    } 
    a {
        color: orange;
    }
    .center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
</style>

<h1 class="box_textshadow"><span>As of right now, we are not accepting donations. Your smiles are more than enough!</span></h1>
<img src="images/dollacat.jpg" class="center" style="height:350px;width:500;">

<?php
include "includes/footer.php"
?>