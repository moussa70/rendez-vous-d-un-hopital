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

     public function setnom($nom){
         $this->nom = $nom;
     }
     public function setprenom($prenom){
        $this->prenom = $prenom;
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
     public function setid_role($id_role){
        $this->id_role = $id_role;
     }

     //Get the person's name.
     public function getnom(){
         return $this->setnom;
     }
     public function getprenom(){
        return $this->prenom;
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
    public function getid_role(){
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
 