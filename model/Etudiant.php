<?php 
class Etudiant  {
   
        //Attributs
           //Encapsulation
            public  $id;
            public  $nom;
            public  $prenom;
            public  $email;
            public  $date;
            public  $matricule;

            private  $pwd;
            private  $login;
            private  $avatar;
            private  $statut;
            private  $profil;
    // public abstract  function hydrate($row);
      
         public   function __construct($row=null){
             if($row!=null){
                 $this->hydrate($row);
             }
    
         }
       
         public  function hydrate($row){
          //  $this->id=$row['id']; 
            $this->nom=$row['nom']; 
            $this->prenom=$row['prenom']; 
            $this->email=$row['email']; 
            $this->telephone=$row['telephone']; 
            $this->matricule=$row['matricule']; 

           // $this->date=$row['date']; 
         }
          //Methodes
            //Getters
            public function getId(){
                return $this->id;
            }
            public function getNom(){
                return $this->nom;
            }
            public function getPrenom(){
                return $this->prenom;
            }
    
            public function getTelephone(){
                return $this->telephone;
            }
    
            public function getMatricule(){
                return $this->matricule;
            }
    
            public function getEmail(){
                return $this->email;
            }
    
            public function getAvatar(){
                return $this->avatar;
            }
    
            public function getProfil(){
                return $this->profil;
            }
    
            //Setters
        
            public function setId($id){
                 $this->id=$id;
            }
            public function setNomComplet($nomComplet){
                 $this->nomComplet=$nomComplet;
            }
    
            public function setPwd($pwd){
                $this->pwd=$pwd;
            }
    
            public function setLogin($login){
                 $this->login=$login;
            }
    
            public function setStatut($statut){
               $this->statut=$statut;
            }
    
            public function setAvatar($avatar){
                $this->avatar=$avatar;
            }
    
            public function setProfil($profil){
                $this->profil=$profil;
            }
}


?>