<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nascence</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $message = $_GET['message'];
    ?>

<div class="topnav">
    <img src="nascence-logo.png" alt="illust" class="site-logo">
    <ul>
        <li><a href="index.php">Home</a>
        <li><a href="about.php">About</a>
        <li><a class="active" >Contact</a>
    </ul>
    </div>
    
    
    <img src="home-illustration.svg" alt="illust" class="img2">
    <h1 class="contact-title">Contact Us</h1>
    <div class="blank2">
    
    </div>
    <form method="get" action="tampil.php" enctype="multipart/form-data">
        <input type="text" class="form" name="nama" required="" autocomplete="off" placeholder="Full Name"><br/>
        <input type="email" class="form" name="email" required="" autocomplete="off" placeholder="Email"><br/><br/>
        <input type="message" class="form" name="message" required="" autocomplete="off" placeholder="Your Message"><br/><br/>
        <input type="submit" value="Submit" name="submit" class="button-contact">
    </form>

    <p>Thankyou, Your Message has been sent.</p>

</div>
</body>
</html>