<?php
class Functions {


  static function genereNum($num){
    $unik=rand(1000, 9999);
    if(strlen($num)==1){
        $numChambre="00"; 
        $numChambre.=$num; 
        $numChambre.=$unik; 

    }
    if(strlen($num)==2){
        $numChambre="0"; 
        $numChambre.=$num;
        $numChambre.=$unik; 
    }
    if(strlen($num)==3){
        $numChambre=$num;
        $numChambre.=$unik; 
    }
    return $numChambre;
 }
 static function genererMat($date,$nom,$prenom)
 {
    $unik=rand(1000, 9999);
    
    $matricule="";
    $matricule.=$date[0];
    $matricule.=$date[1];
    $matricule.=$date[2];
    $matricule.=$date[3];
    $matricule.=$nom[0];
    $matricule.=$nom[1];
    $tailleP=strlen($prenom);
    $matricule.=$prenom[$tailleP-2];
    $matricule.=$prenom[$tailleP-1];
    $matricule.=$unik;
    $result= strtoupper($matricule);
    return $result;
 }
    
}

?>