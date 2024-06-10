<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name="color" type="color">
        <a href="testCookies.php?color=<?php echo $_COOKIE['color']?>"><input type="submit" name="valide"></a>
    </form>
    <?php 
        if(isset($_POST['valide'])){
            setcookie("color",$_POST['color'],time()+8400);
            header('location:testCookies.php');

        }
    ?>
</body>
</html>
