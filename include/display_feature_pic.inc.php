<?php
require 'dbconnection.inc.php';



$sql = "SELECT `feature_pic_path` FROM `feature_pic` WHERE user_id = '$user_id' ;";
$query = mysqli_query($conn,$sql);

if($query) {

    $num_rows = mysqli_num_rows($query);
     if ($num_rows >= 1) {

         $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

         }

}
 else {
       header("Location: ../account.php?empty");
       exit();
  }
