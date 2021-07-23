<?php if($form->valid == false): ?>
    <p class="error">Please supply the missing information</p>
<?php endif; ?>
<div id="error-area" class="error-area"></div>
<form action="" method="post" name="contactForm" id="contactForm">
    <fieldset>
            <p class="contact-field">
                <label for="firstName" <?= $form->setErrorClass("firstName") ?>>First Name*</label>
                <input type="text" name="firstName" id="firstName" value="<?= $form->setValue("firstName") ?>">
                <span class="message"><?= $firstNameMessage ?></span>
            </p>
            <p class="contact-field">
                <label for="lastName" <?= $form->setErrorClass("lastName") ?>>Last Name*</label>
                <input type="text" name="lastName" id="lastName" value="<?= $form->setValue("lastName") ?>">
                <span class="message"><?= $lastNameMessage ?></span>
            </p>
            <p class="contact-field">
                <label for="contact">Contact Number*</label>
                <input type="text" name="contact" id="contact" value="<?= $form->setValue("email")?>">
            </p>
            <p class="contact-field">
                <label for="email">Email*</label>
                <input type="text" name="email" id="email" value="<?= $form->setValue("email")?>">
                <span class="message"><?= $emailMessage ?></span>
            </p>
            <p class="contact-field">
                <label for="question">Question*</label>
                <textarea name="question" id="question"></textarea>
            </p>
        <div class="form-buttons">
            <p>
                <input type="submit" name="submitButton" id="submitButton" value="Send Details">
                <input type="reset" name="resetButton" id="resetButton" value="Reset Form">
            </p>
        </div>
    </fieldset>
</form>
