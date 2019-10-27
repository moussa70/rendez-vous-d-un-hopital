<?php
if(isset($_POST['validation']))
{
    require "../class/bd.class.php";
    if(!empty($_POST['username']) && !empty($_POST['mdp']))
    {
        $username=$_POST['username'];
        $mdp=$_POST['mdp'];
        $pdo = Mysql::connect();
        $q = $pdo->prepare("SELECT * FROM utilisateur WHERE username = :user && passwd = :passer");   
        $q->execute(array(
            'user' => $username,
            'passer' => $mdp
        ));

        $resultat = $q->fetch();

       
        if(!$resultat){
            header("location: ../index.php?erreur=veuillez saisir un compte existant");
           }
         else{
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['passer'] = $mdp;
            if ($resultat->{'id_role'}==1) {
                header("location: ../page/admin.php");
            }
            if ($resultat->{'id_role'}==2) {
                header("location: ../page/secretaire.php");
            }
            if ($resultat->{'id_role'}==3) {
                header("location: ../page/medecin.php");
  
            }
            }
}
       else {
        $erreur = "erreur";
        header("location: ../index.php?erreur=veuillez remplir tous les champs");
       }

}