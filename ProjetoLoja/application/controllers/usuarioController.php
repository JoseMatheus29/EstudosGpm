<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class usuarioController extends CI_Controller{

    public function index(){
        $this->load->model("usuarios_model");
		$data["usuarios"] = $this->usuarios_model->index();
		$data["title"] = 'Usuarios';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('pages/usuarios', $data);
		$this->load->view('templates/footer');
		$this->load->view('pages/atualizarUsuarios');

    }
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
        $usuario['senha'] = md5($usuario['senha']);
        $this->load->model("usuarios_model");
        $this->usuarios_model->novo($usuario);
        redirect(base_url());
    }

    public function deletarUsuario($id){
        $this->load->model("usuarios_model");
        $this->usuarios_model->deletar($id);
        redirect(base_url().'/usuarioController');
    }

    public function atualizar(){
        $this->load->model("usuarios_model");
        $usuarioAtt = $_POST;
        $this->usuarios_model->atualizar($usuarioAtt);
        redirect(base_url().'/usuarioController');

    }

    public function logar(){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $this->load->model("usuarios_model");
        $user = $this->usuarios_model->login($email, $senha);
        if($user){
            $this->session->set_userdata("usuario_logado", $user);
            redirect(base_url());
        }else{
            redirect(base_url().'/usuarioController/login');
        }
    }

    public function sair(){
        $this->session->unset_userdata("usuario_logado");
        redirect(base_url().'/usuarioController/login');

    }

}

