<?php
require './Connexion.php';
require './Message.php';
class Gestion_Message extends Connexion
{

    // La fonction commence par lire un fichier de configuration nommé ".env" et 
    // stocke son contenu dans la variable $info_cnx en utilisant la fonction file(). 
    // Ensuite, la fonction extrait le nom du serveur, le nom de la base de données,
    //  le nom d'utilisateur et le mot de passe à partir du tableau $info_cnx en 
    //  utilisant la fonction explode() et en les assignant à des variables distinctes
    //   $server, $dbname, $user et $password. La fonction trim() est utilisée pour 
    //   supprimer tout espace blanc des valeurs.
    public function __construct()
    {
        $info_cnx = file(".env");
        $server = trim(explode("=", $info_cnx[0])[1]);
        $dbname = trim(explode("=", $info_cnx[1])[1]);
        $user = trim(explode("=", $info_cnx[2])[1]);
        $password = trim(explode("=", $info_cnx[3])[1]);
        parent::__construct('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
    }
    public function Envoyer_MSG(Message $msg)
    {
        $query = "INSERT INTO message(adresse_exp , sujet , date_envoi , contenu , etat ) 
        VALUES('{$msg->getAdresse_exp()}','{$msg->getSujet()}','{$msg->getDate_envoi()} ','{$msg->getContenu()} ',0)";
        return parent::UDI($query);
    }
    public function Modifier_Etat($code, $etats)
    {
        $query = "UPDATE message SET etat='$etats' WHERE id='{$code}'";
        return parent::UDI($query);
    }
    public function Lister_Mois($mois)
    {
        $query = "SELECT * FROM `message` WHERE month(date_envoi)='{$mois}'";
        return  parent::Select($query);
    }
    public function Lister()
    {
        $query = 'SELECT * FROM `message`';
        $res = parent::Select($query);
        return  $res->fetchAll(PDO::FETCH_ASSOC);
    }
    public function MSG_lus()
    {
        $query = 'SELECT * FROM `message` WHERE  etat=1';;
        return  parent::Select($query);
    }
    public function Annee_Envoi($code)
    {
        $query = "SELECT year(date_envoi) FROM `message` WHERE  id='{$code}'";
        return  parent::Select($query);
    }
    public function Supprimer_MSG_lus()
    {
        $query = "DELETE FROM `message` WHERE  etat=1 ";
        return parent::UDI($query);
    }
    public function Supprimer_MSG($code)
    {
        $query = "DELETE FROM `message` WHERE id='{$code}' ";
        return parent::UDI($query);
    }
    public function Modifier_MSG($id, $adresse_exp, $sujet, $date_envoi, $contenu, $etat)
    {
        $query = "UPDATE message SET `adresse_exp`=' $adresse_exp',`sujet`=' $sujet',`date_envoi`='$date_envoi',`contenu`='$contenu ',`etat`=' $etat' WHERE 'id'='$id' ";
        return parent::UDI($query);
    }
}
