<?php require 'include/header.inc.php';

?>



<div class="container " style="margin-bottom:20vh">


<h2 class="center green-text"> Shareon </h2>


      <div class="row card-panel z-depth-5" style="margin-top:6vh">

        <h5 class="center <?php if (isset($_GET['signup'])) { if ($_GET['signup'] == 'empty') { echo 'red-text'; } else {echo 'green-text';} }  else {echo 'green-text';} ?>">
              <?php
                   if (isset($_GET['signup'])) {
                       if ($_GET['signup'] == 'empty') {
                           echo 'Fill All The Fields';
                       }
                        else {
                              echo 'Sign Up';
                        }
                   }
                    else {
                         echo 'Sign Up';
                    }
               ?>
        </h5>

<!-- SIGNUP FORM -->
          <form action="include/signupaction.inc.php" method="post" class="">


            <div class="col s12 input-field ">
                   <input type="text" name="name" value=" <?php if ( isset($_GET['name']) ) {  if (isset($name)) {echo $name; } } ?>" id="name" data-length="30">
                   <label for="name" class=" <?php if (isset($_GET['signup'])) { if ($_GET['signup'] == 'nname') { echo 'red-text'; } else {echo 'green-text';} } ?>">
                         <?php
                              if (isset($_GET['signup'])) {
                                   if ($_GET['signup'] == 'nname') {
                                       echo 'Enter less than 30 characters';
                                   }
                                    else {
                                          echo 'Name';
                                    }
                               }
                                 else {
                                       echo 'Name';
                                 }
                            ?>
                   </label>
            </div>


                 <div class="col s12 input-field">
                       <input type="number" name="phone_num"id="phone_num">
                       <label for="phone_num" class=" <?php if (isset($_GET['signup'])) { if ($_GET['signup'] == 'nnum') { echo 'red-text'; } else {echo 'green-text';} } ?>">
                         <?php
                              if (isset($_GET['signup'])) {
                                   if ($_GET['signup'] == 'nnum') {
                                       echo 'Enter 10 digits';
                                   }
                                    else {
                                          echo 'PHONE NUMBER';
                                    }
                              }
                                else {
                                     echo 'PHONE NUMBER';
                                }
                            ?>
                        </label>
                 </div>



                 <div class="col s12 center" style="margin-top:4em">
                        <input type="submit" name="next" value="NEXT" class="btn">
                 </div>

          </form>

          </div>


      <p class="center"> Already have account? <a href="login.php"> Login In </a> </p>
</div>




<?php require 'include/footer.inc.php' ?>
