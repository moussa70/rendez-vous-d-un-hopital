<?php
if(isset($_POST['validation']))
{

    if(!empty($_POST['username']) && !empty($_POST['mdp']))
    {
        $username=$_POST['username'];
        $mdp=$_POST['mdp'];

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=hopital;charset=utf8', 'root', 'passer123');

        $q = $pdo->prepare("SELECT * FROM utilisateur WHERE username = :user && passwd = :passer");

        $q->execute(array(
            'user' => $username,
            'passer' => $mdp
        ));

        $resultat = $q->fetch();

        //var_dump($resultat);
        if(!$resultat){
            header("location: ../index.php");
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
}