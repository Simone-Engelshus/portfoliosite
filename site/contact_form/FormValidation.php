<?php
class FormValidation
{
    public $valid=true;
    private $_errorFields = [];

    public function checkEmpty($fieldName)
    {
        $message = "";
        if (!isset($_POST[$fieldName]) || empty($_POST[$fieldName])) {
            $this->errorFields[] = $fieldName;
            $this->valid = false;
            $message = "Please supply a value";
        }
        return $message;
    }

    public function checkEmail($fieldName)
    {
        $message = "";
        if(isset($_POST[$fieldName]))
        {
            if(!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)){
                $this->errorFields[] = $fieldName;
                $this->valid = false;
                $message = "Please enter a valid email";
            }
        }
        return $message;
    }

    public function checkName($fieldName){
        $message = "";
        if(isset($_POST[$fieldName]) && !empty($_POST[$fieldName]))
        {
            if (!preg_match("/^[a-zA-Z\-']*$/", $_POST[$fieldName]))
            {
                $this->errorFields[] = $fieldName;
                $this->valid = false;
                $message = "Only letters, apostrophe, hyphens and white space are allowed.";
            }
            }
            return $message;
            
        }
        public function setErrorClass($fieldName)
        {
            if(in_array($fieldName, $this->_errorFields))
            {
                return ' class="error"';
            }
        }
        public function setValue($fieldName)
        {
            if(isset($_POST[$fieldName]))
            {
                return htmlentities($_POST[$fieldName]);
            }
        }
        public function setSelected($fieldName, $fieldValue)
        {
            if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
            {
                return "selected";
            }
        }
        public function setChecked($fieldName, $fieldValue)
        {
            if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
            {
                return "selected";
            }
        }
}
?>