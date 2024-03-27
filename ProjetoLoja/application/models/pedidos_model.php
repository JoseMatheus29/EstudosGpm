<?php

class Pedidos_model extends CI_Model {

    public function index(){ 
        return $this->db->get("pedidos")->result_array();
    }
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("pedidos");  
    }
}
?>