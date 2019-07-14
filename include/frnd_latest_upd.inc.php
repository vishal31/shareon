<?php
require 'dbconnection.inc.php';
//require 'frnd_list.inc.php';



$sql = "SELECT `frnd_id`  FROM `frnd_list` WHERE user_id = '$user_id' ;";
$query = mysqli_query($conn,$sql);

if($query) {

      $frnd_counts = mysqli_num_rows($query);
     if ($frnd_counts >= 1) {

         $frnd_id_result = mysqli_fetch_all($query, MYSQLI_ASSOC);

         if ($frnd_id_result) {

                     foreach ($frnd_id_result as $key => $value) {

                        $frnd_lists =  $value['frnd_id'];

// SELECTING FREIND PROFILE_PIC FROM profile_pic TABLE
                        $sqldp = "SELECT `dp_path`  FROM `profile_pic` WHERE user_id = '$frnd_lists' ;";
                        $querydp = mysqli_query($conn,$sqldp);

                         $frnd_hom_dp = mysqli_fetch_assoc($querydp);
                         $frnd_hom_dp['dp_path'];

// SELECTING FREIND INFO FROM user_info TABLE
                       $sql = "SELECT *  FROM `user_info` WHERE user_id = '$frnd_lists' ;";
                       $query = mysqli_query($conn,$sql);

                        $frnd_info = mysqli_fetch_all($query, MYSQLI_ASSOC);

// SELECTING FEATURE PIC FROM feature_pic TABLE
                        $sqlfet = "SELECT `feature_pic_path`  FROM `feature_pic` WHERE user_id = '$frnd_lists' AND cur_date = curdate(); ";
                        $queryfet = mysqli_query($conn,$sqlfet);

                        if ($queryfet) {
                             $fet_pic_num = mysqli_num_rows($queryfet);

                            if ($fet_pic_num >= 1) {

                                 $feat_path =mysqli_fetch_all($queryfet, MYSQLI_ASSOC);

                              }

                        }

                 }
            }

     }

}
