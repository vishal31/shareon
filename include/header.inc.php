<!-- 23- mar - 2019 start -->
<?php

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];

    if ($_SERVER['PHP_SELF'] != '/profile/include/frnd_search.inc.php') {
       require 'include/display_dp.inc.php';
       require 'include/display_feature_pic.inc.php';
       require 'include/display_frnd_list.inc.php';
       require 'include/frnd_list.inc.php';
    }

}
$dp_default = 'pic/default/default.png';
$req_dp = 'pic/profile_pic/';
$fet_pic = 'pic/feature_pic/';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="materialize/owl/owl.default.min.css">
    <link rel="stylesheet" href="materialize/css/custom.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    </head>
  <body>
