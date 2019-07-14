<?php
require 'dbconnection.inc.php';

// SIGNUP2 FORM

if (isset($_POST['continue'])) {

     $pswrd  = $_POST['pswrd'];
     $gender = $_POST['gender'];

    if ( empty($pswrd) || empty($gender) ) {
         //header("Location: ../signup2.php?signup=empty");
         exit();
    }
      else {
              if (strlen($pswrd) < 8 ) {
                      //header("Location: ../signup2.php?signup=lpswrd&name=$name");
                      exit();
              }

               else {
                     // SESSION
                      $name      = $_SESSION['name'];
                      $phone_num = $_SESSION['tmp_mnum'];

                      $sql = "SELECT `phone_num` FROM `user_info` WHERE phone_num = '$phone_num' ;";
                      $query = mysqli_query($conn,$sql);

                     if ($query) {
                         $num_rows = mysqli_num_rows($query);

                         if ($num_rows != 0) {
                              header("Location: ../signup2.php?signup=userexists");
                              exit();
                         }
                           elseif ($num_rows == 0) {
                                   $hash_pswrd = md5($pswrd);
                                   $sql = "INSERT INTO `user_info` VALUES(NULL, '$name', '$phone_num', '$hash_pswrd', '$gender' ) ;";
                                   $query = mysqli_query($conn,$sql);

                                   if (!$query) {
                                      //header("Location: ../signup2.php?signup=inserterror");
                                      exit();
                                   }
                                    else {
                                      $sql = "SELECT `user_id` FROM `user_info` WHERE phone_num = '$phone_num'  ;";
                                      $query = mysqli_query($conn,$sql);
                                       $res = mysqli_fetch_assoc($query);
                                          $_SESSION['user_id'] = $res['user_id'];
                                          $_SESSION['gender']  = $gender;
                                          header("Location: ../home.php");
                                          exit();
                                    }
                           }
                     }

               }
        }
}




// BACK BUTTON

if (isset($_POST['back'])) {
    header("Location: ../signup.php?&name=$phone_num");
    exit();
}
