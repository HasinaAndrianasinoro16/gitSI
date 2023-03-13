<?php
class Caisse extends CI_Model{
    public $credit;
    public $debit;
    public $id;
    public $nom;

   public function __construct($credit, $debit, $id, $nom) {
    $this->credit = $credit;
    $this->debit = $debit;
    $this->id = $id;
    $this->nom = $nom;
  }

  public function getCredit() {
    return $this->credit;
  }

  public function setCredit($credit) {
    $this->credit = $credit;
  }

  public function getDebit() {
    return $this->debit;
  }

  public function setDebit($debit) {
    $this->debit = $debit;
  }

  public function getId() {
    return $this->id;
  }

  public function getNom() {
    return $this->nom;
  }

}
?>