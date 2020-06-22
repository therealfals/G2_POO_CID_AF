<?php 

class chambreController extends Controller{


    public function showChambre(){
       $this->folder="chambre";
       $this->view="enregistrerChambre";
       $this->layout="default";
       $this->render();


    }
    public function addChambre(){
        var_dump($_POST);
      
    }
}

?>