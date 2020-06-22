<?php
Class Etudiantcontroller extends Controller{




    public function enregistrerEtudiant(){
    
    echo 'Cheikh ibra fall';
    }
    public function showEtudiant(){
        $this->view="enregistrerEtudiant";
        $this->layout="default";
        $this->folder="etudiant";
        $this->render();
       
        }
       public function addEtudiant(){
           var_dump($_POST);
       }

}

?>
