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
    $chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);
    define('ROOT', $chemin);
    include_once ROOT . 'model/Model.php';
    include_once ROOT . 'controller/Controller.php';
    // include_once ROOT . 'view/public/header.php';
    // include_once ROOT . 'view/public/main.php';
    // include_once ROOT . 'view/public/footer.php';



    // le controleur existe  dans le premier element qui est accessible via lindice 0,
    // l'action existe dans le deuxieme element qui est accessible via lindice 1
    // la id  accessible via lindice 2
    $url = $_GET['url'];
    $id = 0;
    $inf_url = explode('/', $url);
    if ($inf_url[0] != '')
        if (file_exists(ROOT . "controller/" . $inf_url[0] . ".php")) {
            include_once  ROOT . "controller/" . $inf_url[0] . ".php";
            $contr = new $inf_url[0]();
            if (isset($inf_url[1])) {
                $action = $inf_url[1];
                if (method_exists($contr, $action)) {
                    $request = null;
                    if (isset($inf_url[2])) {
                        $id = 0;
                        if (!empty($_POST)) {
                            $request = new stdClass();
                            foreach ($_POST as $key => $value) {
                                $request->$key = $value;
                            }
                            if ($request != null) {
                                if ($id != 0) {
                                    $contr->$action($id, $request);
                                } else {
                                    $contr->$action($request);
                                }
                            } else {
                                if ($id == 0) {
                                    $contr->$action();
                                } else {
                                    $contr->$action($id);
                                }
                            }
                        }
                    }
                } else
                    echo 'url introuvable';
            }
        } else {
            echo 'url introuvable !!!!';
        }
    ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>