<?php

class Usuarios_model extends CI_Model {


    public function index(){ 
        return $this->db->get("usuarios")->result_array();
    }



    public function novo($usuarios){
        $this->db->insert('usuarios', $usuarios);
    }
        
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("produtos");  
    }

    public function atualizar($produto){
        $this->db->where('nome', $produto['nome']);
        return $this->db->update('produtos', $produto);

    }
    }
?>