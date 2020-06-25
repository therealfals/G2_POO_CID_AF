<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }

    
    public function addChambre($obj){
    
        $rep =Manager::getConnexion();
        var_dump($rep);
        $req=$rep->prepare('INSERT INTO chambre SET numero=?, numBatiment=?,type=?');
        $req->execute([$obj['numero'],$obj['numBatiment'],$obj['type']]);
  
       
    }
    public function update($obj){

    }
    





}