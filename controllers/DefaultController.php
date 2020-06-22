<?php
class DefaultController extends Controller {


    public  function __construct(){
        $this->folder="layout";
        $this->layout="default";
        //$this->validator=new Validator();
      
     }

     public function index(){
        $this->view="default";
         $this->render();

    }
  
}
?>