<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   $user_id = $_SESSION['user_id'];
}

$dbserver = 'localhost';
$dbuser   = 'root';
$dbpswrd  = '';
$dbname   = 'social_media';


$conn = mysqli_connect($dbserver,$dbuser,$dbpswrd,$dbname);

 ?>
