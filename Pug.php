<?php
    class Pug extends Dog {  //this will inherit methods and variables of Lolly.
        function __construct($name){
            parent::__construct($name, "Pug", 0);
        }

        function flip() {
            echo "<img src='./pug.jpg' alt='error' width=200px height='150px' class='rotate'>"; 
        }
    }
?>