<?php
require "constants.php"; 
$servername = '127.0.0.1:3307';
$username = 'root';
$pass = '';
$dbname = 'blog_db';


$conn = new mysqli($servername, $username, $pass, $dbname);

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}
?>

