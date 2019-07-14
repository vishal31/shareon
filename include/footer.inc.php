<?php
$servername = $_SERVER['HTTP_HOST'];
$file_path = $_SERVER['PHP_SELF'];

 ?>
<!-- FEATURE IMAGE MODAL CONTAINER -->

<div class="modal" id="feature_pic">
      <div class="modal-content">

           <form action="include/feature_pic.inc.php" method="post" enctype="multipart/form-data">
                   <div class="file-field input-field">
                        <div class="btn">
                              <span> Select Photo </span>
                              <input type="file" name="feature_pic">
                        </div>

                        <div class="file-path-wrapper">
                              <input type="text" class="file-path" placeholder="select your cool photo">
                        </div>
                   </div>

                  <div class="center">
                         <input type="submit" name="upload" value="UPLOAD" class="btn">
                  </div>

           </form>
      </div>

</div>


<?php

// modal require
require 'include/modal.inc.php';

 ?>



<div class="<?php  if (isset($_SESSION['user_id'])) { echo 'show';} else{echo 'hide';} ?>" style="position:fixed;bottom:0;width:100vw">


<div class="row card-panel center" style="margin-bottom:0">

      <div class="col s2">
          <a href="home.php" class="btn-floating"> <i class="material-icons"> home </i>  </a>
      </div>

      <div class="col s2">
          <a href="#feature_pic" class="btn-floating modal-trigger" ><i class="material-icons"> wallpaper </i> </a>
      </div>


      <div class="col s2">
            <a href="#frnd_search" class="btn-floating modal-trigger"> <i class="material-icons"> group </i>  </a>
      </div>

      <div class="col s2">
            <a href="search.php" class="btn-floating"><i class="material-icons"> search </i> </a>
      </div>

      <div class="col s2 ">
            <a href="account.php" class="btn-floating"> <i class="material-icons"> account_circle  </i> </a>
      </div>

</div>
</div>





<script type="text/javascript" src="materialize/js/jquery.min.js"> </script>
<script type="text/javascript" src="materialize/js/materialize.min.js"> </script>
<script type="text/javascript" src="materialize/owl/owl.carousel.min.js"> </script>


<script type="text/javascript">

        $(document).ready(function() {

           $('.owl-carousel').owlCarousel();

           $('.modal').modal();



        })



</script>





</body>
</html>
