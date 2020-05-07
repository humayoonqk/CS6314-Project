<?php

session_start();
include_once '../config.php';
$var = $_POST['feature'];

switch($var) {
    case 'addToCart':

        $bookId = $_POST['book_id'];
        $bookName = $_POST['book_name'];
        $bookPrice = $_POST['price'];
        $bookImage = $_POST['image'];
        $userId = $_SESSION['id'];
        $status = "";
        //$bookQuantity = $_POST['quantity'];

        $sql = "select * from cart where user_id='$userId' and book_id = '$bookId'";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) == 1) {

            $status = '<div class="alert alert-danger" role="alert">Failure - Already in cart</div>';

        }
        else{

            $sql = "INSERT INTO cart(order_id, user_id, book_id, book_name, price, totalprice, photo) VALUES
            ('', '$userId', $bookId, '$bookName', '$bookPrice', '$bookPrice', '$bookImage')";

            if (mysqli_query($link, $sql)) {
                $status = '<div class="alert alert-success" role="alert"> Item Added to cart</div>';
            } 
            else {
                $status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="2000">Failure - Did not add to cart</div>';
            }
        } 

        echo $status;
    break;

    default:
break;

}
?>

<?php require_once 'footer.php' ?>