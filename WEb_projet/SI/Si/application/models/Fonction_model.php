<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fonction_Model extends CI_Model {
  public function __construct(){
        $this->load->database('db');
    }
//     public function search_by_category($keyword, $category)
// {
//     $this->db->select('*');
//     $this->db->from('objet');
//     $this->db->like('idcategorie', $category);
//     $this->db->like('nom', $keyword);
//     $query = $this->db->get();
//     $tab = array();
//         $i = 0;
//     foreach($query->result_array() as $row){
//         $tab[$i]['nom'] = $row['nom'];
//         $tab[$i]['idcategorie'] = $row['idcategorie'];
//         $tab[$i]['description'] = $row['description'];
//         $tab[$i]['idobjet'] = $row['idobjet'];
//         $tab[$i]['photo'] = $row['photo'];
//         $tab[$i]['prix'] = $row['prix'];
//         $tab[$i]['iduser'] = $row['iduser'];
//         $i++;
//     }
//     return $tab;
}

?>