<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>

<body>
    <?php
    require './Rectangles.php';
    $c = new Rectangles(4, 10);
    $c->Surface();
    $c->Perimetre();
    $c->Afficher();

    ?>
</body>

</html>