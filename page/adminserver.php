<?php
if(isset($_POST['save'])) {
require "../class/bd.class.php";
require "../class/secretaire.php";
require "../class/secretairemanager.php";
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['username']) && !empty($_POST['passwd']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];
}
echo 'ok';
 $perso = new Secretaire();
 $perso->hydrate([
     "nom" => $nom,
     "prenom" => $prenom,
     "username" => $username,
     "passwd" => $passwd,
     "telephone" => $telephone,
     "email" => $email,
     ]);
     echo "ok";
 $moussa = new SecretaireManager();
 $moussa->add($perso);
 header("Location: admin.php");
}

