<html>
    <body>
        <?php
        //Inheritance
        class Animal{
            public function makeSound(){
                return "Some generic sound";
            }
        }

        class Cat extends Animal{
            public function makeSound(){
                return "Meow";
            }
        }

        class Dog extends Animal{
            public function makeSound(){
                return "Bark <br>";
            }
        }

        $dog = new Dog();
        echo $dog->makeSound();
        $cat = new Cat();
        echo $cat->makeSound();

        ?>
        </body>
        </html>