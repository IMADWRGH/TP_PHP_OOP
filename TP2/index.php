<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion_courriers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navba r-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion des courriers</a>
        </div>
    </nav>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Adresse_exp</th>
                <th scope="col">Sujet</th>
                <th scope="col">Date_envoi</th>
                <th scope="col">Contenu</th>
                <th scope="col">Etat</th>
                <!-- <th>Option</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            require './Gestion_Message.php';
            $msg = new Gestion_Message();
            // $msg->Envoyer_MSG(new Message(17, 'php_test@gmail.com', 'Exam', '3/3/2023', 'loream', 0));
            // $msg->Modifier_Etat(17, 1);
            // $rep = $msg->Lister_Mois(3);
            // $msg->Supprimer_MSG(18);
            // $msg->Supprimer_MSG_lus();
            // $rep = $msg->MSG_lus();
            // $rep = $msg->Annee_Envoi(20);
            // $msg->Modifier_MSG(20, 'gmail', 'update', '01/01/01', 'update', 0);error
            $rep = $msg->Lister();
            while ($result = mysqli_fetch_assoc($rep)) {
            ?>
                <tr>
                    <td><?= $result['id'] ?></td>
                    <td><?= $result['adresse_exp'] ?></td>
                    <td><?= $result['sujet'] ?></td>
                    <td><?= $result["date_envoi"] ?></td>
                    <td><?= $result['contenu'] ?></td>
                    <td><?= $result['etat'] ?></td>
                    <!-- <td>
                        <a type="button" class="btn btn-info" href="./form.php?ajouter">Ajouter</a>
                        <a type="button" class="btn btn-primary" href="./form.php?modifier">Modifier</a>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>