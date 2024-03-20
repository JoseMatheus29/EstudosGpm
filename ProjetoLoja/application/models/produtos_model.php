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

    public function atualizar($produto){

        $this->db->set($produto);
        $this->db->where('id', $produto['id']);
        $this->db->update('produtos');

    }
    public function adicionarCarrinho( $id){
        $produto = $this->db->get_where('produtos', array('id'=> $id))->result_array();
        $prdArray['nome'] = $produto[0]['nome'];
        $prdArray['valor'] = $produto[0]['valor'];
        $prdJson = json_encode($prdArray);
        $this->db->set('carrinho', $prdJson);
        $this->db->where('user_id', 10);
        $this->db->update('usuarios');
        


    }
    }
?>