<?php
   include '../classes/Db.php';
   include '../session.php';

    $sql = "SELECT * FROM contact";
    $result = $db->query($sql);
    $numRows= 0;
    if($result){
        $numRows = $result -> num_rows;
    }
    
    

    if($numRows>0){
        while($row = $result -> fetch_assoc()){
            $data[] = $row;
        }
        $dataFound = true;
    } else{
        $dataFound = false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Contact</title>
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
            <li><a href="adminServices.php"  >Admin Services</a></li>
            <li><a href="" id="clicked"  >Admin Contact</a></li>
        </ul>
</nav>

    <section id="admin">
        <table  id ="usuarios">
            <tr>
                <th>Nombre</th>
                <th>Email</th> 
                <th>Message</th>
                <th>Date</th>
            </tr>


            <?php
                if($dataFound == true){
                    for ($i = 0; $i < count($data); $i++) {
                        $arrayTest = $data[$i];
                        $name = $arrayTest["nombre"];
                        $email = $arrayTest["email"];
                        $message = $arrayTest["mensaje"];
                        $date = $arrayTest["fecha"];

                        echo("
                        <tr>
                            <td >$name</td>
                            <td >$email</td>
                            <td >$message</td>
                            <td f>$date</td>
                        </tr>
                        ");
                    }
                }
            ?>
        </table>
        <br><br><button> <a id="botonLogout" href="logout.php"> Logout</a></button><br>
    </section>

    <?php  include 'footer.php'; ?>
</body>
</html>