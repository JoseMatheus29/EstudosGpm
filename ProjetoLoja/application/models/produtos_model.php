<?php

class Produtos_model extends CI_Model {


    public function index(){ 
        return $this->db->get("produtos")->result_array();
    }

    public function novo($produto){
        $this->db->insert('produtos', $produto);
    }
        
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("produtos");  
    }

    public function atualizar($id, $produto){
        $this->db->where("id",$id);
        return $this->db->update("produtos", $produto);  
        
    }
    }
?>