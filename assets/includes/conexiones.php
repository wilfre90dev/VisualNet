<?php
$servername = "localhost";
    $username = "root";
    $password = "wilfr3do.admin";
    $dbname = "web";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, "jovenclub");
?>