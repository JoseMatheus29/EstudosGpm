<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
	public function index()
	{
		$this->load->model("games_model");
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
		$this->load->model("games_model");
		$this->games_model->store($game);
		redirect('dashboard');

	}

	public function edit($id){
		$this->load->model("games_model");
		$data["games"] = $this->games_model->show($id);
		$data["title"] = 'Games - CodeIgniter';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

	public function update($id){
		$this->load->model("games_model");
		$game = $_POST;
		$this->games_model->update($id, $game);
		redirect('games');
	}

	public function delete( $id ){
		$this->load->model("games_model");
		$this->games_model->destroy($id);
		redirect('games');

	}
}
