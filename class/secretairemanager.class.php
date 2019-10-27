<?php
require "../class/bd.class.php";
    class SecretaireManager extends Mysql
    {
        public function add(Secretaire $objet){
            
            $pdo = Mysql::connect();
            $query = $pdo->prepare("INSERT INTO utilisateur(nom, prenom, passwd, username, email, telephone, id_role) VALUES(:nom, :prenom, :passwd, :username, :email, :telephone, :id_role)");
            
            $query->bindValue(':nom', $objet->getnom());
            $query->bindValue(':prenom', $objet->getprenom());
            $query->bindValue(':passwd', $objet->getpasswd());
            $query->bindValue(':telephone', $objet->gettelephone());
            $query->bindValue(':email', $objet->getemail());
            $query->bindValue(':username', $objet->getusername());
            $query->bindValue(':id_role', $objet->getid_role());
            $query->execute();
          
        }

    }