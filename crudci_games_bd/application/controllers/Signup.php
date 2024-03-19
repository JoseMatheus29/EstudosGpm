<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
	{
		
		$data["title"] = 'Singup - CodeIgniter';

		$this->load->view('pages/signup', $data);

	}

	public function store(){
		$this->load->model;
	}
}

