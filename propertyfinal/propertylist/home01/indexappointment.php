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

              

                <form action="appointment.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
 
                    <label for="phone">Phone No:</label>
                    <input type="text" name="phone" id="phone" required>

                    <label for="phone">Email:</label>
                    <input type="text" name="email" id="email" required>

                    <label for="date">Date:</label>
                    <input type="date" name="ddate" id="ddate" required>

                    <label for="time">Time:</label>
                    <input type="time" name="dtime" id="dtime" required>

                    <button type="submit" name = "register">Book Now </button>
                </form>
            </div>
        </div>

        <?php
    include 'footer.php';
    ?>
    

    </body>
</html>