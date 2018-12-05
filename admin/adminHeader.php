<?php
   include '../classes/Db.php';
   include '../session.php';
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $headerTitle = mysqli_real_escape_string($db,$_POST['headerTitle']);
      $headerImage = mysqli_real_escape_string($db,$_POST['headerImage']); 
      $sql = "UPDATE header SET texto_header='$headerTitle', imagen_header='$headerImage' WHERE id=1";
    
    if ($db->query($sql) === TRUE) {
        $message = "Successfully updated header";
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
    <title>Admin Header</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link rel="stylesheet" href="../css/services.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    
<?php  include 'header.php'; ?> 
    <nav>
        <ul>
            <li><a href="adminHome.php">Admin Home</a></li>
            <li><a href="adminAbout.php"  >Admin About Us</a></li>
            <li><a href=""   id="clicked" >Admin Header</a></li>
            <li><a href="adminFooter.php"  >Admin Footer</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
        </ul>
</nav>

    <section id="admin">
        <p> Change header text and image </p>
         <form action="" method="POST">
            <p> Header Title</p>
            <input type="text" name="headerTitle" placeholder ="text" required>
            <p> Image URL</p>
            <input type="text" name="headerImage" placeholder ="image url" required> <br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a id="botonLogout"  href="logout.php"> Logout</a></button>
        <br><br><?php echo($message); ?><br>
    </section>

    
    <?php  include 'footer.php'; ?>
</body>
</html>