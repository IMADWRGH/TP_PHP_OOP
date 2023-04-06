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
    require './DAO/DAO.php';
    $dsn = 'mysql:host=localhost; dbname=gestion_biblio';
    $user = 'root';
    $password = '';
    $d = new DAO($dsn, $user, $password);
    $d->setTable('Livre');
    $d->insert(array('code' => '1', 'titre' => 'hell', 'auteur' => 'Don', 'nbr_pages' => '450'));
    // // $d->update(array('code' => '2', 'titre' => '1', 'auteur' => '1', 'nbr_pages' => '1'), 1);
    //$d->delete();
    // $d->select(1);
    ?>
</body>

</html>