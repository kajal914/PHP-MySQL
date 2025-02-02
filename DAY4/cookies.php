<html>
    <body>
        <?php
        //Cookies 

        //Set a cookie
        
        $cookieName = 'langPreference';
        $cookieValue = 'French';
        $cookieExpire = time() + (180);

        setcookie($cookieName, $cookieValue, $cookieExpire,"/");

        echo "Cookie has been set!";

        //Accessing the cookie
        if(isset($_COOKIE[$cookieName])){
            echo "<br> Your language preference is : ". $_COOKIE[$cookieName];
        }
        else{
            echo "Cookie is not set !";
        }

        //Deleting cookie or Block the cookie
        setcookie($cookieName ,$cookieValue, time()- (30) , "/");
        echo "<br> Cookie has been deleted !";

        ?>
        </body>
        </html>
