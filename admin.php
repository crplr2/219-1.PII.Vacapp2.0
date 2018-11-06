<?php
   include 'classes/Db.php';
   $error = false;
   $object = new Db();
   $db = $object->connect();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM accounts WHERE user = '$myusername' and password = '$mypassword'";
      $result = $db->query($sql);
      if($result){
        $numRows = $result -> num_rows;
      } else{
        $numRows = 0;
      }

    if($numRows>0){
        $_SESSION['login_user'] = $myusername;
        header("location: /admin/adminHome.php");
     }else {
        $error = true;
     }
       
   }

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
            <?php  include 'classes/head.php'; ?>
            <li><a href="admin.php" id="clicked" >Login Admin</a></li>
        </ul>
</nav>

    <section id="main">
        <p> Login </p>
         <form action="" method="POST">
            <p> User</p>
            <input type="text" name="username" placeholder ="user" required>
            <p> Password</p>
            <input type="password" name="password" placeholder ="password" required> <br><br>
            <input type="submit">
        </form>
        <br>
        <?php if($error){echo("USERNAME OR PASSWORD ARE INVALID");} ?>
    </section>
    <?php  include 'classes/footer.php'; ?>
</body>
</html>