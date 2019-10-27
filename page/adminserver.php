<?php
if(isset($_POST['save'])) {
require "../class/secretaire.class.php";
require "../class/secretairemanager.class.php";
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['username']) && !empty($_POST['passwd']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];

$perso = new Secretaire();
 $perso->hydrate([
   "nom" => $nom,
    "prenom" => $prenom,
    "username" => $username,
   "passwd" => $passwd
   ]);
$moussa= new SecretaireManager();
$moussa->add($perso);
header("Location: admin.php");

}
}

