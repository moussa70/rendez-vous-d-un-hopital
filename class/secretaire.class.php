<?php
   class Secretaire
   {
     private $prenom;
     private $nom;
     private $passwd;
     private $telephone;
     private $email;
     private $username;
     private $id_role=2;

     public function setNom($nom){
         $this->nom = $nom;
     }
     public function setPrenom($prenom){
        $this->prenom = $prenom;
     }
     public function setPasswd($passwd){
        $this->passwd = $passwd;
     }
     public function setTelephone($telephone){
        $this->telephone = $telephone;
     }
     public function setEmail($email){
        $this->email = $email;
     }
     public function setUsername($username){
        $this->username = $username;
     }
     public function setId_role($id_role){
        $this->id_role = $id_role;
     }

     //Get the person's name.
     public function getNom(){
         return $this->nom;
     }
     public function getPrenom(){
        return $this->prenom;
    }
    public function getPasswd(){
        return $this->passwd;
    }
    public function getTelephone(){
        return $this->telephone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getId_role(){
        return $this->id_role;
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
 