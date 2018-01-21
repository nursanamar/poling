<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Model {

  public function countVoteToday($vote)
  {
    $this->db->where('tanggal',date('Y-m-d'));
    $this->db->where('idVote',$vote);
    $this->db->from('pemilih');

    return $this->db->count_all_results();
  }

  public function countKecamatanByVote($vote)
  {
    $this->db->select('kecamatan');
    $this->db->distinct();
    $this->db->where('idVote',$vote);
    $this->db->from('pemilih');

    return $this->db->count_all_results();
  }

  public function countTotalVote($vote)
  {
    $this->db->where('idVote',$vote);
    $this->db->from('pemilih');

    return $this->db->count_all_results();
  }

  public function countVoteOption($vote)
  {
    $this->db->select('idOption,judul');
    $this->db->where('idVote',$vote);
    $this->db->from('options');
    $options = $this->db->get()->result_array();
    $data = array();
    foreach ($options as $option) {
      $this->db->where('idOption',$option['idOption']);
      $this->db->from('pemilih');
      $count = $this->db->count_all_results();
      $data[$option['judul']] = $count;
    }
    return $data;
  }

  public function seed()
  {
    $kecamatan = array('a','b','c','d','e','f');
    $data = array();
    $date = date('Y-m-d');
    for ($i=0; $i < 50 ; $i++) {
      $this->db->query("INSERT INTO `pemilih` (`idPemilih`, `ipAddres`, `provinsi`, `kabupaten`, `kecamatan`, `idVote`, `idOption`, `tanggal`) VALUES (NULL, '127.0.0.1', 'a', 'a', '".$kecamatan[rand(0,5)]."', '1', ".rand(1,3).",'".$date."' )");
    }
  }

  public function voteList($vote)
  {
    $this->db->select('*');
    $this->db->where('idVote',$vote);
    $this->db->from('options');

    return $this->db->get()->result_array();
  }

  public function countVote($vote)
  {
    $this->db->select("kecamatan");
    $this->db->distinct();
    $this->db->where('idVote',$vote);
    $this->db->from('pemilih');
    $kec = $this->db->get()->result_array();
    $data = array();
    $this->db->select('idOption,judul');
    $this->db->from('options');
    $this->db->where('idVote',$vote);
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

  public function countByVote($vote)
  {
    $this->db->where('idVote',$vote);
    $this->db->from('pemilih');
    return $this->db->count_all_results();
  }

  public function addVote($data)
  {
    $this->db->insert('vote',$data);
  }

  public function addOption($data)
  {
    $this->db->insert_batch('options',$data);
  }
  public function kabupaten($vote)
  {
    $this->db->select('kabupaten');
    $this->db->where('idVote',$vote);
    $this->db->from('vote');
    $res = $this->db->get()->result_array();

    return $res[0]['kabupaten'];
  }

  public function deleteVote($vote)
  {
    $this->db->where('idVote',$vote);
    $this->db->delete('vote');
    $this->db->where('idVote',$vote);
    $this->db->delete('options');
    $this->db->where('idVote',$vote);
    $this->db->delete('pemilih');
  }

  public function makeVote($data)
  {
    $this->db->insert('pemilih',$data);
    $this->db->set('total','total+1');
    $this->db->where('idVote',$data['idVote']);
    $this->db->update('vote');
  }

  public function isOpen($vote)
  {
    $this->db->select('status');
    $this->db->where('idVote',$vote);
    $this->db->from('vote');
    $result = $this->db->get()->result_array();

    return ($result[0]['status'] === 'o') ? true : false;
  }

  public function closeVote($vote)
  {
    $this->db->set('status','t');
    $this->db->where('idVote',$vote);
    $this->db->update('vote');
  }

  public function openVote($vote)
  {
    $this->db->set('status','o');
    $this->db->where('idVote',$vote);
    $this->db->update('vote');
  }
}
