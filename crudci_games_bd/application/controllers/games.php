<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("games_model");
	}
	public function index()
	{
		$data["games"] = $this->games_model->index();
		$data["title"] = 'Games - CodeIgniter';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');

	}

	public function new(){
		$data["title"] = 'Games - CodeIgniter';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function store(){
		$game = $_POST;
		$game['user_id'] = '1';
		$this->games_model->store($game);
		redirect('dashboard');

	}

	public function edit($id){
		
		$data["games"] = $this->games_model->show($id);
		$data["title"] = 'Games - CodeIgniter';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function update($id){
		
		$game = $_POST;
		$this->games_model->update($id, $game);
		redirect('games');
	}

	public function delete( $id ){
		$this->games_model->destroy($id);
		redirect('games');

	}
}
