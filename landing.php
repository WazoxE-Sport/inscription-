<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:connexion.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" intégrité="sha384-ggOyR0iXCbMQv3Xipma34MD + dH / 1fQ78484 / j6c9OJ " cross-over = " anonyme " >
    <title>Document</title>
</head>
<body>
    <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
    <a herf="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>

</body>
</html>