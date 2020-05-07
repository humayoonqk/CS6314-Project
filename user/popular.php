<?php
require_once 'header.php';
require_once '../config.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <table class="sidebar">
        <tr><td>Categories</td></tr>
        <tr><td><a href="popular.php">Most Popular</a></td></tr> <!-- mp -->
        <tr><td><a href="drama.php">Drama</a></td></tr> <!-- d -->
        <tr><td><a href="selfhelp.php">Self-Help</a></td></tr> <!-- sh -->
        <tr><td><a href="fiction.php">Fiction</a></td></tr> <!-- f -->
        <tr><td><a href="nonfiction.php">Non-Fiction</a></td></tr> <!-- nf -->
        <tr><td><a href="autobiography.php">Autobiography</a></td></tr> <!-- a -->
      </table>
    </div>
    <div class="col-sm-9">
    <div class="gen">Most Popular</div>
    <div class="row">
      <?php

        $sql = " SELECT * FROM books WHERE category = 'fiction' ORDER BY book_id ASC";

        $result = mysqli_query($link, $sql);

        //can't see form tag but ok.
        //how to add books 21

        while ($row = mysqli_fetch_array($result)) {
          $output .= '<div class = "col-sm-3" id="product"><img src="'.$row['image'].'" width="80%" height="200">
          <h5 style="font-size:medium">'.$row['book_name'].'</h5>
          <h5 style="font-size:x-small">'.$row['author'].'</h5>
          <h5 style="font-size:larger">&#36 '.$row['price'].' USD</h5>
          <form name="form" method="post">
            <input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
            <input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
            <input type="hidden" name="image" id="image'.$row['book_id'].'" value="'.$row['image'].'">
            <input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';

            if(!isset($_SESSION['loggedin'])) {
              //styling of button, will do tomorrow. (21 14:30)
              //logged out functionality
              $output .= '<input type="submit" name="submit" value="ADD TO CART123" class="btn btn-primary login">';
            } else {
              //log in functionality
              $output .= '<button type="button" id="'.$row['book_id'].'" class="btn btn-primary">ADD TO CART</button>';
            }
            $output .= '</form> </div>';
        }

        echo $output;
       ?>
       
    </div>
    <div class="showmore"><a href="bestseller.php">View more of best seller</a></div>
    <br>

    </div>
  </div>
</div>

<?php require_once 'footer.php';?>



