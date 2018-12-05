<?php
    include 'classes/Db.php';
    $message = '';
    $object = new Db();
    $db = $object->connect();

   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $message = mysqli_real_escape_string($db,$_POST['message']); 
      $sql = "INSERT INTO contact(nombre,email,mensaje) VALUES('$name', '$email', '$message')";
    
    if ($db->query($sql) === TRUE) {
        $message = "MESSAGE WAS SENT SUCCESSFULLY";
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
    <title>Contact</title>
    <link rel="stylesheet" href="css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    <?php  include 'classes/Head.php'; ?> 
    <nav>
        <ul>
            <li id="home" ><a href="index.php" >Home</a></li>
            <li><a href="about.php" >About us</a></li>
            <li><a href="services.php" >Services</a></li>
            <li><a href="contact.php" id="clicked" >Contact</a></li>

        </ul>
    </nav>

   <section id="admin">

         <form action="" method="POST">
            <p><?php echo($message); ?></p><br>
            <p> Contact us send  a  message </p>
            <p> Name</p>
            <input id="primerTexto" type="text" name="name" placeholder ="name" required> <br>
            <p> Email </p>
            <input id="segundoTexto" type="text" name="email" placeholder ="email" required> <br>
            <p> Message </p>
            <textarea   name="message"  cols="80" rows="13" required></textarea><br><br>
            <input  id="botonSubmit" type="submit"> <br><br>
        </form>
    </section>


    
    <?php  include 'classes/Footer.php'; ?>
    <script src="javascript/scripts.js"></script>
</body>
</html>