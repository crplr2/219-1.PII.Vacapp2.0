<?php
   include '../classes/Db.php';
   include '../session.php';
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $footerText = mysqli_real_escape_string($db,$_POST['footerText']);
      $sql = "UPDATE footer SET texto_footer='$footerText' WHERE id=1";
    
    if ($db->query($sql) === TRUE) {
        $message = "Successfully updated Footer ";
    } else {
        $message = "Error updating : " . $db->error;
    }
    $db->close();  
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Footer</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
<?php  include 'header.php'; ?> 
    <nav>
        <ul>
        <li><a href="adminHome.php" >Admin Home</a></li>
            <li><a href="adminAbout.php">Admin About Us</a></li>
            <li><a href="adminHeader.php"  >Admin Header</a></li>
            <li><a href=""   id="clicked"  >Admin Footer</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
        </ul>
</nav>

    <section id="admin">
        <p> Change Footer Text </p>
         <form action="" method="POST">
            <p> Text</p>
            <textarea rows="4" cols="50" name="footerText" placeholder ="Footer text" required></textarea><br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a href="logout.php"> Logout</a></button>
        <br><br><?php echo($message);?> <br>
    </section>

    
    <?php  include 'footer.php'; ?>
</body>
</html>