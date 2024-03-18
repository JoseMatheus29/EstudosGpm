<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutoController extends CI_Controller{
    public function index()
	{  
        $data['title'] = "Cadastro Produtos";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/cadastroProdutos', $data);
        $this->load->view('templates/footer.php', $data);
	}


    public function new(){
        $produto = $_POST;
        $dir = "../../assets/img"; 
        $file = $_FILES["foto"]; 
        if (move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
            echo "Arquivo enviado com sucesso!"; 
        } 
        else { 
            echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
        }     
        $this->load->model("produtos_model");
        $this->produtos_model->new($produto);
        redirect(base_url());
    }
} 

?>