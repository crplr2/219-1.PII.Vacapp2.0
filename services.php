<?php
    include 'classes/Db.php';
    include 'classes/Services.php';
    $services = new Services();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="css/one_vacPackage.css">
    <link rel="stylesheet" href="css/services.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    <?php  include 'classes/Head.php'; ?> 
    <nav>
        <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="about.php" >About us</a></li>
            <li><a href="services.php" id="clicked" >Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <section id="services">
        <div class= "left">
            <img class="image" src="<?php echo($services->getServicesImageOne()); ?>" alt="">
            <p><?php echo($services->getServicesTextOne()); ?></p>
        </div>

        <div class= "right">
            <img class="image" src="<?php echo($services->getServicesImageTwo()); ?>" alt="">
            <p><?php echo($services->getServicesTextTwo()); ?></p>
        </div> 

        <div class= "left">
            <img  class="image" src="<?php echo($services->getServicesImageThree()); ?>" alt="">
            <p><?php echo($services->getServicesTextThree()); ?></p>
        </div> 

         <div class= "right">
            <img  class="image" src="<?php echo($services->getServicesImageFourth()); ?>" alt="">
            <p><?php echo($services->getServicesTextFourth()); ?></p>
        </div> 

        <div id= "footer-services">
            <?php  include 'classes/Footer.php'; ?>
        </div> 
    </section>
    
   

    
</body>
</html>