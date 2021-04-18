<?php
$db = new mysqli("localhost","root","","phpschool","3306");
$sql = "SELECT naam FROM cursist";
$output = mysqli_query($db, $sql);
echo "<table border='1'><tr>";
while ($data = mysqli_fetch_array($output)) {
    echo "<td>" . $data['naam'] . "</td>";
}
echo "</tr></table><br>";
include("C:/wamp64/www/PHP/H6/login.php");