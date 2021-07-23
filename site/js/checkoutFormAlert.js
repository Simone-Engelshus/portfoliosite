"use strict";


var checkoutForm = document.getElementById("checkout"); 
if (checkoutForm){
    checkoutForm.setAttribute("novalidate", "");

    checkoutForm.addEventListener("submit", (event) => {

        let errorMessages = [];

        const errorArea = document.getElementById("error-area");

        errorArea.innerHTML = "";
        
        const firstNameValue = checkoutForm.elements["firstName"].value.trim();
        const lastNameValue = checkoutForm.elements["lastName"].value.trim();
        const addressValue = checkoutForm.elements["address"].value.trim();
        const phoneValue = checkoutForm.elements["phone"].value.trim();
        const emailValue = checkoutForm.elements["email"].value.trim();
        const creditcardValue = checkoutForm.elements["creditcard"].value.trim();
        const nameOnCardValue = checkoutForm.elements["nameOnCard"].value.trim();
        const expiryValue = checkoutForm.elements["expiry"].value.trim();
        const csvValue = checkoutForm.elements["csv"].value.trim();
    
        
        if (firstNameValue === "" || lastNameValue === ""|| addressValue === ""|| phoneValue === ""|| emailValue === ""|| creditcardValue === ""|| nameOnCardValue === ""|| expiryValue === ""|| csvValue === ""){// Continue with submission
            event.preventDefault();
            errorArea.innerHTML = '<p>Enter all required fields</p>';
            return;
        }

        if (firstNameValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (lastNameValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (addressValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (phoneValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        const emailRegex= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (!emailRegex.test(emailValue)) {
            errorMessages.push("Email does not appear to be valid.");
        }
        if (creditcardValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (nameOnCardValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (expiryValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }
        if (csvValue.length < 2){
            errorMessages.push("First name must be 2 or more characters.");
        }

        if (errorMessages.length > 0){
            event.preventDefault();

            errorArea.innerHTML += `<ul><li>${errorMessages.join("</li><li>")}</li></ul>`;
        }
    });
   
}

/* contactForm.onsubmit = checkForm;// Validation function –checks the data in the form
function checkForm(){// Get the form data
    var firstName = document.getElementById("firstName"); 
    var lastName = document.getElementById("lastName"); 
    var contact = document.getElementById("contact"); 
    var email = document.getElementById("email");
    // or testForm.elements["firstName"];// Check if the first name is valid (not blank)
    if (firstName.value != "" && lastName.value != "" && contact.value != "" && email.value != "" ){// Continue with submission
        return true;
    }
        else{// Display error message and cancelthe submission
            alert("Please fill in all fields");
            return false;
        }
    } */