<?php
 require "../class/bd.class.php";
    class SecretaireManager extends Mysql
    {
        public function add(Secretaire $objet){
            
            $pdo = Mysql::connect();
            $query = $pdo->prepare("INSERT INTO utilisateur(nom, prenom, passwd, username, email, telephone, id_role) VALUES(:nom, :prenom, :passwd, :username, :email, :telephone, :id_role)");
            
            $query->bindValue(':nom', $objet->getNom());
            $query->bindValue(':prenom', $objet->getPrenom());
            $query->bindValue(':passwd', $objet->getPasswd());
            $query->bindValue(':telephone', $objet->getTelephone());
            $query->bindValue(':email', $objet->getEmail());
            $query->bindValue(':username', $objet->getUsername());
            $query->bindValue(':id_role', $objet->getId_role());
            $query->execute();
          
        }

    }