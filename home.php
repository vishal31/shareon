<?php
 require 'include/header.inc.php';
require 'include/frnd_latest_upd.inc.php';
require 'include/display_frnd-req.inc.php';

if (!isset($user_id)) {
     header("Location: index.php");
     exit();
 }


 // modal require
 require 'include/modal.inc.php';


 ?>



  <div class="row card-panel">

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

                  ?> " alt="" class="circle responsive-img" style="width:60px;height:60px">
         <p> <?php echo $user_name; ?> </p>
    </div>

  <!-- FRIEND REQUEST MODAL TRIGGER -->
       <div class="col s2">
         <a href="#frnd_req" class="btn-floating modal-trigger <?php if (isset($all_frnd_req)) {
            echo 'pulse';
         } ?>"><i class="material-icons"> face </i> </a>
       </div>

       <div class="col s2">
             <form  action="include/logout.inc.php" method="post" class="right">
                   <button type="submit" name="logout" class="btn-floating"> <i class="material-icons"> settings_power </i></button>
             </form>
       </div>

   </div>



</div>





<!-- FREINDS LATEST UPLOAD -->

<div class="row main-container">

<?php

if (isset($feat_path)) {

foreach ($frnd_id_result as $key => $value) {


  ?>
      <div class="col s6 l6 sub-main-container">
           <div class="profile" style="margin-bottom:10vh">

                 <img src="<?php echo $req_dp.$frnd_hom_dp['dp_path']; ?>" alt="" class="circle left" style="width:60px;height:60px">

                 <span class="left" style="line-height:7vh;padding-left:1em"> <?php echo $frnd_info[$key]['name']; ?> </span>

           </div>

           <?php foreach ($feat_path as $key => $value){ ?>

             <img src="<?php echo $fet_pic.$value['feature_pic_path']; ?>" alt="" class="responsive-img">

    <?php } ?>
      </div>


    <?php  } }?>


</div>

<?php require 'include/footer.inc.php' ?>
