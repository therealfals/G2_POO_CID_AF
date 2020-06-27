<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    }

    public function addAddr(Etudiant $etudiant){
    
        $rep =Manager::getConnexion();
        $req=$rep->prepare('INSERT INTO etudiant SET matricule=?,prenom=?, nom=?, email=?, telephone=?,date=?,type=?,adresse=?');
        $req->execute([$etudiant->getMatricule(),$etudiant->getPrenom(),$etudiant->getNom(),$etudiant->getEmail(),$etudiant->getTelephone(),$etudiant->getDate(),$etudiant->getType(),$etudiant->getAdresse()]);
    
       
    }
    public function addChbr(Etudiant $etudiant){
   
    
        $repo =Manager::getConnexion();
  
        $reqs=$repo->prepare('INSERT INTO etudiant SET matricule=?,prenom=?, nom=?, email=?, telephone=?,date=?,type=?,numChambre=?');
        $reqs->execute([$etudiant->getMatricule(),$etudiant->getPrenom(),$etudiant->getNom(),$etudiant->getEmail(),$etudiant->getTelephone(),$etudiant->getDate(),$etudiant->getType(),$etudiant->getNumChambre()]);

    
       
    }
    public function suppEtud($id)
    {
        $pdo =Manager::getConnexion();
        $req= $pdo->prepare('DELETE  FROM etudiant WHERE id=?');
        $req->execute([$id]);
    }
    public function modifEtud($tab)
    {
        $pdo =Manager::getConnexion();
        $req= $pdo->prepare('UPDATE   etudiant SET prenom=?,nom=?,email=?,telephone=?,adresse=?,numChambre=? WHERE id=?');
        $req->execute([$tab['prenom'],$tab['nom'],$tab['email'],$tab['telephone'],$tab['adresse'],$tab['logement'],$tab['id']]);
        return $req;
    }
    public function getId($id)
    {
        $pdo =Manager::getConnexion();
        $req= $pdo->prepare('SELECT * FROM etudiant WHERE id=?');
        $req->execute([$id]);
        $user=$req->fetch();
        return $user;

    }
    public function getAllEtudiant($limit,$offset)
    {
        $pdo =Manager::getConnexion();
      
    $req=$pdo->prepare(  "  SELECT * 
    FROM etudiant
    LIMIT {$limit} 
    OFFSET {$offset}");
        $req->execute();
        $etudiant=$req->fetchAll();
        return $etudiant;
    }

    public function searching($res)
    {
        $pdo =Manager::getConnexion();

        $req=$pdo->prepare('SELECT * FROM etudiant WHERE matricule=? OR type=? OR numChambre=?');
        $req->execute([$res,$res,$res]); 
        $user=$req->fetchAll();
        return $user;
    }
    public function updateChbr($id){
        $pdo =Manager::getConnexion();
        $req=$pdo->prepare('SELECT * FROM chambre WHERE id=?');
        $req->execute([$id]);
        $user=$req->fetch();
        if($user->type=="two" && $user->occuped==1){
            $reqs=$pdo->prepare('UPDATE chambre SET occuped2=? WHERE id=?');
            $reqs->execute([1,$id]);
        }
        if($user->type=="one"){
            $reqss=$pdo->prepare('UPDATE chambre SET occuped=? WHERE id=?');
            $reqss->execute([1,$id]);
        }
        if($user->type=="two" && $user->occuped==null){
            $reqsss=$pdo->prepare('UPDATE chambre SET occuped=? WHERE id=?');
            $reqsss->execute([1,$id]);
        }
   
    }
    public function getChbr($id){
      
        $pdo =Manager::getConnexion();
       $req=$pdo->prepare('SELECT * FROM chambre WHERE id=?');
       
       $req->execute([$id]);
       $chambre=$req->fetch();
        return $chambre;
  
       
    }
    public function getChambre(){
        $tabl=array();
        $rep =Manager::getConnexion();
        $req=$rep->prepare('SELECT * FROM chambre WHERE occuped IS NULL');
        $req->execute([]);
        $c=$req->fetchAll();
        $tabl[]=$c;
        $reqs=$rep->prepare('SELECT * FROM chambre WHERE occuped IS NOT NULL AND occuped2 IS NULL AND type=?');
        $reqs->execute(['two']);
        $ct=$reqs->fetchAll();
        $tabl[]=$ct;
       
        return $tabl;
    }
    public function update($obj){

    }
    





}