<html>
    <body>
        <?php
        //This is single line comment
        //echo "Hello World";

         echo"Hello World!";
         echo "This is a comment example";

         //Scalar Types
         $name = "Rehaan";         //string
         $age = 18;               //Integer
         $time = 14.46;          //Float 
         $class = true;         //boolean

         //compound types
         $student_arr = array("kajal","jaanvi","bhakti");  //array

         class Students{
            public $marks;
         }
         $stud = new Students();
         $stud->marks = 90;

         //Special Types
         $null_var = null;

         echo "<br> String : ", $name;
         echo "<br> Integer: ", $age;
         echo "<br> Float : ", $time;
         echo "<br> Boolean : ", $class;
         echo "<br> Array : ", $student_arr[0];

         //echo "object : ", $stud
         echo "<br> Null :",$null_var;

        
        /*This is multiline comment
        developed for php sessions*/
        ?>
        </body>
        </html>