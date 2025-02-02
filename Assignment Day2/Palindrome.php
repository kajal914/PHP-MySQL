<html>
    <body>
        <?php
        function isPalindrome($str){
            $str = strtolower(str_replace(' ','',$str));
            $reversed= strrev($str);

            return $str === $reversed;
        }

            $word = "madam";
            if(isPalindrome($word)){
                echo "$word is a palindrome.";
            }else{
                echo "$word is not a palindrone.";
            }
            ?>
            </body>
            </html>