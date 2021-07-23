"use strict";


var contactForm = document.getElementById("contactForm"); 
if (contactForm){
    contactForm.setAttribute("novalidate", "");

    contactForm.addEventListener("submit", (event) => {

        let errorMessages = [];

        const errorArea = document.getElementById("error-area");

        errorArea.innerHTML = "";
        
        const firstNameValue = contactForm.elements["firstName"].value.trim();
        const lastNameValue = contactForm.elements["lastName"].value.trim();
        const contactValue = contactForm.elements["contact"].value.trim();
        const emailValue = contactForm.elements["email"].value.trim();
        const questionValue = contactForm.elements["question"].value.trim();
        
        if (firstNameValue === "" || lastNameValue === "" || contactValue === "" || emailValue === "" ){// Continue with submission
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
        const contactRegex= /^[0-9]{10}$|^\(0[1-9]{1}\)[0-9]{8}$|^[0-9]{8}$|^[0-9]{4}[ ][0-9]{3}[ ][0-9]{3}$|^\(0[1-9]{1}\)[ ][0-9]{4}[ ][0-9]{4}$|^[0-9]{4}[ ][0-9]{4}$/;

        if (!contactRegex.test(contactValue)) {
            errorMessages.push("Phone Number does not appear to be valid.");
        }


        const emailRegex= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (!emailRegex.test(emailValue)) {
            errorMessages.push("Email does not appear to be valid.");
        }

        if (questionValue.length < 30){
            errorMessages.push("Your message must be at least 30 characters.");
        }

        if (errorMessages.length > 0){
            event.preventDefault();

            errorArea.innerHTML += `<ul><li>${errorMessages.join("</li><li>")}</li></ul>`;
        }
    });
   
}

