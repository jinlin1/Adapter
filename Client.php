<?php

require_once 'Target.php';
require_once 'Adapter.php';

//This is a client class that calls the adapter object
//Adapter object uses same function as Target object
//Not as useful in php because there's no class type declaration

$client = new Target();

if($client instanceof Target) {
  echo "Client is instance of Target \n";
}

$adapter = new Adapter();

if($adapter instanceof Target) {
  echo "Adapter is instance of Target \n";
}

$client->request();
$adapter->request();

?>
