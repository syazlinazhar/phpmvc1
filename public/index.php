<?php  
if( !session_id() )  session_start();

//bootstrapping 
require_once '../app/init.php'; 

$app = new App;