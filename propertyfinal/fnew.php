<?php
$connection = mysqli_connect("localhost","root","","property",3307);


$edit = $_GET ['email'];

      

$sql = "select * from feedback where email = '$edit'";


$run = mysqli_query($connection,$sql);

while($row =mysqli_fetch_array($run))
{  $name=$row['name'];
    $email=$row['email'];
    
   
}

?>


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
        <form id="feedbackForm" action="fupdate.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value=<?php echo $name ?> ><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  value=<?php echo $email ?>><br>
            <label for="feedback">Feedback:</label><br>
            <textarea id="feedback" name="message"  ></textarea><br>
            <input type="submit" name="submit" value="Submit" > <br>
            <input type="submit" name="submit_insert" value="delete" formaction="fdelete.php">
        </form>
    </div>
   
    </div>

    
   
    <?php
    include 'footer.php';
    ?>
</body>
</html>
