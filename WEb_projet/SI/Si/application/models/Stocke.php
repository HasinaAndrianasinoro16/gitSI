<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stocke extends CI_Model {
    private $id;
    private $prix;
    private $nombre;

    public function __construct($id, $prix, $nombre) {
        $this->id = $id;
        $this->prix = $prix;
        $this->nombre = $nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

?>