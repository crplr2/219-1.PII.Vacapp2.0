<?php
   include '../classes/Db.php';
   include '../classes/Services.php';
   include '../session.php';
   $services = new Services();
   $message = '';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $servicesImageOne = mysqli_real_escape_string($db,$_POST['servicesImageOne']);
      $servicesImageTwo = mysqli_real_escape_string($db,$_POST['servicesImageTwo']);
      $servicesImageThree = mysqli_real_escape_string($db,$_POST['servicesImageThree']);
      $servicesImageFourth = mysqli_real_escape_string($db,$_POST['servicesImageFourth']);

      $servicesTextOne = mysqli_real_escape_string($db,$_POST['servicesTextOne']);
      $servicesTextTwo = mysqli_real_escape_string($db,$_POST['servicesTextTwo']);
      $servicesTextThree = mysqli_real_escape_string($db,$_POST['servicesTextThree']);
      $servicesTextFourth = mysqli_real_escape_string($db,$_POST['servicesTextFourth']);

      $sql1 = "UPDATE services SET url_imagen_services='$servicesImageOne',  texto_services='$servicesTextOne' WHERE id=1";
      $sql2 = "UPDATE services SET url_imagen_services='$servicesImageTwo',  texto_services='$servicesTextTwo' WHERE id=2";
      $sql3 = "UPDATE services SET url_imagen_services='$servicesImageThree',  texto_services='$servicesTextThree' WHERE id=3";
      $sql4 = "UPDATE services SET url_imagen_services='$servicesImageFourth',  texto_services='$servicesTextFourth' WHERE id=4";
      
    
    if ($db->query($sql1) === TRUE && $db->query($sql2) === TRUE && $db->query($sql3) === TRUE && $db->query($sql4) === TRUE) {
        $message = "Successfully updated Services ";
        header("Refresh:0");
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
    <title>Admin Services</title>
    <link rel="stylesheet" href="../css/one_vacPackage.css">
    <link rel="stylesheet" href="../css/services.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    <?php  include 'header.php'; ?> 
    <nav>
        <ul>
            <li><a href="adminHome.php" >Admin Home</a></li>
            <li><a href="adminAbout.php"   >Admin About Us</a></li>
            <li><a href="adminHeader.php"  >Admin Header</a></li>
            <li><a href="adminFooter.php"  >Admin Footer</a></li>
            <li><a href=""  id="clicked"  >Admin Services</a></li>
            <li><a href="adminContact.php" >Admin Contact</a></li>
        </ul>
</nav>


    <section id="services">

    <form action="" method="POST">
        <div class= "left">
            <img class="image" src="<?php echo($services->getServicesImageOne()); ?>" alt=""><br><br>
            <textarea name="servicesImageOne" rows="2" cols="80"> <?php echo($services->getServicesImageOne()); ?></textarea><br>
            <textarea name="servicesTextOne" rows="6" cols="80"> <?php echo($services->getServicesTextOne()); ?></textarea>
        </div>

        <div class= "right">
            <img class="image" src="<?php echo($services->getServicesImageTwo()); ?>" alt=""><br><br>
            <textarea name="servicesImageTwo" rows="2" cols="80"> <?php echo($services->getServicesImageTwo()); ?></textarea><br>
            <textarea name="servicesTextTwo" rows="6" cols="80"> <?php echo($services->getServicesTextTwo()); ?></textarea>
        </div> 

        <div class= "left">
            <img  class="image" src="<?php echo($services->getServicesImageThree()); ?>" alt=""><br><br>
            <textarea name="servicesImageThree" rows="2" cols="80"> <?php echo($services->getServicesImageThree()); ?></textarea><br>
            <textarea name="servicesTextThree" rows="6" cols="80"> <?php echo($services->getServicesTextThree()); ?></textarea>
        </div> 

         <div class= "right">
            <img  class="image" src="<?php echo($services->getServicesImageFourth()); ?>" alt=""><br><br>
            <textarea name="servicesImageFourth" rows="2" cols="80"> <?php echo($services->getServicesImageFourth()); ?></textarea><br>
            <textarea name="servicesTextFourth" rows="6" cols="80"> <?php echo($services->getServicesTextFourth()); ?></textarea>
        </div> 
        <input type="submit"> <br><br>
    </form>
        <button> <a id="botonLogout"  href="logout.php"> Logout</a></button>
        <br><br><?php echo($message); ?><br>
        <div id= "footer-services">
            <?php  include 'footer.php'; ?>
        </div> 

    
    </section>

</body>
</html>