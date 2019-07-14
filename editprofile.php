<?php
require 'include/header.inc.php';
require 'include/useraccountinfo.inc.php';
if (!isset($user_id)) {
    header("Location: index.php");
    exit();
}
 ?>




<div class="container">

       <div class="row card-panel">

         <div class="col s12"  style="position:relative;">

           <img src=" <?php
                  if (isset($dp_status)) {
                       if ($dp_status == 'true') {
                               echo $actual_dp ;
                       }
                        else {
                              echo $dp_default;
                        }
                  }
                   else {
                         echo $dp_default;
                   }

            ?> " alt="" class="circle dp-img">

<!-- POST DETAILS -->
                 <div class="acc-post-info-container">

                        <p> <?php echo $postnum; ?> </p>
                        <p> post </p>
                  </div>

<!-- USER NAME -->
                 <p class="user-name"> <?php echo $user_name; ?> </p>
          </div>




             <!-- PROFILE UPLOAD FORM -->
            <div class="col s12 center" style="line-height:5em;">

                  <form action="include/profileupload.inc.php" method="post" enctype="multipart/form-data">

<!--  -->
                        <div class="file-field input-field">
                              <div class="btn" id="select_btn">
                                    <span> Select Photo </span>
                                    <input type="file" name="dp_file">
                              </div>

                              <div class="file-path-wrapper">
                                    <input type="text" class="file-path">
                              </div>
                        </div>

                        <div>
                              <button type="submit" name="upld_dp" class="btn"><i class="material-icons"> file_upload </i></button>
                        </div>

                  </form>
            </div>




  <!-- PROFILE REMOVE FORM -->
            <div class="col s12 center" style="line-height:5em;">
                     <form action="include/profileremove.inc.php" method="post">
                     <input type="submit" name="rem_dp" value="Remove Profile" class="btn">
               </div>

               <div class="col s12 center">
                        <a href="home.php" class="btn"> <i class="material-icons"> home </i> </a>
                  </div>

    <!-- End of row  -->
       </div>
</div>








<?php require 'include/footer.inc.php' ?>
