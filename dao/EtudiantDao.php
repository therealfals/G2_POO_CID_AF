<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    }

    public function addAddr($obj){
        // $sql='INSERT INTO '.$this->tableName.' (matricule,prenom, nom, email, telephone)       VALUES ('.$obj['matricule'].','.$obj['prenom'].','.$obj['nom'].','.$obj['email'].','.$obj['telephone'].')';
      //  $rep=$this->getConnexion();
        $rep =Manager::getConnexion();
        var_dump($rep);
        $req=$rep->prepare('INSERT INTO etudiant SET matricule=?,prenom=?, nom=?, email=?, telephone=?,date=?,adresse=?');
        $req->execute([$obj['matricule'],$obj['prenom'],$obj['nom'],$obj['email'],$obj['telephone'],$obj['date'],$obj['adresse']]);
    //     var_dump($rep);
    // $rep->exec($sql);
    //     var_dump($rep->exec($sql));
     //  var_dump($this->inserer($sql));
        //  $this->inserer($sql);
       
    }
    public function addChbr($obj){
        // $sql='INSERT INTO '.$this->tableName.' (matricule,prenom, nom, email, telephone)       VALUES ('.$obj['matricule'].','.$obj['prenom'].','.$obj['nom'].','.$obj['email'].','.$obj['telephone'].')';
      //  $rep=$this->getConnexion();
    
        $repo =Manager::getConnexion();
        var_dump($repo);
        $reqs=$repo->prepare('INSERT INTO etudiant SET matricule=?,prenom=?, nom=?, email=?, telephone=?,date=?,numChambre=?');
        $reqs->execute([$obj['matricule'],$obj['prenom'],$obj['nom'],$obj['email'],$obj['telephone'],$obj['date'],$obj['numChambre']]);
    //     var_dump($rep);
    // $rep->exec($sql);
    //     var_dump($rep->exec($sql));
     //  var_dump($this->inserer($sql));
        //  $this->inserer($sql);
       
    }
    public function updateChbr($numero,$id){
        $pdo =Manager::getConnexion();
       $req=$pdo->prepare('UPDATE chambre SET numero=? WHERE id=?');
       $req->execute([$numero,$id]);
    }
    public function getChbr($id){
        // $sql='INSERT INTO '.$this->tableName.' (matricule,prenom, nom, email, telephone)       VALUES ('.$obj['matricule'].','.$obj['prenom'].','.$obj['nom'].','.$obj['email'].','.$obj['telephone'].')';
      //  $rep=$this->getConnexion();
        $pdo =Manager::getConnexion();
       $req=$pdo->prepare('SELECT * FROM chambre WHERE id=?');
       $req->execute([$id]);
       $chambre=$req->fetch();
        return $chambre;
    //     var_dump($rep);
    // $rep->exec($sql);
    //     var_dump($rep->exec($sql));
     //  var_dump($this->inserer($sql));
        //  $this->inserer($sql);
       
    }
    public function getChambre(){
        $rep =Manager::getConnexion();
        $req=$rep->prepare('SELECT * FROM chambre WHERE numero IS NULL');
        $req->execute([]);
        $c=$req->fetchAll();
        return $c;
    }
    public function update($obj){

    }
    





}