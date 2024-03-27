<?php

class Pedidos_model extends CI_Model {

    public function index($idUsuario){ 
        return $this->db->get_where('pedidos', array('id'=> $idUsuario))->result_array();
    }
    public function deletar($id){
        $this->db->where("id",$id);
        return $this->db->delete("pedidos");  
    }
}
?>