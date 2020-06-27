<?php 

class chambreController extends Controller{


    public function showChambre(){
       $this->folder="chambre";
       $this->view="enregistrerChambre";
       $this->layout="default";
       $this->render();


    }
    public function addingChambre(){
   
        if(isset($_POST['btn_chamb'])){
            
            $_POST['numero']= Functions::genereNum($_POST['numBatiment']);
            require_once'./model/Chambre.php';
            $chambre= new Chambre($_POST);
                    $this->daos= new ChambreDao(); 
                    $this->daos->addChambre($chambre);  

        }
        
        $this->layout="default";
        $this->folder="chambre";

        $this->view="enregistrerChambre";
        $this->render();       
    }

    public function showListChambre()
    {
        $this->view="listeChambre";
        $this->layout="default";
        $this->folder="chambre";
        $this->render();
    }
    public function listeChambre(){
        $this->daos= new ChambreDao(); 
        $chambres=$this->daos->getAllChambre(); 
        echo json_encode($chambres) ;
    }
    public function deleteChambre()
    {
        $this->daos= new ChambreDao(); 
        $chambres=$this->daos->delChambre($_POST['id']);
    }
    public function updateChambre()
    {
        $this->daos= new ChambreDao(); 
        $chambres=$this->daos->selChambre($_POST['id']);
        echo json_encode($chambres);
    }
    public function modifierChambre()
    {
        $this->daos= new ChambreDao(); 
        $chambres=$this->daos->modifiedChambre($_POST);
       
    }
}

?>