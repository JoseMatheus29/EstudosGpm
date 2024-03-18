<?php

class Produtos_model extends CI_Model {


    public function index(){ 
        return $this->db->get("produtos")->result_array();
    }

    public function new($produto){
        $this->db->insert('produtos', $produto);
        }
    }
?>