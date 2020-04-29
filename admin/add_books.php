<?php
  require_once 'header.php';
  require_once 'logincheck.php';

  $bookname_error = "";
  $author_error = "";
  $price_error = "";
  $category_error = "";
  $file_error = "";
 ?>


 <div class="container">
   <div class="row">

     <div class="col-lg-12">
       <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-5">
           <h4 class="text-warning">Please provide details: </h4><br>
           <form class="form" method="post">
             <div class="form-group">
               <label for="">Book Name</label>
               <input type="text" name="book_name" value="" class="form-control">
               <span class="text-danger"><?php echo $bookname_error; ?></span>
             </div>
             <div class="form-group">
               <label for="">Author</label>
               <input type="text" name="author" value="" class="form-control">
               <span class="text-danger"><?php echo $author_error; ?></span>
             </div>
             <div class="form-group">
               <label for="">Price</label>
               <input type="text" name="price" value="" class="form-control">
               <span class="text-danger"><?php echo $price_error; ?></span>
             </div>
             <div class="form-group">
               <label for="">Category</label>
               <input type="text" name="category" value="" class="form-control">
               <span class="text-danger"><?php echo $category_error; ?></span>
             </div>
             <div class="form-group">
               <label for="">Upload Book Image</label>
               <input type="file" name="book_img" value="" class="form-control">
               <span class="text-danger"><?php echo $file_error; ?></span>
             </div>
             <div class="form-group">
               <input type="submit" name="submit" value="Add Book" class="btn btn-success">
             </div>
      </form>
          </div>
         <div class="col-sm-4"></div>
       </div>

     </div>

   </div>

 </div>
