<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    }

    public function add($obj){
        // $sql='INSERT INTO '.$this->tableName.' (matricule,prenom, nom, email, telephone)       VALUES ('.$obj['matricule'].','.$obj['prenom'].','.$obj['nom'].','.$obj['email'].','.$obj['telephone'].')';
      //  $rep=$this->getConnexion();
        $rep =Manager::getConnexion();
        $req=$rep->prepare('INSERT INTO etudiant SET matricule=?,prenom=?, nom=?, email=?, telephone=?,date=?');
        $req->execute([$obj['matricule'],$obj['prenom'],$obj['nom'],$obj['email'],$obj['telephone'],$obj['date']]);
    //     var_dump($rep);
    // $rep->exec($sql);
    //     var_dump($rep->exec($sql));
     //  var_dump($this->inserer($sql));
        //  $this->inserer($sql);
       
    }
    public function update($obj){

    }
    





}