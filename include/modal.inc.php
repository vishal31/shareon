
<!-- FRIEND REQUEST MODAL CONTAINER -->

 <div class="modal" id="frnd_req">
       <div class="modal-content">

               <ul class="collection with-header">
                    <li class="collection-header"> <h4> Friend Request </h4> </li>

<?php
if (isset($all_frnd_req)) {

foreach ($all_frnd_req as $key => $value) {  ?>


                    <li class="collection-item avatar" id="ser_list">

                           <img src="<?php  if (isset($frnd_req_dp_res)) {
                                     echo  $req_dp.$frnd_req_dp_res['dp_path'];
                           } else {
                                   echo $dp_default;
                           } ?>" alt=""class="circle">

                           <span style="line-height:3em"><?php echo $frnd_req_info_res[$key]['name'] ?></span>

                           <form  action="include/accept_req.inc.php" method="post">
                                   <input type="text" name="req_id" value="<?php echo $value['frnd_req_id'];  ?>" class="hide">
                                  <button type="submit" name="accept_req" class="btn-floating secondary-content add_btn" id="add_btn"> <i class="materialize-icons"> add </i> </button>
                           </form>


                    </li>

<?php } } else {
  echo "No freind reuest found!";
}?>

       </ul>

    </div>

 </div>






 <!-- FRIENDS LIST  MODAL CONTAINER -->

 <div class="modal" id="frnd_search">

       <div class="modal-content">

             <ul class="collection with-header">
                  <li class="collection-item header center"><h5> Friend List </h5></li>

 <?php
     if (isset($frnd_id_res)) {
         foreach ($frnd_id_res as $key => $value) {
 ?>

                  <li class="collection-item avatar">
                         <img src="<?php if (isset($frnd_dp_res)) {
                           echo $req_dp.$frnd_dp_res['dp_path'];

                         }else {
                                echo $dp_default;
                         } ?>" alt=""class="circle">

                         <span style="line-height:3em"><?php echo $frnd_info_res[$key]['name'] ?> </span>

                         <form  action="include/frnd_rem.inc.php" method="post">
                                <input type="text" name="rem_id" value="<?php echo $value['frnd_id']; ?>" class="hide">
                                <button type="submit" name="rem_frnd" class="btn-floating secondary-content"> <i class="material-icons"> clear </i> </button>
                         </form>
                       </li>

 <?php }} ?>
               </ul>

        </div>


       <div class="modal-footer">
            <a href="#" class="modal-close btn"> close </a>
       </div>
 </div>
