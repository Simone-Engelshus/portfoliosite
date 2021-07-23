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
        $firstName = $_POST['firstName'];
        $lastName = $_POST['firstName'];
        $contactEmail = $_POST['email'];
        $contactNo = $_POST['contact'];
        $question = $_POST['question'];
        $to = "simonee240294@gmail.com";
        $body = "";

        if($form->valid == true)
        {
            $body .= "From: ".$firstName." ".$lastName."\r\n";
            $body .= "Email: ".$contactEmail."\r\n";
            $body .= "Phone Number: ".$contactNo."\r\n";
            $body .= "Question: ".$question."\r\n";
            $headers = 'From: ' .$contactEmail.'';
            mail($to, 'Enquiry from '.$firstName.' '.$lastName.'', $body, $headers);
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