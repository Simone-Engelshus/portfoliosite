"use strict";


var loginForm = document.getElementById("loginForm"); 
if (loginForm){
    loginForm.setAttribute("novalidate", "");

    loginForm.addEventListener("submit", (event) => {

        let errorMessages = [];

        const errorArea = document.getElementById("error-area");

        errorArea.innerHTML = "";
        
        const userNameValue = loginForm.elements["username"].value.trim();
        const passwordValue = loginForm.elements["password"].value.trim();
    
        
        if (userNameValue === "" || passwordValue === "" ){// Continue with submission
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