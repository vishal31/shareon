<?php
require 'dbconnection.inc.php';

if (isset($_POST['search'])) {

  $user_id = $_SESSION['user_id'];

    $search_term = $_POST['search_term'];

      if (empty($search_term)) {
          header("Location: search.php?ser_frnd=no");
          exit();
      }
       else {
             $sql= "SELECT `user_id`,`name` FROM `user_info` WHERE name LIKE '%$search_term%' ;";
             $query = mysqli_query($conn,$sql);

             if ($query) {
                   $search_num = mysqli_num_rows($query);

                   if ($search_num >= 1) {
                       $frnd_ser = mysqli_fetch_all($query,MYSQLI_ASSOC);

                        foreach ($frnd_ser as $key => $value) {
                             $search_id = $value['user_id'];

                            $ser_dp= "SELECT `dp_path` FROM `profile_pic` WHERE user_id = '$search_id' ;";
                            $ser_dp_query = mysqli_query($conn,$ser_dp);

                            if ($ser_dp_query) {
                                 $ser_dp_num = mysqli_num_rows($ser_dp_query)."<br>";
                               if ($ser_dp_num >=1 ) {
                                   $ser_dp_res =  mysqli_fetch_all($ser_dp_query,MYSQLI_ASSOC);

                                 }
                            }
                        }

                   }
                    elseif($search_num < 1) {
                          header("Location: search.php?ser_frnd=no");
                          exit();
                      }

              }

        }


}
