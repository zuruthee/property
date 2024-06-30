<?php
$connect = mysqli_connect("localhost", "root", "", "property" , 3307);

if (isset($_GET["name"]) && isset($_GET["email"])) {
    $name_param = $_GET["name"];
    $email_param = $_GET["email"];

    $sql = "SELECT * FROM contact WHERE email = '$email_param' AND name = '$name_param'";
    
    $run = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($run)) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        
    }
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Skyline Symphony | ContactUs </title>
        <link rel="stylesheet" href="css/cstyle.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h2 class="container-h2">Contact Us</h2>
            <p class="container-p">Get in contact with the best property sales system Skyline Symphony to find your exact life time home </p>
            <table width="100%", height="400px", border="1.0">
                <tbody>
                     <tr>
                        
                        <td>
                            <div class="formbox">
                                <form action="cupdate.php" method="post">
                                <center>
    <h3 class="h2">Get in touch with Us!</h2>

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name ?>"><br>
    
    <label for="phone">Phone No:</label>
    <input type="text" name="phone" id="phone" value="<?php echo $phone ?>"><br>
    
    <label for="phone">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email ?>"><br>
    
    <label for="text">Send a message:</label>
    <textarea id="message" name="message" rows="5" ></textarea><br>
    
    <button type="submit" name="submit">Update</button>
    <button type="submit" name="submit_insert"  formaction="cdelete.php">delete</button>
    <button type="button"><a href="contact.html">Back</a></button>
</center>

                                    </center>
                                </form>
                            </div>
                        </td>
                        
                        
                        <td>
                            <center>
                                <div class="contactInfo">
                                    <div class="box">
                                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="text">
                                            <h3>Address</h3>
                                            <p>Skyline Symphony, <br> Malabe,<br> Colombo.</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></i></div>
                                        <div class="text">
                                            <h3>Phone</h3>
                                            <p>+94-77537894</p>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                        <div class="text">
                                            <h3>E-mail</h3>
                                            <p>skylinesymphony@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </center>
                            
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


       
    
    
    
        <?php
    include 'footer.php';
    ?>
    
    
    
       


    </body>
</html>