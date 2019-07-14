<?php
 require 'header.inc.php';
require 'dbconnection.inc.php';

if (isset($_POST['search'])) {

  $user_id = $_SESSION['user_id'];

  $search_term = $_POST['search_term'];

      if (empty($search_term)) {
            $nofnrd = "No match for your search";
      }
       else {
             $frnd_id = "SELECT `frnd_id` FROM `frnd_list` WHERE user_id = '$user_id' ;";
             $query = mysqli_query($conn,$frnd_id);

             if ($query) {
                $frnd_list = mysqli_fetch_all($query,MYSQLI_ASSOC);

                foreach ($frnd_list as $key => $value) {
                         $all_frnd = $value['frnd_id'];

                        $frnd_pic = "SELECT `dp_path` FROM `profile_pic` WHERE user_id = '$all_frnd' ;";
                        $query = mysqli_query($conn,$frnd_pic);

                        if ($query) {

                            if (mysqli_num_rows($query) >= 1) {
                               $frnd_pic_res = mysqli_fetch_assoc($query);
                               $frnd_pic_path = '../pic/profile_pic/'.$frnd_pic_res['dp_path'];
                            }
                        }
                        else {
                              $nofnrd = "No match for your search";
                        }
// name
                        $frnd_info = "SELECT `name` FROM `user_info` WHERE user_id = '$all_frnd' ;";
                        $query = mysqli_query($conn,$frnd_info);

                        if ($query) {
                            if (mysqli_num_rows($query) >= 1) {
                               $frnd_name_res = mysqli_fetch_assoc($query);
                                $frnd_name = $frnd_name_res['name'];

                            }
                        }
                        else {
                              $nofnrd = "No match for your search";
                         }

                  }

             }

       }

}
