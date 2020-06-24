<?php
Class Etudiantcontroller extends Controller{


    public  function __construct(){
     //   $this->folder="layout";
      //  $this->layout="default";
       $this->validator=new Validator();
      
     }

    public function enregistrerEtudiant(){
    
    echo 'Cheikh ibra fall';
    }
    public function showEtudiant(){
        $this->view="enregistrerEtudiant";
        $this->layout="default";
        $this->folder="etudiant";
        $this->render();
       
        }
      public function listeNum(){
        //   var_dump($_POST);
        if(isset($_POST['search'])){
            $this->dao=new EtudiantDao();
            $req=$this->dao->getChambre();
            echo json_encode($req);
        }
      }
       public function addEtudiant(){
           if(isset($_POST['btn_etud'])){
            extract($_POST);
           $this->dao=new EtudiantDao();
            //Validation
            $this->validator->isAlphabet($nom,"nom","Le nom est vide");
            $this->validator->isEmail($email,"email","Le mail  est vide");          
            $this->validator->isAlphabet($prenom,"prenom","Le prenom est vide");
            $this->validator->isVide($telephone,"telephone","Le telephone est vide");

            if($this->validator->isValid()){
                echo "Aucune erreur";
                require_once"./model/Etudiant.php";
                $unik=rand(1000, 9999);
                $row=$_POST;
                $matricule="";
                $matricule.=$_POST['date'][0];
                $matricule.=$_POST['date'][1];
                $matricule.=$_POST['date'][2];
                $matricule.=$_POST['date'][3];
                $matricule.=$_POST['nom'][0];
                $matricule.=$_POST['nom'][1];
                $tailleP=strlen($_POST['prenom']);
                $matricule.=$_POST['prenom'][$tailleP-2];
                $matricule.=$_POST['prenom'][$tailleP-1];
                $matricule.=$unik;
                $row['matricule']= strtoupper($matricule);
               // $_POST['matricule']="1232AZE";
                //$etudiant= new Etudiant($row);
            if(isset($_POST['adresse'])){
                $this->dao->addAddr($row);
            }else{
                
            $chambre=$this->dao->getChbr($_POST['list']);
              
                if(strlen($chambre->numBatiment)==1){
                    $numChambre="00"; 
                    $numChambre.=$chambre->numBatiment; 
                    $numChambre.=$unik; 

                }
                if(strlen($chambre->numBatiment)==2){
                    $numChambre="0"; 
                    $numChambre.=$chambre->numBatiment;
                    $numChambre.=$unik; 
                }
                if(strlen($chambre->numBatiment)==3){
                    $numChambre=$chambre->numBatiment;
                    $numChambre.=$unik; 
                }
              //  $numChambre.=$chambre->
              var_dump($numChambre);
                                $row['numChambre']=$numChambre;
              //  var_dump($this->dao->addChbr($row));
                $this->dao-> updateChbr($numChambre,$_POST['list']);
                $this->dao->addChbr($row);

            }
           
             // var_dump($this->dao);
               // $user=$this->dao->add($login,$password);
            }else{
                echo"ereeeeurr";
            }
        }
          
       }

}

?>
