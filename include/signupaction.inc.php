<?php

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

  // SIGNUP FORM
if (isset($_POST['next'])) {

  $name   = $_POST['name'];
  $phone_num = $_POST['phone_num'];


    if (empty($phone_num) || empty($name) ) {
         header("Location: ../signup.php?signup=empty");
         exit();
    }
     else {
           // NAME VALIDATION
            if (strlen($name) > 30 ) {
                header("Location: ../signup.php?signup=nname");
                exit();
            }

           // PHONE NUMBER VALIDATION
            elseif (strlen($phone_num) !=10) {
                header("Location: ../signup.php?signup=nnum");
                exit();
            }
              else {
                     $_SESSION['name']  = $name;
                     $_SESSION['tmp_mnum']  = $phone_num;

                      header("Location: ../signup2.php");
                      exit();
              }
      }

}
