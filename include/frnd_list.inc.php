<?php
require 'dbconnection.inc.php';


$sql = "SELECT `frnd_id`  FROM `frnd_list` WHERE user_id = '$user_id' ;";
$query = mysqli_query($conn,$sql);

if($query) {

      $frnd_count = mysqli_num_rows($query);
     if ($frnd_count >= 1) {

         $frnd_id_res = mysqli_fetch_all($query, MYSQLI_ASSOC);

         if ($frnd_id_res) {

                     foreach ($frnd_id_res as $key => $value) {

                        $frnd_list =  $value['frnd_id'];

                       $sql = "SELECT *  FROM `user_info` WHERE user_id = '$frnd_list' ;";
                       $query = mysqli_query($conn,$sql);

                        $frnd_info = mysqli_fetch_assoc($query);
                        
                 }
            }

     }

}
