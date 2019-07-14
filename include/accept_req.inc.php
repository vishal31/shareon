<?php
require 'dbconnection.inc.php';

if (isset($_POST['accept_req'])) {

  $_SESSION['req_id'] = $_POST['req_id'];
   $req_id = $_SESSION['req_id'];

  $sqls = "SELECT * FROM `frnd_list` WHERE user_id = $user_id AND  frnd_id = '$req_id' ;";
  $querys = mysqli_query($conn,$sqls);

if ($querys) {
     $row_num = mysqli_num_rows($querys);

     if ($row_num == 0) {


         $sql = "INSERT INTO `frnd_list` VALUES('$user_id', '$req_id'),('$req_id', '$user_id') ;";
         $query = mysqli_query($conn,$sql);

         if ($query) {

           $del_sql = "DELETE FROM `frnd_req` WHERE user_id = '$user_id' AND frnd_req_id = '$req_id' ;";
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

       }
         else {
               header("Location: ../account.php?req_accept=failed");
               exit();
         }
    }
      else {
            header("Location: ../account.php?req_accept=failed");
            exit();
      }

 }
   else {
         header("Location: ../account.php?req_accept=failed");
         exit();
   }
