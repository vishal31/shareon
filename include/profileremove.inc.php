<?php
require 'dbconnection.inc.php';

$user_id = $_SESSION['user_id'];

if (isset($_POST['rem_dp'])) {

  
   $dp_status = "SELECT * FROM `profile_pic` WHERE user_id = '$user_id' ;";
   $query = mysqli_query($conn,$dp_status);

    if ($query) {
         $dp_status_res = mysqli_fetch_assoc($query);

          $dp_path =   $dp_status_res['dp_path'];
          @unlink('../pic/profile_pic/'.$dp_path);

          $sql = "DELETE FROM `profile_pic` WHERE user_id ='$user_id' ; ";
          $query = mysqli_query($conn,$sql);

           if($query) {
               header("Location: ../editprofile.php?remove=success");
               exit();
           }

     }


}
