<?php
session_start();

if ($_SESSION['user']['rol'] === "administrator") {
    if(isset($_SESSION["user"])){
        echo "Welkom ".$_SESSION["user"]["naam"]. " op de website";
    } else {
        header ('location: admin.php');
    }
    echo "<br><a href='index.php'>Loguit</a>";

} else {
    header("Location: index.php");
}