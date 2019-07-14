<?php
require 'dbconnection.inc.php';


if (isset($_POST['add_frnd'])) {
     $user_id = $_SESSION['user_id'];

   $_SESSION['frnd_req_id'] = $_POST['user_id'];
   $frnd_req_id = $_SESSION['frnd_req_id'];


if ($user_id != $frnd_req_id ) {
  $sql= "INSERT INTO `frnd_req` VALUES('$frnd_req_id','$user_id') ;";
  $query = mysqli_query($conn,$sql);

    if ($query) {
        header("Location: ../search.php?frnd_add=success");
        exit();
    }
      else {
            header("Location: ../search.php?frnd_add=unsuccess");
            exit();
        }
}
   else {
         header("Location: ../search.php?frnd_add=unsuccess");
         exit();
     }

}
