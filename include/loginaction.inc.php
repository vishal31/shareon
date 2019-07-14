<?php
require 'dbconnection.inc.php';

if (isset($_POST['login'])) {

$phone_num = $_POST['phone_num'];
$pswrd     = $_POST['pswrd'];

   if (empty($phone_num) || empty($pswrd)) {
        header("Location: ../login.php?login=empty");
        exit();
    }
     else {
            $hash_pswrd = md5($pswrd);

            $sql   = "SELECT * FROM `user_info` WHERE phone_num = '$phone_num' AND password = '$hash_pswrd' ;";
            $query = mysqli_query($conn,$sql);

            if (!$query) {
                header("Location: ../login.php?login=Query Not success");
                exit();;

              }
                else {
                      $num_rows = mysqli_num_rows($query);
                      if ($num_rows == 0) {
                          header("Location: ../login.php?login=notmatch");
                          exit();
                      }
                        elseif ($num_rows == 1) {

                              $result = mysqli_fetch_assoc($query);

                             // SESSION
                              $_SESSION['user_id'] = $result['user_id'];
                              $_SESSION['name'] =    $result['name'];
                              $_SESSION['gender'] =       $result['gender'];

                             header("Location: ../home.php");
                             exit();
                    }
            }
     }
}
