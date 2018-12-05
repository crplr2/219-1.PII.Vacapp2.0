<?php
    include 'classes/Db.php';
    include 'classes/About.php';
    $about = new About();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
<?php  include 'classes/Head.php'; ?> 
    <nav id="nav">
        <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="about.php" id="clicked" >About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>

        </ul>
    </nav>

    <section id="main">
        <img id="acercaImagen" src=<?php echo($about->getAboutImage()); ?> alt="logo">
        <p id="acercaTexto">
            <?php echo($about->getAboutText()); ?>
        </p>
    </section>

    
    <?php  include 'classes/Footer.php'; ?>
    <script src="javascript/scriptsJaime.js"></script>
</body>
</html>