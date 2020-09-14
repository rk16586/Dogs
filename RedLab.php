<?php
    class RedLab extends Dog {  //this will inherit methods and variables of Lolly.
        function __construct($name){
            parent::__construct($name, "RedLab", 0);
        }

        function sit() {
            echo "<img src='./redLab.jpg' alt='error' width=200px height='250px' "; 
        }
    }
?>