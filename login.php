<?php require 'include/header.inc.php' ?>


<div class="container ">

<h2 class="center green-text"> Shareon </h2>

<div class="row card-panel z-depth-5" style="margin-top:16vh">


  <h5 class="center <?php if (isset($_GET['signup']) || isset($_GET['login'])) { if ($_GET['signup'] == 'empty' || $_GET['login'] == 'notmatch') { echo 'red-text'; } else {echo 'green-text';} }  else {echo 'green-text';} ?>">
        <?php
             if (isset($_GET['signup']) ) {
                 if ($_GET['signup'] == 'empty') {
                     echo 'Fill All The Fields';
                 }
                  else {
                        echo 'Sign IN';
                  }
             }
               if (isset($_GET['login'])) {
                 if ($_GET['login'] == 'notmatch') {
                        echo 'Phone Number and Password is Not Matched';
                 }
                 else {
                       echo 'Sign IN';
                 }
               }
              else {
                   echo 'Sign IN';
              }
         ?>
  </h5>


  <!-- LOGIN FORM -->
      <form class="" action="include/loginaction.inc.php" method="post">

             <div class="col s12 input-field ">
                    <input type="number" name="phone_num" value="" id="phone_num">
                    <label for="phone_num"> PHONE NUMBER </label>
             </div>

             <div class="col s12 input-field ">
                    <input type="password" name="pswrd"  id="pswrd">
                    <label for="pswrd"> PASSWORD </label>
             </div>

             <div class="col s12 center">
                    <input type="submit" name="login" value="Login In" class="btn">
             </div>
      </form>
</div>

  <p class="center"> You have'nt account? <a href="signup.php"> Sign Up </a> </p>


</div>

<?php require 'include/footer.inc.php' ?>
