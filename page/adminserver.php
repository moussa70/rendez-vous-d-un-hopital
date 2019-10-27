<?php
require "../class/bd.class.php";
 $perso = new Secretaire();
 $perso->hydrate([
     "nom" => $nom,
     "prenom" => $prenom,
     "username" => $username,
     "passwd" => $passwd,
     "id" => $id,
     "telephone" => $telephone,
     "email" => $email
     ]);
 $moussa = new SecretaireManager();
 $moussa->add($perso);
 header("Location: admin.php");
?>
