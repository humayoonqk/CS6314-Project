<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create New Account</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Jost', sans-serif;
    }
    .info
    {
    text-align: right;
    margin-bottom: 20px;
    }

    #heading {
        font-family: 'Pacifico', cursive;
        border: 5px black solid;
        text-align: center;
    }


</style>
  </head>
  <body>
    <div class="container">
      <div class="info">
        Contact Us - Mobile: <i class="fas fa-phone"></i>&nbsp;(832)929-5746<br>
        Email: <i class="fas fa-envelope"></i> akhtarhumayun2@gmail.com
      </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="profile.php"><img src="images/bookstorelogo.jpg" alt="" href="80" width="100" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <?php

            echo '<li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="signup.php">Create New Account</a>
            </li>';

           ?>

        </ul>
      </div>
    </nav>
    <hr>
  </div>
