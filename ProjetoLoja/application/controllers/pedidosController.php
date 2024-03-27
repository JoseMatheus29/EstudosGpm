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

	}
    public function deletar($idPedido){
        $this->load->model("pedidos_model");
        $this->pedidos_model->deletar($idPedido);
        redirect(base_url().'/pedidosController');

    }

    public function visualizarProdutosPedidos(){
        $this->load->model("pedidos_model");
        $data['pedidos'] = $this->pedidos_model->index();
        $data['title'] = "Cadastro Produtos";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/visualizarProdutos', $data);
    }
}
?>