<?php

class CheckInputText {

    public $inputString;

        public function __construct($string)
        {
            $this->inputString = $string;
        }

        public function checkString() {
            if (substr($this->inputString, 0, 2) == '{{' && substr($this->inputString, -2) == '}}'){
                echo  '<p style="color: green;">input text  check</p>';
            } else {
                echo  '<p style="color: red;">input text not check</p>';
            }
        }
}

if(isset($_POST['inputText'])) {
    $string = new CheckInputText($_POST['inputText']);
    $string->checkString();
}
