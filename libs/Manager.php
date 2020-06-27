<?php
 class Manager {
    
    public static $pdo=null;
    protected $tableName;
    protected $className;

  public static function getConnexion(){
     
      
          try{
            self::$pdo = new PDO("mysql:host=mysql-universcidaf.alwaysdata.net;dbname=universcidaf_g2_poo_cid_af","209691","LiLBaB'S23950");
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
          
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
        //    var_dump($nbreLigne);
         $this->closeConnexion();
          return $nbreLigne;
          
   }


  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
      
        $data[]=new $this->className($rowBD);     
      }
      $this->closeConnexion();
      return $data;

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
   
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






    
}