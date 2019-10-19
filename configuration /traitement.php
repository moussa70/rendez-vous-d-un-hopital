<?php
if(isset($_POST['validation']))
{
    require "../class/bd.class.php";
    require "../class/secretaire.php";
    require "../class/secretairemanager.php";

    if(!empty($_POST['username']) && !empty($_POST['mdp']))
  {
      
     $username=$_POST['username'];
     $mdp=$_POST['mdp'];
               
       $pdo = Mysql::connect();
      
         $query = $pdo->prepare("SELECT id_admin FROM admin WHERE username = :user && passwd = :passer");
         $query->execute(array(
           'user' =>$username,'passer' =>$mdp));

            $resultat = $query->fetch();
            
              session_start();
              $_SESSION['user'] = $username;
              $_SESSION['passer']= $mdp;
          
      
   } 

    
           
}