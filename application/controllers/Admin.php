<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('vote');
  }
  public function index($vote = null)
  {
    $lastvote = $this->db->select_max('idVote')->get('vote')->result_array();
    $vote = ($vote === null) ? $lastvote[0]['idVote'] : $vote;
    $data['page'] = 'home';
    $data['today'] = $this->vote->countVoteToday($vote);
    $data['kecamatan'] = $this->vote->countKecamatanByVote($vote);
    $data['total'] = $this->vote->countTotalVote($vote);
    $data['table'] = $this->vote->countVote($vote);
    $data['option'] = $this->vote->countVoteOption($vote);
      // print_r($data['option']);
    $data['data'] = $this->vote->voteList($vote);
    $this->load->view('admin/index',$data);
  }

  public function vote()
  {
    $data['page'] = 'vote';
    $this->load->view('admin/index',$data);
  }

  public function voteTable()
  {
    $this->load->library('datatables');
    $this->datatables->select('*');
    $this->datatables->from('vote');
    $data = json_decode($this->datatables->generate('json'),true);

    $temp = array();

    foreach ($data['data'] as $value) {
      $value['aksi'] =($value['status'] === 'o') ? "<button onclick='tutup(\"".$value['idVote']."\")' class='btn btn-primary btn-sm'>tutup</button>" : "<button onclick='buka(\"".$value['idVote']."\")' class='btn btn-primary btn-sm'>buka</button>";
      $value['aksi'] .= "<button onclick='hapus(\"".$value['idVote']."\")' class='btn btn-danger btn-sm'>Hapus</button>";
      $value['aksi'] .= "<a href='".base_url()."admin/".$value['idVote']."' class='btn btn-info btn-sm'>Lihat</a>";
      $value['status'] = ($value['status'] === 'o') ? "<span class='label label-success'>Terbuka</span>" : "<span class='label label-danger'>Tutup</span>";
      $value['link'] = "<a target='_blank' href='".base_url()."vote/".$value['link']."'>".base_url()."vote/".$value['link']."</a>";
      array_push($temp,$value);
    }

    $data['data'] = $temp;
    echo json_encode($data);
  }

  public function addVote()
  {
    $data['page'] = 'addvote';
    $this->load->view('admin/index',$data);
  }

  public function createVote()
  {
    $post = $this->input->post();
    $data['option'] = $post['option'];
    unset($post['option']);
    unset($post['submit']);
    $post['start'] = date('Y-m-d');
    $post['status'] = 'o';
    $this->vote->addVote($post);
    $data['page'] = 'option';
    $lastvote = $this->db->select_max('idVote')->get('vote')->result_array();
    $data['vote'] = $lastvote[0]['idVote'];
    $data['link'] = substr(uniqid(),6);
    $this->load->view('admin/index',$data);
  }

  public function createOption()
  {
    $post = $this->input->post();
    $idVote = $post['idVote'];
    $data = [];
    $config = array(
      'upload_path' => './upload/',
      'allowed_types' => 'gif|jpg|png',
    );
    $this->load->library('upload',$config);

    unset($post['idVote']);
    foreach ($post as $key => $value) {
      foreach ($value as $ke => $valu) {
        $data[$ke][$key] = $valu;
        $data[$ke]['idVote'] = $idVote;
        $data[$ke]['gambar'] = basename($_FILES['gambar']['name'][$ke]);
        move_uploaded_file($_FILES['gambar']['tmp_name'][$ke],"./upload/".$data[$ke]['gambar']);
      }
    }
    $this->vote->addOption($data);
    redirect('admin/vote');
  }

  public function deleteVote($vote)
  {
    $this->vote->deleteVote($vote);
  }

  public function closeVote($vote)
  {
    $this->vote->closeVote($vote);
  }

  public function openVote($vote)
  {
    $this->vote->openVote($vote);
  }
}
