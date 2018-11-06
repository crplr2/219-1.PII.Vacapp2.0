<?php
    include 'classes/Db.php';
    include 'classes/Home.php';
    $home = new Home();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/one_vacPackage.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>

<body>
    
    <nav>
        <ul>
            <?php  include 'classes/Head.php'; ?>
            <li><a href="index.php" id="clicked" >Home</a></li>
            <li><a href="about.php" >About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
</nav>

    <section id="main">
            <p id="indexTexto">
                <?php echo($home->getHomeTitle()); ?>
            </p>
            <img id="indexImagen" src="<?php echo($home->getHomeImage());?>" alt="logo">

    </section>

    
    <?php  include 'classes/Footer.php'; ?>
</body>
</html>