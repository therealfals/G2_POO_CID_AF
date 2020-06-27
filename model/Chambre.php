<?php 
class Chambre{
    private $numero;
    private $numBatiment; 
    private $type;
    
    public function __construct($row=null){
        if($row!=null){
            $this->numero=$row['numero'];
            $this->numBatiment=$row['numBatiment'];
            $this->type=$row['type'];
        }
    }

    public function getNumero(){
        return   $this->numero;
    }
    public function getNumBatiment(){
        return    $this->numBatiment;
    }
    public function getType(){
        return   $this->type;
    }
    
}


?>