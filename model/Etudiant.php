<?php 
class Etudiant  {
   
        
           private  $id;
           private  $matricule;

           private  $nom;
           private  $prenom;
           private  $email;
           private  $date;
            private  $type;
            private  $adresse;
            private  $numChambre;
            
      
         public   function __construct($row=null){
             if($row!=null){
                 $this->hydrate($row);
             }
    
         }
       
         public  function hydrate($row){
      
            $this->nom=$row['nom']; 
            $this->prenom=$row['prenom']; 
            $this->email=$row['email']; 
            $this->telephone=$row['telephone']; 
            $this->matricule=$row['matricule']; 
            $this->date=$row['date']; 

            $this->type=$row['type']; 
            if(isset($row['numChambre'])){
                $this->numChambre=$row['numChambre']; 

            }
           
            if(isset($row['adresse'])){
                $this->adresse=$row['adresse']; 

            }


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
    
            public function getType(){
                return $this->type;
            }
            public function getDate(){
                return $this->date;
            }
    
            public function getNumChambre(){
                return $this->numChambre;
            }
            public function getAdresse(){
                return $this->adresse;
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