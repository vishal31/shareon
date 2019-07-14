<?php
require 'dbconnection.inc.php';

if (isset($_POST['upld_dp'])) {

      $fname     = $_FILES['dp_file'] ['name'];
      $fsize     = $_FILES['dp_file'] ['size'];
      $ftype     = $_FILES['dp_file'] ['type'];
      $ftmp_name = $_FILES['dp_file'] ['tmp_name'];
      $ferror    = $_FILES['dp_file'] ['error'];


          if (empty($fname)) {
              header("Location: ../editprofile.php?empty");
              exit();
          }
           else {
                 $actual_ext = explode('.',$fname);
                 $end_elm = strtolower(end($actual_ext));
                 $allowed_fext = array('jpg','jpeg','png');

                  if(in_array($end_elm,$allowed_fext)) {

                     $dp_name =  'profile_pic' .$_SESSION['user_id'].uniqid().'.'.$end_elm;
                     $dest    =   '../pic/profile_pic/'.$dp_name;


                       $file_moved = move_uploaded_file($ftmp_name, $dest);
                       if ($file_moved) {

                            $user_id = $_SESSION['user_id'];

                            $dp_status = "SELECT * FROM `profile_pic` WHERE user_id = '$user_id' ;";
                            $query = mysqli_query($conn,$dp_status);

                             if ($query) {
                                  $dp_status_res = mysqli_fetch_assoc($query);

                                   $dp_path =   $dp_status_res['dp_path'];

                                  if (  $dp_status_res['dp_status'] == true) {

                                      @unlink('../pic/profile_pic/'.$dp_path);

                                      $dp_updt = "UPDATE `profile_pic` SET dp_path = '$dp_name' WHERE user_id = '$user_id' ;";
                                      $query = mysqli_query($conn,$dp_updt);

                                      if ($query) {
                                           header("Location: ../editprofile.php?update=success");
                                           exit();
                                      }
                                       else {
                                             header("Location: ../editprofile.php?update=unsuccess");
                                             exit();
                                       }
                                  }
                                   else {
                                         $sql = "INSERT INTO `profile_pic` VALUES(NULL,'$user_id', '$dp_name','true') ;";
                                         $query = mysqli_query($conn,$sql);

                                         if($query) {
                                             header("Location: ../editprofile.php");
                                             exit();
                                         }
                                     }
                             }
                               else {
                                header("Location: ../editprofile.php?empty");
                                 exit();
                               }

                          }
                         else {
                               header("Location: ../editprofile.php?empty");
                               exit();
                               echo "Unabled to Moved";
                         }
                  }
                   else {
                          header("Location: ../editprofile.php?dpedit=notallowed");
                          exit();

                   }
           }



}
