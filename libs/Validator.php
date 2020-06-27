<?php
Class Validator{
    private $errors=[];
    
    public function getErrors(){
        return $this->errors;
    }
 
    public function isValid(){
       return count($this->errors)==0;
    }
 
 
    public function isVide($champ,$key,$sms="Champ Obligatoire"){
      
      if($champ==""){
         $this->errors[$key]=$sms;
      }
     }
 
     public function isEmail($champ,$key,$sms="Email Obligatoire"){
        $regex = '/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        if (preg_match($regex,$champ)) {
            // Valid email
        } else { 
            $this->errors[$key]=$sms;
        }
     }
    //  public function isTelephone($champ,$key,$sms="Email Obligatoire"){
    //      if(!preg_match()){
    //         $this->errors[$key]=$sms;

    //      }
    //  }
     
    public  function isAlphabet($champ,$key,$sms="Champs Obligatoire")
    {
       if(!preg_match('/^[a-zA-Z ]+$/',$champ)){
        $this->errors[$key]=$sms;

       }
    }
 
}

?>