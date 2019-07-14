<?php require 'include/header.inc.php'; ?>


<div class="container ">

<h2 class="center green-text"> Shareon </h2>

      <div class="row card-panel z-depth-5" style="margin-top:10vh">

        <h5 class="center <?php if (isset($_GET['signup'])) { if ($_GET['signup'] == 'empty' || $_GET['signup'] == 'userexists') { echo 'red-text'; } } else {echo 'green-text';} ?>">
              <?php
                   if (isset($_GET['signup'])) {
                       if ($_GET['signup'] == 'empty') {
                           echo 'Fill All The Fields';
                       }
                        elseif ($_GET['signup'] == 'userexists') {
                                echo 'User Exists';
                        }

                   }
                    else {
                          echo 'Sign Up';
                    }
               ?>
        </h5>

<!-- SIGNUP2 Form -->
            <form class="" action="include/signupaction2.inc.php" method="post">

                   <div class="col s12 input-field ">
                          <input type="password" name="pswrd" value="" id="pswrd" data-length="10">
                          <label for="pswrd"  class=""> Password </label>
                   </div>


                   <h5> Gender </h5>

                    <div class="col s4 input-field ">
                       <label for="male">
                           <input type="radio" name="gender" value="male" id="male" class="with-gap">
                              <span>MALE</span>
                        </label>
                    </div>

                    <div class="col s4 input-field ">
                       <label for="female">
                           <input type="radio" name="gender" value="female" id="female" class="with-gap">
                              <span>FEMALE</span>
                        </label>
                    </div>

                    <div class="col s4 input-field ">
                       <label for="other">
                           <input type="radio" name="gender" value="other" id="other" class="with-gap">
                              <span>OTHER</span>
                        </label>
                    </div>

                    <div class="col s12 center <?php if (isset($_GET['signup'])) {
                          if ($_GET['signup'] == 'userexists') {
                              echo 'show';
                          }
                           else {
                                 echo 'hide';
                            }
                      }
                        else {
                              echo 'hide';
                        }
                    ?>" style="margin-top:4em">
                           <input type="submit" name="back" value="BACK" class="btn">
                    </div>


                   <div class="col s12 center
                       <?php
                          if (isset($_GET['signup'])) {
                             if ($_GET['signup'] == 'userexists') {
                                echo 'hide';
                              }
                              else {
                                  echo 'show';
                                }
                          }

                          ?>" style="margin-top:4em">

                          <input type="submit" name="continue" value="CONTINUE" class="btn">
                   </div>


            </form>
      </div>


      <p class="center"> Already have account? <a href="login.php"> Login In </a> </p>
</div>



<?php require 'include/footer.inc.php' ?>
