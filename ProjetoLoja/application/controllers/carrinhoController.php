<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class carrinhoController extends CI_Controller{
    public function index()
	{   
        $this->load->model("produtos_model");
        $data['produtos'] = $this->produtos_model->index();
        $data['title'] = "Carrinho";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/carrinho', $data);
        $this->load->view('templates/footer', $data);


	}
} 

?>