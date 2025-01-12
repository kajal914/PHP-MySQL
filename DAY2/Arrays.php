<html>
    <body>
        <?php
        //Arrays and functions

        //Arrays Indexed

        $fruits = ["Banana","Apple","Cherry","Orange"];
        echo "Selected fruit : ". $fruits[1];
        
        foreach($fruits as $fruit){
            echo "<br> Fruits :". $fruit;
        }


        //Associative Array
        echo "<br>";
        $ages =["Rehaan"=>25,"Vedant"=>18,"Arman"=>22];
        echo"<br> Select Age :" .$ages["Rehaan"];
        foreach($ages as $name =>$age){
            echo"<br>" .$name . "is". $age . "Years old.";
        }

        //Multi-dimensional Aray
        echo"<br>";
        $students = [
            ["Rehaan" ,25, false],
            ["Vedant" , 18, true],
            ["Arman" ,22, false],
        ];
        echo "<br> student 1 is present in the class :" . $students[0][2];

        //Array Manupulation

        $classroom = ["Kajal","Janhavi","Bhakti"];

        //Adding elements
        echo"<br>";
        $classroom[] = "Kshitija";
        array_push($classroom, "Vishakha");
        foreach($classroom as $student){
            echo "<br> Student :". $student;
        }

        //Updating
        echo"<br>";
        $classroom[2] = "Vedant";
        foreach($classroom as $student){
            echo "<br> Student:". $student;
        }


        //Counting Elements
        echo"<br><br>";
        echo "Number od Elements in the array are :". count($classroom);

        //Deleting Elements
        unset($classroom[1]);
        echo "<br>";
        print_r($classroom);

        //Re-Indexing Elements
        $classroom = array_values($classroom);
        echo "<br>";
        print_r($classroom);



        ?>
        </body>
        </html>


