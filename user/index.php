<?php
  session_start();
  require_once 'header.php';
  require_once '../config.php';
  $output =""
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
              $output .= '<input type="submit" name="submit" value="ADD TO CART" class="btn btn-primary login">';
            } else {
              $output .= '<input type="submit" name="submit" value="ADD TO CART" id=1'.$row['book_id'].'"class="btn batn-primary">';
            }
            $output .= '</form> </div>';
        }

        echo $output;
       ?>
       
    </div>
    <div class="showmore"><a href="bestseller.php">View more of best seller</a></div>
    <br>

    <!-- below code opens up a new tab for another genre -->
    <div class="gen">Science</div>
    <div class="row">
      <?php

        $output = '';
        $sql = " SELECT * FROM books WHERE category = 'science' ORDER BY book_id ASC LIMIT 12";

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
              //something to do with login I think.
              $output .= '<input type="submit" name="submit" value="ADD TO CART" class="btn btn-primary login">';
            } else {
              $output .= '<input type="submit" name="submit" value="ADD TO CART" id=1'.$row['book_id'].'"class="btn batn-primary">';
            }
            $output .= '</form> </div>';
        }

        echo $output;
       ?>
    </div>
    <div class="showmore"><a href="bestseller.php">View more of best seller</a></div>
</div>

<!-- add more categories tomorrow. Just copying same code 22 - 7:00 -->
  </div>

</div>

<!-- Modal -->
<!-- The Modal -->
<div class="modal" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php require_once 'footer.php';?>
