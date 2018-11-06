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

    <section id="main">
            <p id="indexTexto">
                <?php  ?>
            </p>
            <img id="indexImagen" src=<?php ?> alt="logo">

    </section>

    
    <?php  include 'classes/Footer.php'; ?>
</body>
</html>