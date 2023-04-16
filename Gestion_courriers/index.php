<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion_courriers</title>
</head>

<body>

    <?php
    require './Gestion_Message.php';
    $msg = new Gestion_Message();
    $stmt = $msg->Lister();
    // var_dump($stmt);
    foreach ($stmt as $values) {
        echo $values['id'];
    }

    ?>
</body>

</html>