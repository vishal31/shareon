<?php
require 'include/header.inc.php';
require 'include/useraccountinfo.inc.php';
require 'include/display_frnd-req.inc.php';

if (!isset($user_id)) {
    header("Location: index.php");
    exit();
}
$req_dp = 'pic/profile_pic/';
$dp_default = 'pic/default/default.png';


// modal require
require 'include/modal.inc.php';


 ?>



<div class="row card-panel">

<!-- FRIEND REQUEST MODAL TRIGGER -->
     <div class="col s8">
           <a href="#frnd_req" class="btn-floating modal-trigger <?php if (isset($all_frnd_req)) {
              echo 'pulse';
           } ?>"><i class="material-icons"> face </i> </a>
     </div>

<!-- LOGOUT BUTTON -->
     <div class="col s4">
           <form  action="include/logout.inc.php" method="post" class="right">
                 <button type="submit" name="logout" class="btn-floating"> <i class="material-icons"> settings_power </i></button>
           </form>
     </div>


</div>


<!-- USER INFO AREA -->
<div class="row" style="position:relative;">

         <div class="col s8">

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

            ?> " alt="" class="circle dp-img ">

<!-- POST DETAILS -->
                 <div class="acc-post-info-container">

                        <p> <?php echo $postnum ; ?>  </p>
                        <p> post </p>
                  </div>

  <!--FRIENDS DETAILS -->
                  <div class="acc-frnd-info-container">

                         <p> <?php echo $frnd_count ; ?>  </p>
                         <p> friend </p>
                   </div>

<!-- USER NAME -->
                 <p class="user-name"> <?php echo $user_name; ?> </p>
          </div>

<!-- edit profile button -->
          <div class="col s4 btn-position" style="left:13em; bottom: 2em">
                <a href="editprofile.php" class="btn"> edit profile </a>
           </div>

</div>




<!-- FULL CONTAINER -->
<div class="card-panel z-depth-5">





<!-- FEATURED PHOTO CONTAINER -->
      <div class="row feature-pic-container">

  <?php
        if (isset($result)) {

             foreach ($result as $value) { ?>

                <div class="img-container">
                           <img src="pic/feature_pic/<?php echo $value['feature_pic_path']; ?>" alt="" class="feature-img">
                     </div>


 <?php } } else {  ?>
 </div>

 <h6> Share Your Cool Movement With Your Friends.  </h6>

<?php } ?>
              <!-- End of row -->
        </div>
</div>



<?php require 'include/footer.inc.php' ?>
