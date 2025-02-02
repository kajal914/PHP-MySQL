<html>
    <body>
        <h1>Submitted Form</h1>
        <?php
        // Check if form is received
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = htmlspecialchars($_POST["name"]);
            $mobile = htmlspecialchars($_POST["mobile"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            // Display the submitted data

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Mobile Number:</strong> $mobile</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
        }
        else{
            echo"No data submitted";
        }

        ?>
        </body>
        </html>