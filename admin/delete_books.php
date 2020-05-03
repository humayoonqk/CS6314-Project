<?php
  session_start();
  require_once 'header.php';
  require_once 'logincheck.php';
 ?>

 <div class="container">
   <div class="row">
     <div class="col-lg-2">
     </div>
     <div class="col-lg-10">
       <form class="form-inline">
    <input class="form-control mr-sm-2" name="username" type="text" placeholder="Enter book id" aria-label="Search">
    <input class="btn btn-outline-success my-2 my-sm-0" name="q" type="submit" value="Delete"> &nbsp; &nbsp;
  </form>
     </div>

   </div>

 </div>
