<?php
   include '../classes/Db.php';
   include '../session.php';
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $homeTitle = mysqli_real_escape_string($db,$_POST['homeTitle']);
      $homeImage = mysqli_real_escape_string($db,$_POST['homeImage']); 
      $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=1";
    
    if ($db->query($sql) === TRUE) {
        $message = "Successfully updated home";
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
    <title>Home</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    
    <nav>
        <ul>
        <li id="logo"><img src="../images/one_vacPackage/baseline-flight_takeoff-24px.svg" alt="logo-company"> VACAPP 2.0</li>
            <li><a href="adminHome.php"  >Admin Home</a></li>
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href=""  id="clicked">Admin About Us</a></li>
            <li><a href="adminContact.php"  >Admin Contact</a></li>
            <li><a href="adminHeader.php"  >Admin Header</a></li>
            <li><a href="adminFooter.php"  >Admin Footer</a></li>
        </ul>
</nav>

    <section id="main">
        <p> Change About Us text and image </p>
         <form action="" method="POST">
            <p> Image</p>
            <input type="text" name="image" placeholder ="image url" required> <br>
            <p> Text</p>
            <textarea rows="4" cols="50" name="text" placeholder ="about us description" required></textarea><br><br>
            <input type="submit"> <br><br>
        </form>
        <button> <a href="logout.php"> Logout</a></button>
    </section>
    <br><?php echo($message); ?>
    
    <?php  include '../classes/footer.php'; ?>
</body>
</html>