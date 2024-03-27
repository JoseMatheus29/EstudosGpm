<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pedidosController extends CI_Controller{
    public function index()
	{  
        $this->load->model("pedidos_model");
        $data['pedidos'] = $this->pedidos_model->index();
        $data['title'] = "Cadastro Produtos";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/pedidos', $data);
        $this->load->view('templates/footer.php', $data);

	}
}
?>