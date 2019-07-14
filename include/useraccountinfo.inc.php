<?php

require 'include/dbconnection.inc.php';

// RETERIVING POST INFO
$sql = "SELECT COUNT(feature_pic_path) AS 'postnum' FROM `feature_pic` WHERE user_id = '$user_id'; ";
$query = mysqli_query($conn, $sql);

if ($query) {

    $postresult = ( mysqli_fetch_assoc($query));
         if ($postresult['postnum'] < 1) {
             $postnum = 0;
         }
           else {
             $postnum = $postresult['postnum'];
           }
}
