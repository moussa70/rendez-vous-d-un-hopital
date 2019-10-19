<?php
   class Secretaire
   {
     private $id_secretaire;
     private $nom_secretaire;
     private $prenom_secretaire;
     private $passwd;
     private $telephone;
     private $email;
     private $username;
     private $id_service;
   
     public function setid_secretaire($id_secretaire){
         $this->id_secretaire = $id_secretaire;
     }
     public function setnom_secretaire($nom_secretaire){
         $this->nom_secretaire = $nom_secretaire;
     }
     public function setprenom_secretaire($prenom_secretaire){
        $this->prenom_secretaire = $prenom_secretaire;
     }
     public function setpasswd($passwd){
        $this->passwd = $passwd;
     }
     public function settelephone($telephone){
        $this->telephone = $telephone;
     }
     public function setemail($email){
        $this->email = $email;
     }
     public function setusername($username){
        $this->username = $username;
     }
     public function setid($id_service){
        $this->id_service = $id_service;
     }

     //Get the person's name.
     public function getid_secretaire(){
         return $this->id_secretaire;
     }
     public function getnom_secretaire(){
         return $this->setnom_secretaire;
     }
     public function getprenom_secretaire(){
        return $this->prenom_secretaire;
    }
    public function getpasswd(){
        return $this->passwd;
    }
    public function gettelephone(){
        return $this->telephone;
    }
    public function getemail(){
        return $this->email;
    }
    public function getusername(){
        return $this->username;
    }
    public function getid_service(){
        return $this->id_service;
    }
    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }   
 }
 