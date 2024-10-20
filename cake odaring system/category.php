<?php
require 'config.php';
?>


<div class="section category text-center py-5" id="category-section">
    <h2 class="animate-slide">Categories</h2>
    <div class="row justify-content-center">
        <?php
        $categories = [
            ['img' => 'image\download.jpeg', 'title' => 'Birthday Cake'],
            ['img' => 'image\images (5).jpeg', 'title' => 'Wedding Cake'],
            ['img' => 'image\images (1).jpeg', 'title' => 'Special Cake']];

        foreach ($categories as $category) {
            echo '<div class="col-md-3">
                    <div class="card animate-hover">
                        <img src="'.$category['img'].'" class="card-img-top" alt="'.$category['title'].'" width="300" height="300">
                        <div class="card-body">
                            <h3>'.$category['title'].'</h3>
                        </div>
                    </div>
                  </div>';
        }
        ?>
    </div>
</div>
