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

    public function atualizarEstoque($produto){
        $this->db->set('quantidade',$produto['quantidade']);
        $this->db->where('id', $produto['id']);
        $this->db->update('produtos');
    }

    public function adicionarCarrinho( $idPrododuto, $id_usuario){
        $produtos = $this->db->get_where('produtos', array('id'=> $idPrododuto))->result_array();
        $carrinho = array(
            'id_produto' => $idPrododuto,
            'id_usuario' => $id_usuario
        );
        $this->db->insert('carrinho', $carrinho);
        foreach ($produtos as $produto) {
            $idPrododuto = $produto['id'];
            $novaQuantidade = $produto['quantidade']-1;
        }

        $this->db->set('quantidade', $novaQuantidade);
        $this->db->where('id', $idPrododuto);
        $this->db->update('produtos');  
    }
    }
?>