<?php
if(isset($_POST['validation'])){
  require "../page/secretaire.php";
  require "../class/secretaire.class.php";
  require "../class/secretairemanager.class.php";
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['datenaissance']) && !empty($_POST['sexe']) && !empty($_POST['phone']) && !empty($_POST['daterdv']) && !empty($_POST['heurerdv'])){
     $prenom=$_POST['prenom'];
     $nom=$_POST['nom'];
     $datenaissance=$_POST['datenaissance'];
     $sexe=$_POST['sexe'];
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $daterdv=$_POST['daterdv'];
     $heurerdv=$_POST['heurerdv'];
  }

else {
    $erreur="veillez remplir tous les champs";
}

}
