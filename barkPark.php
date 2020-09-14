<!DOCTYPE html>
<html>
	<head>
        <title>Bark Park</title>
        <link rel="stylesheet" type="text/css" href="flip.css">
	</head>

	<body>
        <h1>Welcome to the Bark Park</h1>
        <?php
            require("./Dog.php");
            require("./Pug.php");
            require("./RedLab.php");

            $Arya = new RedLab("Arya");
            $Bruce = new Pug("Bruce");
            $Clifford = new Dog("Clifford", "Big Red Dog", 20);

            $dogs = [$Arya, $Bruce, $Clifford];
            echo "<p>Dogs in Park:</p>";
            foreach( $dogs as $dog ) {
                echo "<p>Name: " . $dog->getName() . "<br>
                    Breed: " . $dog->getBreed() . "<br>
                    Age: " . $dog->getAge() . "</p>";
            }

            $Arya->birthday();
            echo "<p>Arya's age is now:" . $Arya->getAge() . "</p>";

            echo "<p>Bruce do a flip!</p><br>";
            $Bruce->flip();

            echo "<p>Arya sit!</p><br>";
            $Arya->sit();

        ?>
    </body>
</html>