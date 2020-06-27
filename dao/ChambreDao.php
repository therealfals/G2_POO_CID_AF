<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }

    
    public function addChambre(Chambre $chambre){
    
        $rep =Manager::getConnexion();

        $req=$rep->prepare('INSERT INTO chambre SET numero=?, numBatiment=?,type=?');
        $req->execute([$chambre->getNumero(),$chambre->getNumBatiment(),$chambre->getType()]);
  
       
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