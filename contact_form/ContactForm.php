<?php
require_once('FormValidation.php');
$title= "Sports Warehouse Order Form";
$form = new FormValidation();
ob_start();
    if(isset($_POST["submitButton"]))
    {
        $firstNameMessage = $form->checkEmpty("firstName");
        $firstNameMessage = $firstNameMessage . "" . $form->checkName("firstName");
        $lastNameMessage = $form->checkEmpty("lastName");
        $lastNameMessage = $lastNameMessage . "" . $form->checkName("lastName");
        $emailMessage = $form->checkEmail("email");

        if($form->valid == true)
        {
            header("Location:thanks.php");
        }
        else{
            include "ContactFormForm.php";
        }
    }
        else{
            $form->valid = true;
            $firstNameMessage = "";
            $lastNameMessage = "";
            $emailMessage = "";
            include "ContactFormForm.php";
        }
        $output = ob_get_clean();
        include "ContactFormLayout.php";

?>