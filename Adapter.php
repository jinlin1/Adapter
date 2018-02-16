<?php

require_once 'Target.php';
require_once 'Adaptee.php';

class Adapter extends Target {

  private $adaptee;

  // Set up configuration for third party calls here
  public function __construct() {
    $this->adaptee = new Adaptee();
  }

  // This function calls a special request from the adaptee
  public function request() {
    $this->adaptee->specialRequest(); 
  }

}

?>
