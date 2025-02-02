<html>
    <body>
        <?php
        //Classes and Object
        class Car{
            public $brand; //Property of the car
            public $color;//Property of the car
            //private
            //protected
            public function startEngine(){
                return "The engine is starting.....";
            }
        }

        //Create an object
        $car = new Car();
        $car->brand = "Mercedes";
        $car->color = "Black";

        echo"Car Brand: ". $car->brand . "<br>";
        echo $car->startEngine();

        ?>
        </body>
        </html>