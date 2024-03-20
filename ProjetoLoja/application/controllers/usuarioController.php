<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class usuarioController extends CI_Controller{
    public function login()
	{  
        $data['title'] = "Login";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/login', $data);
        $this->load->view('templates/footer.php', $data);

	}

    public function cadastrarUsuario(){
        $data['title'] = "Cadastro";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/cadastroUsuario', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function novoUsuario(){
        $usuario = $_POST;
        $this->load->model("usuarios_model");
        $this->usuarios_model->novo($usuario);
        redirect(base_url());

    }
}

