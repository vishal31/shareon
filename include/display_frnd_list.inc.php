<?php

//  This is query for all friend list from frnd_list table



$sql = "SELECT * FROM `frnd_list` WHERE user_id = '$user_id' ;";
$query = mysqli_query($conn,$sql);


if ($query) {
      $num_req = mysqli_num_rows($query);

      if ($num_req >= 1) {

           $all_frnd_list = mysqli_fetch_all($query, MYSQLI_ASSOC);

           foreach ($all_frnd_list as $key => $value) {

                $frnd_list_id = $value['frnd_id'];

//  This is query for all friend  all info from user_info table

                   $frnd_info= "SELECT `name` FROM `user_info` WHERE user_id = '$frnd_list_id'  ;";
                   $frnd_info_query = mysqli_query($conn,$frnd_info);

                   if ($frnd_info_query) {
                        $frnd_info_num = mysqli_num_rows($frnd_info_query)."<br>";

                      if ($frnd_info_num >=1 ) {
                          $frnd_info_res =  mysqli_fetch_all($frnd_info_query,MYSQLI_ASSOC);

                        }
                   }


//  This is query for all friend dp from profile_pic table

               $frnd_dp= "SELECT `dp_path` FROM `profile_pic` WHERE user_id = '$frnd_list_id' ;";
               $frnd_dp_query = mysqli_query($conn,$frnd_dp);

               if ($frnd_dp_query) {
                    $frnd_dp_num = mysqli_num_rows($frnd_dp_query);

                  if ($frnd_dp_num >=1 ) {
                       $frnd_dp_res =  mysqli_fetch_assoc($frnd_dp_query);

                    }

               }
           }

      }
  }
