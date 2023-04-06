<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once './Metier/Biblio.php';
    $dsn = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'gestion_biblio';
    $d = new Biblio($dsn, $user, $password, $db);
    $d->Add(new Dictionnaire('1', 'test', 25000, 'Fr'));
    ?>
</body>

</html>