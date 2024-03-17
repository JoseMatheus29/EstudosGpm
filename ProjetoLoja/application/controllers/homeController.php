<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller{
    public function index()
	{   
        $data['title'] = "Home";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
		$this->load->view('pages/home', $data);
        $this->load->view('templates/footer.php', $data);
	}
} 

?>