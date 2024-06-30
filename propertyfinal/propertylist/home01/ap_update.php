<?php
include('connection.php');
$connection = mysqli_connect("localhost","root","","property",3307);


$edit = $_GET ['email'];

      

$sql = "select * from appointment where email = '$edit'";


$run = mysqli_query($connection,$sql);

while($row =mysqli_fetch_array($run))
{  $name=$row['name'];
    $phone=$row['phone'];
    $email=$row['email'];
    $ddate=$row['ddate'];
    $dtime=$row['dtime'];
   
    
    
   
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Skyline Symphony</title>
        <link rel="stylesheet" href="css/appointment.css">
        <link rel="stylesheet" href="/contact1/style.css">
        <link rel="stylesheet" href="css/ap_style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skyline Symphony</title>
        <link rel="stylesheet" href="style.css">
    
        
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https: //fonts.googleapis.com/css2?amily=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel=" stylesheet">

    </head>
    <body>
    <?php
    include 'header.php';
    ?>


        
        <div class="background">
            <div class="booking-form">
                <h2>Book an Appointment</h2>


                <form action="ap_edit.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"value=<?php echo $name ?> required>
 
                    <label for="phone">Phone No:</label>
                    <input type="text" name="phone" id="phone" value=<?php echo $phone ?> required>

                    <label for="phone">Email:</label>
                    <input type="text" name="email" id="email" value=<?php echo $email ?> required>

                    <label for="date">Date:</label>
                    <input type="date" name="ddate" id="ddate" value=<?php echo $ddate ?> required>

                    <label for="time">Time:</label>
                    <input type="time" name="dtime" id="dtime" value=<?php echo $dtime?>  required>

                    <button type="submit" name = "register">UPDATE</button> <br>
                    <input type="submit" name="submit_insert" value="delete" formaction="ap_delete.php">
                </form>
            </div>
        </div>

        <?php
    include 'footer.php';
    ?>
    
    
    
    
    
    
    
        

    </body>
</html>