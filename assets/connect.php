<?php
$servername = "remotemysql.com";
$username = "gQvQ0qIoDC";
$password = "4HAPys5ynL";
$dbname = "gQvQ0qIoDC";

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

?>     
