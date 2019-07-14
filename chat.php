<?php
 require 'include/header.inc.php'
 if (!isset($user_id)) {
     header("Location: index.php");
     exit();
 }
  ?>


<p class="card-panel"><i class="material-icons">  </i> Direct </p>

<div class="container">

  <div class="collection">
       <div class="collection-item avatar">
             <img src="pic/1.jpeg" alt="" class="circle">
             <span> name of the user </span>
             <p> Message Perivew </p>
       </div>
  </div>

      <div class="collection">
           <div class="collection-item avatar">
                 <img src="pic/1.jpeg" alt="" class="circle">
                 <span> name of the user </span>
                 <p> Message Perivew </p>
           </div>
      </div>

      <div class="collection">
           <div class="collection-item avatar">
                 <img src="pic/1.jpeg" alt="" class="circle">
                 <span> name of the user </span>
                 <p> Message Perivew </p>
           </div>
      </div>
</div>



<?php require 'include/footer.inc.php' ?>
