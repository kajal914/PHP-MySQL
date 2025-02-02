<html>
    <body>
        <?php
        //Concatenation

        $firstName = "Kajal";
        $lastName = "Babar";
        $fullName = $firstName."".$lastName;
        echo "Hello, $fullName\n" . "<br>";

        //String Length
        
        $str = "Hello, World!";
        echo strlen($str) . "<br>";

        //Substring Extraction

        $str = "Kajal Babar";
        echo substr($str,0,5) . "<br>";

        //Case Conversions-all four types

        $text = "Kajal Babar";
        echo strtoupper($text) . "<br>";
        echo strtolower($text) . "<br>";
        echo ucfirst($text) . "<br>";
        echo ucwords($text) . "<br>";

        //Trimming-all three types

        $str = "Hello";
        echo trim($str) . "<br>";
        echo ltrim($str) . "<br>";
        echo rtrim($str) . "<br>";

        //Reverses a string
        $name = "Hello World!";
        $arr = strrev($name);
        echo $arr . "<br>";

        //Compares two string(case-sensitive)
        $string1 = "30";
        $string2 = "25";

        $result = strcmp($string1, $string2);
        if($result == 0){
            echo "The strings are equal." . "<br>";
            }
            elseif ($result < 0){
                echo "$string1 is less than $string2." . "<br>";
            }
            else{
                echo "$string1 is greater than $string2." . "<br>";
             }


         //Compares two strings(case-insensitive)
         $string1 = "30";
         $string2 = "25";

         $result = strcasecmp($string1, $string2);
         if($result == 0){
            echo "The strings are equal." . "<br>";
            }
            elseif ($result < 0){
                echo "$string1 is less than $string2." . "<br>";
            }
            else{
                echo "$string1 is greater than $string2." . "<br>";
             }
        



        ?>
        </body>
        </html>