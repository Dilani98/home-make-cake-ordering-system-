<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Made Cake</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="all-content">
  
    <?php include 'navbar.php'; ?>

  
    <div class="home">
        <div class="content" data-aos="zoom-out-right">
            <h3>Delicious<br>Home Cake Making</h3>
            <h2>Category <span class="changecontent"></span></h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="btn">Order Now</a>
        </div>
        <div class="img" data-aos="zoom-out-left">
            <img src="assets/images/background.png" alt="">
        </div>
    </div>

  
    <?php include 'about.php'; ?>


    <?php include 'category.php'; ?>

    <?php include 'banner.php'; ?>

    <?php include 'products.php'; ?>

    <?php include 'gallary.php'; ?>

    <?php include 'contect.php'; ?>

    <?php include 'follow-us.php'; ?>

    <?php include 'footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
