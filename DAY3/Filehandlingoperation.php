<html>
    <body>
        <?php
        // File Handling Operation

        //Create a New File
        $file = fopen("Student.txt","w");
        //fclose($file);
        echo "File has been Created";

        // Write in a New File
        fwrite($file, "Hello Student File !! \n This is test");
        echo"<br> Text has been Inserted";

        //Read a File
        echo "<br>";
        $file_read = fopen("Student.txt","r");
        while(!feof($file_read)){
            echo fgets($file_read)."<br>";
        }
        fclose($file_read);

        //Deleting a file 

        if(file_exists("Student.txt")){
            unlink("Student.txt");
            echo"<br><br>File has been deleted !!";
        }
        else{
            echo"<br><br>File not found";
        }

        ?>
        </body>
        </html>
