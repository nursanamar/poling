<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Model {
  public function seed()
  {
    $kecamatan = array('a','b','c','d','e','f');
    $data = array();
    for ($i=0; $i < 50 ; $i++) {
      $this->db->query("INSERT INTO `pemilih` (`idPemilih`, `ipAddres`, `provinsi`, `kabupaten`, `kecamatan`, `idVote`, `idOption`, `tanggal`) VALUES (NULL, '127.0.0.1', 'a', 'a', '".$kecamatan[rand(0,5)]."', '1', ".rand(1,2).", CURRENT_TIMESTAMP)");
    }
  }

  public function voteList()
  {
    $this->db->select('*');
    $this->db->from('options');
    
    return $this->db->get()->result_array();
  }

  public function countVote()
  {
    $this->db->select("kecamatan");
    $this->db->distinct();
    $this->db->from('pemilih');
    $kec = $this->db->get()->result_array();
    $data = array();
    $this->db->select('idOption,judul');
    $this->db->from('options');
    $options = $this->db->get()->result_array();
    foreach ($kec as $value) {
      foreach ($options as $option) {
        $this->db->where('idOption',$option['idOption']);
        $this->db->where('kecamatan',$value['kecamatan']);
        $this->db->from('pemilih');
        $data[$value['kecamatan']][$option['judul']] = $this->db->count_all_results();
      }
    }
    return $data;
  }
}
