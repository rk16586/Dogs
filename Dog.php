<?php
    class Dog {
        //define class variables
        private $name;
        private $breed;
        private $age;

        //construct a new lolly (define constructors)
        function __construct($name, $breed, $age){
            $this->name = $name;
            $this->breed = $breed; 
            $this->age = $age;
        }

        //define methods
        function getName(){
            return $this->name;
        }

        function getBreed(){
            return $this->breed;
        }

        function getAge(){
            return $this->age;
        }

        function birthday(){
            echo "<p>Happy birthday to you,<br>
                happy birthday to you,<br>
                happy birthday dear " . $this->getName() . ",<br>
                happy birthday to you!<p>";
            $this->age += 1;
        }
    } 
?>