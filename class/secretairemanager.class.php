<?php
    class SecretaireManager extends Mysql
    {
        public function add(Secretaire $objet){
            
            $pdo = Mysql::connect();
            $query = $pdo->prepare("INSERT INTO secretaire(id_secretaire, nom_secretaire, prenom_secretaire, passwd, email, username, id_service) VALUES(:id_secretaire, :nom_secretaire, :prenom_secretaire, :passwd, ;email, :username, :id_service)");
            
            $query->bindValue(':id_secretaire', $objet->getid_secretaire());
            $query->bindValue(':nom_secretaire', $objet->getnom_secretaire());
            $query->bindValue(':prenom_secretaire', $objet->getprenom_secretaire());
            $query->bindValue(':passwd', $objet->getpasswd());
            $query->bindValue(':telephone', $objet->gettelephonee());
            $query->bindValue(':email', $objet->getemail());
            $query->bindValue(':username', $objet->getusername());
            $query->bindValue(':id_service', $objet->getid_service());
            $query->execute();
        }

    }