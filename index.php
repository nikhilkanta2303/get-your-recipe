<?php

$conn = new mysqli('localhost','root','','cgcidea');
if($conn->connect_error){
    echo "<br>connection error";
}
error_reporting(0);
$r = " ";
$r = $_POST['recipe'];
$query ="select * from recipes where ig1='$r' OR ig2='$r' OR ig3='$r' OR ig4='$r';";
$result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Recipies</title>
    <link rel="stylesheet" href="style.css">
    <script src="code.js"></script>
</head>
<body style="background-image: url('back.jpeg');background-size:cover;background-repeat:no-repeat;">
    <br><br>
    <h1 style="font-family:consolas;text-align:center;color:white;border-radius:20px;padding:5px;font-size:3rem;">Get Your Recipes Here</h1>
    <div id="top" >
        <form action="" method="POST" id="frm">
            <center>
        <input type="text" name="recipe" id="searchbar" value="Enter an Ingredient">
        <input type="submit" value="Search" id="srch"><br><br>
        <button id="guide"><a href="items.html">Recipes Guide</a></button><br><br>
        </center>
        </form>
</div>
<br>
<br>
<div id="displaymenu">
    <center>
    <table cellspacing="30" style="text-align:center;background-color: rgba(255, 255, 255, 0.418);border-radius:23px;width:40%">
        <tr>
            <th>RECIPE LIST</th>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            ?>
        <td><a id="itopen"><?php echo $row['rname'] ?></a></td>
        </tr>
            <?php
        }
        ?>
    </table>
    </center>
    </div>
    <script src="script.js"></script>
</body>
</html>