<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion scolaire</title>
    <link rel="stylesheet" href="
    https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    // echo 'ddd';
    include_once './model/Model.php';
    include_once './controller/Controller.php';
    // include_once './view/public/header.php';
    // include_once './view/public/main.php';
    // include_once './view/public/footer.php';
    $url = $_GET['url'];
    $id = 0;
    $info_url = explode('/', $url);
    var_dump($info_url)

    ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>