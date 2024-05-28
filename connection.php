<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "blood";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>