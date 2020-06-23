<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }

      public function add($obj){
        $sql="INSERT INTO etudiant SET nom=?,prenom=?";
    $sql="INSERT INTO table VALUES ('$obj->getid()', '$obj->getPrenom()','$obj->getNom()','$obj->getEmail()','$obj->getTelephone()')";
        $req=Manager::getConnexion();
        $req->execute($sql);
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    





}