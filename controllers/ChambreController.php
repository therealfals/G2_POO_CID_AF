<?php 

class chambreController extends Controller{


    public function showChambre(){
       $this->folder="chambre";
       $this->view="enregistrerChambre";
       $this->layout="default";
       $this->render();


    }
    public function addingChambre(){
        $unik=rand(1000, 9999);
        if(strlen($_POST['numBatiment'])==1){
            $numChambre="00"; 
            $numChambre.=$_POST['numBatiment']; 
            $numChambre.=$unik; 

        }
        if(strlen($_POST['numBatiment'])==2){
            $numChambre="0"; 
            $numChambre.=$_POST['numBatiment'];
            $numChambre.=$unik; 
        }
        if(strlen($_POST['numBatiment'])==3){
            $numChambre=$_POST['numBatiment'];
            $numChambre.=$unik; 
        }
        // $_POST['numero']="";
        // $_POST['numero'].= $_POST['numBatiment'];
        $_POST['numero']= $numChambre;
                $this->daos= new ChambreDao(); 
        $this->daos->addChambre($_POST);     
    }
}

?>