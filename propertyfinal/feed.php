<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/fstyles.css">
    <style>
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    .button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<?php
    include 'header.php';
    ?>

 
    <div class="con">
        <h1>Feedback Form</h1>
        <form id="feedbackForm" action="fnew.php" method="get">
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
        
            <input type="submit" name="submit" value="update" onclick="showMessage()">
           
        </form> <br>
        <a href="feedback.php" class="button">Back</a>
    </div>
    
    <?php
    include 'footer.php';
    ?>
    
</body>
</html>
