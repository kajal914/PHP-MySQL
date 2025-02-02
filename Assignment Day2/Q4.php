<html>
    <head>
        <?php
        ?>
          
        <title>Feedback form</title>

        </head>
        <body>
        <div class="form-container">
         <h1>Fedback Form</h1>


        <form action="feedback_display.php"
         method="POST">

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>


        <label for="mobile">Mobile Number:</label><br>
        <input type="num" id="mobile" name="mobile" required><br><br>


        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>


         <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>

        

        <button type="submit>"Submit></button>

        </form>
        </body>
        </html>