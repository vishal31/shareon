<?php
$dp_default = 'pic/default/default.png';
require 'dbconnection.inc.php';


$sql = "SELECT `dp_path`, `dp_status` FROM `profile_pic` WHERE user_id = '$user_id' ;";
$query = mysqli_query($conn,$sql);

if($query) {

     $num_rows = mysqli_num_rows($query);
     if ($num_rows == 1) {

         $result = mysqli_fetch_assoc($query);
         if ($result) {
             $dp_path   = $result['dp_path'];
             $dp_status = $result['dp_status'];
             $actual_dp = 'pic/profile_pic/'.$dp_path;
         }

     }

}
  else {
    header("Location: ../editprofile.php?empty");
    exit();
  }
