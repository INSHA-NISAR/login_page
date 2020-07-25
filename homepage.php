<?php
    session_start();
     if(!isset($_SESSION['username'])) {
     header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    body{
        background-image:url('bgimage.jpg');
    }
</style>
<body>
    <div class="container">
      <!--  <img src="bgimage.jpg" class="img-fluid" alt="Responsive image" width="100%">-->
        <h1  id ="d1" class="text-center font-italic text-white"> Welcome <?php echo $_SESSION['username']; ?>
       </h1>
        <a href="logout.php" class="text-white font-italic text-white"> LOGOUT </a>
    </div>
</body>
</html>