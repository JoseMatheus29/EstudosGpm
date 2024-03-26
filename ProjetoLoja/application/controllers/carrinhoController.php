<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class carrinhoController extends CI_Controller{
    public function index()
	{   
        $this->load->model("carrinho_model");
        $this->load->model("produtos_model");
        $data['produtos'] = $this->produtos_model->index();
        $data['carrinho'] = $this->carrinho_model->index();
        $data['title'] = "Carrinho";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/carrinho', $data);


	}

    public function adicionarCarrinho($idProduto, $idUser){
        $this->load->model("produtos_model");
        $this->produtos_model->adicionarCarrinho($idProduto, $idUser);
        redirect(base_url());
    }

    public function deletarCarrinho($id){
        $this->load->model("carrinho_model");
        $this->carrinho_model->deletar($id);
        redirect(base_url().'/carrinhoController');
    }
    
    public function finalizar($id, $idPedido){
        $this->load->model("carrinho_model");
        $this->carrinho_model->finalizar($id, $idPedido);
        redirect(base_url().'/carrinhoController');  
    }
} 

?>