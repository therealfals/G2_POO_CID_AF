<?php
Class Etudiantcontroller extends Controller{


    public  function __construct(){
    
       $this->validator=new Validator();
      
     }

    public function enregistrerEtudiant(){
    
    // echo 'Cheikh ibra fall';
    }
    public function updateEtudiant()
    {
        $this->dao=new EtudiantDao();
        $etudss=  $this->dao->modifEtud($_POST);
       
        echo json_encode(  $etudss);
    }
    public function deleteEtudiant()
    {
        $this->dao=new EtudiantDao();
        $etuds=  $this->dao->suppEtud($_POST['id']);
    }
    public function getEtudiantByID()
    {

        $this->dao=new EtudiantDao();
        $etuds=  $this->dao->getId($_POST['id']);
        echo json_encode($etuds);
    }
    public function listEtuds(){
   
        $this->dao=new EtudiantDao();
        if(isset($_POST['limit']) && isset($_POST['offset'])){
            $etuds=  $this->dao->getAllEtudiant($_POST['limit'],$_POST['offset']);
            echo json_encode($etuds);

        }
  
    }
    public function showListEtudiant()
    {
   
      $this->data_view["liste"]="<table>";
                  $this->layout="default";
                 $this->folder="etudiant";
                 $this->view="listeEtudiant";
                  $this->render(); 
                  $i=1; 
                
    
      $this->data_view["liste"].="</table>";

    }
    public function showEtudiant(){

        $this->view="enregistrerEtudiant";
        $this->layout="default";
        $this->folder="etudiant";
        $this->render();
       
        }
       
      public function listeNum(){
       
        if(isset($_POST['search'])){
            $this->dao=new EtudiantDao();
            $req=$this->dao->getChambre();
            echo json_encode($req);
        }
      }

      public function search()
      {   $this->dao=new EtudiantDao();
        $req=$this->dao->searching($_POST['search']);
        echo json_encode($req);
        
      }


       public function addEtudiant(){
           if(isset($_POST['btn_etud'])){
               if($_POST['bourse']=='aucune'){
                $_POST['type']='Non boursier';
               }else{
                $_POST['type']='Boursier';

               }
            extract($_POST);
           $this->dao=new EtudiantDao();
            //Validation
            $this->validator->isAlphabet($nom,"nom","Le nom est vide");
            $this->validator->isEmail($email,"email","Le mail  est vide");          
            $this->validator->isAlphabet($prenom,"prenom","Le prenom est vide");
            $this->validator->isVide($telephone,"telephone","Le telephone est vide");

            if($this->validator->isValid()){
                // echo "Aucune erreur";
                require_once"./model/Etudiant.php";
              
                $row=$_POST;
              
                $row['matricule']= Functions::genererMat($_POST['date'],$_POST['nom'],$_POST['prenom']); 
              
                require_once'./model/Etudiant.php';
                $etudiant= new Etudiant($row);
             
            if(isset($_POST['adresse'])){
                $this->dao->addAddr($etudiant);
            }else{
            
            $chambre=$this->dao->getChbr($_POST['list']);
              
               
                                $row['numChambre']=$chambre->numero;
                                $etudiant= new Etudiant($row);

                 $this->dao-> updateChbr($_POST['list']);
                $this->dao->addChbr( $etudiant);

            }
           
       
            }else{
                // echo"ereeeeurr";
            }
                  $this->layout="default";
                  $this->folder="etudiant";

                  $this->view="enregistrerEtudiant";
                  $this->render();    
        }
          
       }

}

?>
