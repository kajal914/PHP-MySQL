<html>
    <body>
        <?php
        
        //Arithmetic Operation(+,-,*,/,%)
        $a = 5;
        $b = 10;
        echo $a+$b,"<br>";
        echo $a-$b,"<br>";
        echo $a*$b,"<br>";
        echo $a/$b,"<br>";
        echo $a%$b,"<br>";

        //Rounds up to the neareast integer
        $s = 13.7;
        echo ceil($s),"<br>";

        //Rounds down to the nearest integer
        $k = (9.6);
        echo floor($k),"<br>";

        //Returns the square root
        $c = 196;
        echo sqrt($c),"<br>";

        //Generates a random number between $min and $max
        $min = 9;
        $max = 14;
        echo rand($min,$max),"<br>";

        //Checks if a value is numeric or not
        $d = 14;
        echo is_numeric($d);
        ?>
        </body>
        </html>