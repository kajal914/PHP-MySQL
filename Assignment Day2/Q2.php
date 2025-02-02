<html>
    <body>
        <?php
        // Associative array of 3 cities and their populations

        $cities = array("Mumbai" =>12442373, "Delhi" =>11034375, "Hyderabad" =>6993262);
        $maxCity = array_keys($cities,max($cities))[0];

        echo "The city with the highest population is: $maxCity";
        

        ?>
        </body>
        </html>