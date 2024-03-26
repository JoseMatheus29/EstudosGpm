<?php

class Carrinho_model extends CI_Model {


    public function index(){ 
        return $this->db->get("carrinho")->result_array();
    }

    public function finalizar($idPrododuto, $idPedido){
        $produtos = $this->db->get_where('produtos', array('id'=> $idPrododuto))->result_array();

        foreach ($produtos as $produto) {
            $idPrododuto = $produto['id'];
            $novaQuantidade = $produto['quantidade']-1;
        }
        $this->db->set('quantidade', $novaQuantidade);
        $this->db->where('id', $idPrododuto);
        $this->db->update('produtos');  
        
        
        $this->db->set('status', 1);
        $this->db->where('id', $idPedido);
        $this->db->update('carrinho');    


    }



    public function deletar($idPedido){
        $this->db->where("id",$idPedido);
        return $this->db->delete("carrinho");  
    }
}
?>