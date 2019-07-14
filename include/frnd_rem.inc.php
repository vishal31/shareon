<?php
require 'dbconnection.inc.php';

if (isset($_POST['rem_frnd'])) {

   $rem_id = $_POST['rem_id'];
   $user_id;

     $del_sql = "DELETE FROM `frnd_list` WHERE (user_id = '$user_id' AND frnd_id = '$rem_id') OR (user_id = '$rem_id' AND frnd_id = '$user_id') ;";
     $del_query = mysqli_query($conn,$del_sql);

     if ($del_query) {
        header("Location: ../account.php");
        exit();
     }

       else {
           header("Location: ../account.php?req_accept=failed");
           exit();
       }


}
