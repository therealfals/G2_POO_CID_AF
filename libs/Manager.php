<?php
 class Manager {
    //Connexion est Fermée
    public static $pdo=null;
    protected $tableName;
    protected $className;

  public static function getConnexion(){
      //Connexion est fermée
      
          try{
            self::$pdo = new PDO("mysql:host=localhost;dbname=g2_poo_cid_af","root","");
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
           // var_dump(self::$pdo);
          }catch(PDOException $ex){
             die($ex);
          }
        
      
      
  }
 private function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function inserer($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
           var_dump($nbreLigne);
         $this->closeConnexion();
          return $nbreLigne;
          
   }
//    public function insertEtudiant($sql){
//     $this->getConnexion();
//      $req= $this->pdo->prepare($sql);
//      $req->execute([]);
//     $this->closeConnexion();
//     return $req;
// }
// public function preps(){
//     $req= $this->pdo->prepare($sql);

// }

  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        $data[]=new $this->className($rowBD);//new User($rowBD)     
      }
      $this->closeConnexion();
      return $data;

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
    var_dump($data);
  }
public function findById($id){
    $sql="select * from $this->tableName where id=$id ";
    $data=$this->executeSelect($sql);
    return count($data)==1?$data[0]:$data;

}

public function delete($id){
    $sql="delete from $this->tableName where id=$id";
    return $this->executeUpdate($sql)!=0;
}





    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
       //Execution Requete MaJ(Insert,Update,delete)
       //Execution requete Select

    
}