<?php
//Contact Page
?>
<div class="nav-bg"></div>
<section class="about">
    <div class="container">
        <h2>Contact</h2>

        <?php include('contact_form/ContactForm.php'); ?>
        <script><?php echo file_get_contents('js/formAlert.js'); ?></script>
    </div>
</section>