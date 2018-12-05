<?php
   include '../classes/Db.php';
   include '../session.php';
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $aboutImage = mysqli_real_escape_string($db,$_POST['aboutImage']);
      $aboutText = mysqli_real_escape_string($db,$_POST['aboutText']); 
      $sql = "UPDATE about SET texto_about='$aboutText', url_imagen_about='$aboutImage' WHERE id=1";
    
    if ($db->query($sql) === TRUE) {
        $message = "Successfully updated About us";
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
    <title>Admin About</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link rel="stylesheet" href="../css/services.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    <?php  include 'header.php'; ?> 
    <nav>
        <ul>
            <li><a href="adminHome.php" >Admin Home</a></li>
            <li><a href="" id="clicked"  >Admin About Us</a></li>
            <li><a href="adminHeader.php"  >Admin Header</a></li>
            <li><a href="adminFooter.php"  >Admin Footer</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
        </ul>
</nav>

    <section id="admin">
        <p> Change About Us text and image </p>
         <form action="" method="POST">
            <p> Image</p>
            <input type="text" name="aboutImage" placeholder ="image url" required> <br>
            <p> Text</p>
            <textarea rows="4" cols="50" name="aboutText" placeholder ="about us description" required></textarea><br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a id="botonLogout" href="logout.php"> Logout</a></button>
        <br><br><?php echo($message); ?><br>
    </section>

    
    <?php  include 'footer.php'; ?>
</body>
</html>