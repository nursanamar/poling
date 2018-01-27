<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public $voted;

	 public function __construct()
	 {
	 		parent::__construct();
			if($this->input->cookie('isVoted') === null){
				$this->voted = true;
			}else{
				$this->voted = false;
			}
			// setcookie('isVoted','voted',time()+60*60*24*30*12);
			$this->load->model('vote');
	 }
	public function index($vote = null)
	{
		$lastvote = $this->db->select_max('idVote')->get('vote')->result_array();
    $vote = ($vote === null) ? $lastvote[0]['idVote'] : $vote;
		$data['status'] = $this->vote->isOpen($vote);
		$this->voted = ($data['status']) ? $this->voted : false;
		$data['vote'] = $this->voted;
		$data['kabupaten'] = ($vote === null) ? null : $this->vote->kabupaten($vote);
		$data['data'] = $this->vote->voteList($vote);
		$data['table'] = $this->vote->countVote($vote);
		$data['idVote'] = $vote;
		if (count($data['data']) <= 2) {
			$data['col'] = 6;
		}else {
			$data['col'] = 4;
		}
		$this->load->view('client/index',$data);
		// var_dump($this->uri->segment(2));
	}

	public function linkVote($link)
	{
		$lastvote = $this->db->select('idVote')->where('link',$link)->get('vote')->result_array();
    $vote = $lastvote[0]['idVote'];
		$data['status'] = $this->vote->isOpen($vote);
		$this->voted = ($data['status']) ? $this->voted : false;
		$data['vote'] = $this->voted;
		$data['kabupaten'] = ($vote === null) ? null : $this->vote->kabupaten($vote);
		$data['data'] = $this->vote->voteList($vote);
		$data['table'] = $this->vote->countVote($vote);
		$data['idVote'] = $vote;

		if (count($data['data']) <= 2) {
			$data['col'] = 6;
		}else {
			$data['col'] = 4;
		}
		$this->load->view('client/index',$data);
		// var_dump($this->input->cookie());
	}

	public function seed()
	{
		$this->vote->seed();
	}

	public function makeVote($vote)
	{
		$cookie = array(
			'name' => 'isVoted',
			'expire' =>  time()+60*60*24*30*12,
			'value' => 'voted',
		);
		$data = $this->input->post();
		$link = ($data['link'] === "") ? '/' : "/vote/".$data['link'];
		unset($data['link']);
		$data['ipAddres'] = $this->input->ip_address();
		$data['idVote'] = $vote;
		$data['tanggal'] = date('Y-m-d');
		$this->vote->makeVote($data);
		setcookie('isVoted','voted',time()+60*60*24*30*12,"/poling".$link);
		redirect($link);
		// var_dump($_COOKIE);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function validLogin()
	{
		$post = $this->input->post();
		// var_dump($post);
		if($this->vote->checkUsername($post['user'])){
			$this->session->set_flashdata('error','Username anda salah');
			$this->load->view('login');
		}else{
			$pass = $this->vote->userPass($post['user']);
			if (password_verify($post['pass'],$pass)) {
				$this->session->set_userdata('username',$post['user']);
				redirect('admin');
			}else{
				$this->session->set_flashdata('error','Password anda salah');
				$this->load->view('login');
			}
		}
	}


}
