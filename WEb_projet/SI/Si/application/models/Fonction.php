<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fonction_Model extends CI_Model {
  public function __construct(){
        $this->load->database('db');
    } 
}

?>