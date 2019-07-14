<?php
require 'dbconnection.inc.php';


$sql = "SELECT * FROM `frnd_req` WHERE user_id= '$user_id' ;";
$query = mysqli_query($conn,$sql);

//  This is query for all friend request
if ($query) {
      $num_req = mysqli_num_rows($query);

      if ($num_req >= 1) {

           $all_frnd_req = mysqli_fetch_all($query, MYSQLI_ASSOC);

           foreach ($all_frnd_req as $key => $value) {

                   $frnd_req_id = $value['frnd_req_id'];

//  This is query for all friend request all info from user_info table

                   $req_frnd_info= "SELECT `name` FROM `user_info` WHERE user_id = '$frnd_req_id' ;";
                   $req_frnd_info_query = mysqli_query($conn,$req_frnd_info);

                   if ($req_frnd_info_query) {
                        $frnd_req_info_num = mysqli_num_rows($req_frnd_info_query)."<br>";

                      if ($frnd_req_info_num >=1 ) {
                          $frnd_req_info_res =  mysqli_fetch_all($req_frnd_info_query,MYSQLI_ASSOC);

                        }
                   }


//  This is query for all friend request dp from profile_pic table

               $req_frnd_dp= "SELECT `dp_path` FROM `profile_pic` WHERE user_id = '$frnd_req_id' ;";
               $req_dp_query = mysqli_query($conn,$req_frnd_dp);

               if ($req_dp_query) {
                    $frnd_req_dp_num = mysqli_num_rows($req_dp_query);

                  if ($frnd_req_dp_num >=1 ) {
                      $frnd_req_dp_res =  mysqli_fetch_assoc($req_dp_query);

                    }

               }
           }

      }

 }
