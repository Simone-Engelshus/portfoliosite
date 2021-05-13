<?php
    $title = "Thank You";
    ob_start();
    include "confirmation.php";
    $output = ob_get_clean();
    include "ContactFormLayout.php";
?>