<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zamówienia naszych szkół</title>
</head>
<body>
<header>
    <p>Cześć <?php
        echo $_SESSION["Imie"];
        ?>
    </p>
    <a href="../../includes/logout.php">Wyloguj</a>
</header>
<div class="main">
    <p>dużo zamównień</p>
</div>
</body>
</html>