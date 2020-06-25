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
    public function updateEtudiant()
    {
        $this->dao=new EtudiantDao();
        $etudss=  $this->dao->modifEtud($_POST);
        var_dump($_POST);
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
    //     $this->dao=new EtudiantDao();
    //   $etuds=  $this->dao->getAllEtudiant();
    // //  var_dump($etuds);
    // echo json_encode($etuds);
      $this->data_view["liste"]="<table>";
                  $this->layout="default";
                 $this->folder="etudiant";
                 $this->view="listeEtudiant";
                  $this->render(); 
                  $i=1; 
                
    //   foreach ($etuds as $key ) {
    //     $this->data_view["liste"].="
    //     <tr>
    //     <td>$i</td>
    //     <td>$key->matricule</td>
    //     <td>$key->prenom</td>
    //     <td>$key->nom</td>
    //     <td>$key->email</td>
    //     <td>$key->telephone</td>
    //     </tr>
    //     ";
    //       $i++;
    //   }
      $this->data_view["liste"].="</table>";

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
                var_dump($_POST);
            $chambre=$this->dao->getChbr($_POST['list']);
              
                // if(strlen($chambre->numBatiment)==1){
                //     $numChambre="00"; 
                //     $numChambre.=$chambre->numBatiment; 
                //     $numChambre.=$unik; 

                // }
                // if(strlen($chambre->numBatiment)==2){
                //     $numChambre="0"; 
                //     $numChambre.=$chambre->numBatiment;
                //     $numChambre.=$unik; 
                // }
                // if(strlen($chambre->numBatiment)==3){
                //     $numChambre=$chambre->numBatiment;
                //     $numChambre.=$unik; 
                // }
              //  $numChambre.=$chambre->
              //var_dump($numChambre);
                                $row['numChambre']=$chambre->numero;
              //  var_dump($this->dao->addChbr($row));
                 $this->dao-> updateChbr($_POST['list']);
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
