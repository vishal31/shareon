<?php
 require 'include/header.inc.php';
 require 'include/frnd_search.inc.php';

if (!isset($user_id)) {
     header("Location: index.php");
     exit();
 }

$dp_default = 'pic/default/default.png';
$ser_dp = 'pic/profile_pic/';

 ?>




<div class="container">

    <form action="search.php" method="post" class="row">

          <div class="input-field col s8">
                <span class="prefix"> <i class="material-icons"> person </i> </span>
                 <input type="search" name="search_term" placeholder="search here">
           </div>

            <div class="input-field col s4">
                 <button type="submit" name="search" class="btn"><i class="material-icons"> search </i> </button>
            </div>
      </form>


      <div class="divider" style="margin-bottom:2em"> </div>

<!-- search result  -->
   <h4 class="center"style="margin-bottom:2em"> <?php
       if (isset($_GET['ser_frnd'])) { echo 'No match for your search'; } else{ echo 'Your search result';} ?> </h4>






      <ul class="collection">

<?php
    if (isset($search_num) && isset($frnd_ser)) {
        foreach ($frnd_ser as $key => $namevalue) { ?>



           <li class="collection-item avatar" id="ser_list">
                  <img src="<?php echo $ser_dp.$ser_dp_res[$key]['dp_path'];

                   ?>" alt=""class="circle">


                  <span style="line-height:3em"> <?php echo $namevalue['name']; ?> </span>
                  <form  action="include/add_frnd.inc.php" method="post">
                          <input type="text" name="user_id" value="<?php echo $namevalue['user_id'];  ?>" class="hide">
                         <button type="submit" name="add_frnd" class="btn-floating secondary-content add_btn" id="add_btn"> + </button>
                  </form>
           </li>

<?php } }?>

      </ul>
</div>





</script>











 <?php require 'include/footer.inc.php'; ?>
