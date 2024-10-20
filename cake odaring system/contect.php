<?php
require 'config.php';
?>


<section id="contact">
    <div class="contact-box"> <!-- Box Container -->
        <h2>Contact Us</h2>
        <form action="config.php" method="post">
                        <!-- Added 'name' attributes -->
                        <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                        <textarea name="message" class="form-control mb-3" rows="5" placeholder="Message" required></textarea>
                        <button type="submit" name="submit" class="btn btn-dark btn-block" style="background-color: #db3058; border-color: #db3058;">Send Message</button>
                    </form>
                </div>
</section>

<script src="script.js"></script>