<?php
class CompteGen extends CI_model{
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

  public function getAll_byName($conn, $nom){
    $tab = array();
    $sql =sprintf("select * from compte where nom = %d", $nom);
    $result = $conn->query($sql):
    foreach ($result->result() as $row){
      $comp = new Compte($row->credit,$row->debit,$row->id,$row->nom)
      $tab[] = $comp
    } 
    return $tab;
  }
  public function getAll($conn){
    $tab = array();
    $sql ="select * from compte ";
    $result = $conn->query($sql):
    foreach ($result->result() as $row){
      $comp = new Compte($row->credit,$row->debit,$row->id,$row->nom)
      $tab[] = $comp
    } 
    return $tab;
  }

}
?>