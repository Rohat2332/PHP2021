<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "administrator") {
echo"Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website ";
echo "<br><a href='index.php'>Terug</a>";
} else {
header('location: admin.php');
}