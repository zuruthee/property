<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/fstyles.css">
</head>
<body>
<?php
    include 'header.php';
    ?>

    <div class="container">
        <h1>Feedback Form</h1>
        <form id="feedbackForm" action="fprocess.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="feedback">Feedback:</label><br>
            <textarea id="feedback" name="message" rows="4" cols="50" required></textarea><br>
            <input type="submit" name="submit" value="Submit" onclick="showMessage()">
        </form>
    </div>
   
    </div>

    
<?php
    include 'footer.php';
    ?>
</body>
</html>
