<html>
    <body>
        <?php //control Structures
        $name = "Kshitija";
        if($name=="Kajal"){
            echo $name." Name is correct";
        }
        else{
            echo $name." Name is not correct";
        }



        //Conditional Statement if and if---else
        $marks = 95;

        if($marks >= 80){
            echo "<br> You got Grade A";
        }
        elseif($marks >= 60){
            echo "<br> you got Grade B";
        }
        elseif($marks >= 40){
            echo "<br> You got Grade C";
        }
        else{
            echo "<br> You got Grade D";
        }
        
        

        //Conditional Statement Switch

        $day = "Sunday";
        switch($day){
            case "Sunday":
                echo "Its Sunday !!!";
                break;
            case "Monday":
                echo "Its Monday !!!";
                break;
            case "Tuesday":
                echo "Its Tuesday !!!";
                break;
            case "Wednesday":
                echo "Its Wednesday !!!";
            break;
            case "Thursday":
                echo "Its Thursday !!!";
                break;
            default:
            echo "NO Matching Found!!";        
        }


        // Iterative control structures while loop
        echo"<br>";

        $count = 1;
        while($count <=9){
            echo "<br> Count is ". $count;
            $count++;
        }

        //Iterative control Structure do while loop
        echo"<br>";
        $num = 1;
        do{
            echo "<br>Do while Number is ".$num;
            $num++;
        }
        while($num <= 7); 


        //Iterative control Structure for loop
        echo"<br>";
        for($i=1; $i<=3; $i++){
            echo "<br> for loop number :". $i;
        }


         //Iterative control Structure foreach loop
         echo"<br>";
         $array = ["Red","Green","Blue","Yellow","Pink"];
         foreach($array as $color){
            echo "<br> Color :". $color;
         }




        ?>
        </body>
        </html>