<?php
require './Connexion.php';
require './Message.php';
require_once __DIR__ . './.env';
class Gestion_Message extends Connexion
{
    public function __construct()
    {
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
        return  parent::query($query);
    }
    public function MSG_lus()
    {
        $query = 'SELECT * FROM `message` WHERE  etat=1';;
        return  parent::query($query);
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
