<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>

<body>
    <?php
    include_once './Biblio.php';
    include_once './Dictionnaire.php';
    include_once './Livre.php';
    $b = new Biblio();
    $b->Ajouter(new Livre(1, 'hell', 'dan', 450));
    $b->Ajouter(new Dictionnaire(2, 'helldan', 4500));
    $b->Ajouter(new Dictionnaire(5, 'helldan', 4500));
    $b->Ajouter(new Livre(3, 'hell', 'dan', 450));
    $b->Ajouter(new Livre(4, 'hell', 'dan', 450));
    // $b->Convertir_Nom();
    // $b->Modifier_Titre(3, 'New_t');
    // $b->Nbr_livre();
    // $b->Afficher_Dictionnaire()
    // $b->tousLesAuteurs();
    $b->Afficher();
    //$b->toutesLesDescriptions();

    ?>
</body>

</html>