<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }

    
    public function addChambre($obj){
    
        $rep =Manager::getConnexion();
        // var_dump($rep);
        $req=$rep->prepare('INSERT INTO chambre SET numero=?, numBatiment=?,type=?');
        $req->execute([$obj['numero'],$obj['numBatiment'],$obj['type']]);
  
       
    }
    public function update($obj){

    }
    
public function getAllChambre()
{
    $rep =Manager::getConnexion();
    
    
    $req=$rep->prepare('SELECT * FROM chambre');
    $req->execute([]);
    $chambre=$req->fetchAll();
 return $chambre;

}

public function delChambre($id)
{
    $rep =Manager::getConnexion();
    
    
    $req=$rep->prepare('DELETE  FROM chambre WHERE id=?');
    $req->execute([$id]);
  
}
public function selChambre($id)
{
    $rep =Manager::getConnexion();
    
    
    $req=$rep->prepare('SELECT *  FROM chambre WHERE id=?');
    $req->execute([$id]);
    $user=$req->fetch();
    return $user;
}

public function modifiedChambre($table)
{
    $rep =Manager::getConnexion();
    
    
    $req=$rep->prepare('UPDATE  chambre SET numero=?, numBatiment=?,type=? WHERE id=?');
    $req->execute([$table['numChambre'],$table['numBatiment'],$table['type'],$table['id']]);
}


}