<?php

define("BASE_URL","http://localhost/G2_POO_CID_AF");
if(!isset($_GET['url'])){
    header("Location:".BASE_URL."/etudiant/showEtudiant");
}
require_once("./libs/Router.php");

$router=new Router();
$router->route();

?>