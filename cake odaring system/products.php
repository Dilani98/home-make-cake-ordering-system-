<?php
require 'config.php';
?>

<div class="section products text-center py-5 bg-light">
    <h2>Order Your Cake Today!</h2>
    <div class="row justify-content-center">
        <?php
        $products = [
            ['img' => 'image/download (1).jpeg', 'title' => 'Birthday Cake', 'price' => '$20.00'],
            ['img' => 'image/images (5).jpeg', 'title' => 'Wedding Cake', 'price' => '$50.00'],
            ['img' => 'image/images (1).jpeg', 'title' => 'Special Cake', 'price' => '$30.00'],
            ['img' => 'image/images (6).jpeg', 'title' => 'Cup Cake', 'price' => '$15.00']
        ];

        foreach ($products as $product) {
            echo '<div class="col-md-3">
                    <div class="card animate-hover">
                        <img src="'.$product['img'].'" class="card-img-top" alt="'.$product['title'].'">
                        <div class="card-body">
                            <i class="fas fa-star fa-2x mb-2" style="color: #FFD700;"></i>
                            <h3>'.$product['title'].'</h3>
                            <p>'.$product['price'].'</p>
                            <button class="btn btn-primary animate-btn">Order Now</button>
                        </div>
                    </div>
                  </div>';
        }
        ?>
    </div>
</div>
