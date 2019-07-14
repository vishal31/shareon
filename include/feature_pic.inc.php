<?php
require 'dbconnection.inc.php';

if (isset($_POST['upload'])) {

      $fname     = $_FILES['feature_pic'] ['name'];
      $fsize     = $_FILES['feature_pic'] ['size'];
      $ftype     = $_FILES['feature_pic'] ['type'];
      $ftmp_name = $_FILES['feature_pic'] ['tmp_name'];
      $ferror    = $_FILES['feature_pic'] ['error'];
//
  if (empty($fname)) {
      header("Location: ../account.php?empty");
      exit();
  }
   else {
         $actual_ext = explode('.',$fname);
         $end_elm = strtolower(end($actual_ext));
         $allowed_fext = array('jpg','jpeg','png');

          if(in_array($end_elm,$allowed_fext)) {

             $dp_name =  'profile_pic' .$_SESSION['user_id'].$_SESSION['name'].uniqid().'.'.$end_elm;
             $dest    =   '../pic/feature_pic/'.$dp_name;



               $file_moved = move_uploaded_file($ftmp_name, $dest);
               if ($file_moved) {

                    $user_id = $_SESSION['user_id'];
                    $sql = "INSERT INTO `feature_pic` VALUES(NULL,'$user_id', '$dp_name',curdate() ) ;";
                    $query = mysqli_query($conn,$sql);

                     if($query) {
                         header("Location: ../account.php?upload=success");
                         exit();
                     }
                       else {
                         header("Location: ../account.php?upload=unsuccess");
                         exit();
                       }

               }
                 else {
                       //header("Location: ../account.php?file=notmoved");
                       exit();
                    }
          }
           else {
                  header("Location: ../account.php?dpedit=notallowed");
                  exit();
           }
   }



}
