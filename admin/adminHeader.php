<?php
include '../classes/Db.php';
include '../session.php';
$message = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    <?php  include 'header.php'; ?> 
    <nav>
        <ul>
        <li><a href="adminHome.php" >Admin Home</a></li>
            <li><a href="adminAbout.php">Admin About Us</a></li>
            <li><a href=""   id="clicked"  >Admin Header</a></li>
            <li><a href="adminFooter.php" >Admin Footer</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
        </ul>
    </nav>

    <section id="admin">
        <p> Change Header Text </p>
         <form action="" method="POST">
            <p> Text</p>
            <textarea rows="4" cols="50" name="footerText" placeholder ="Footer text" required></textarea><br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a href="logout.php"> Logout</a></button>
        <br><?php echo($message);?> <br>
    </section>
    
    
    <?php  include 'footer.php'; ?>
</body>
</html>