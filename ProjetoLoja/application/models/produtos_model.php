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
        $carrinho = array();        
        array_push($carrinho, array(
            'id_produto' => $idPrododuto,
            'id_usuario' => $id_usuario
        ));
        //$carrinho_json = json_encode($carrinho);
        #pegar o ultimo valor da coluna carrinho e incrementar com o novo valor para assim fazer o array de pedidos 
        $this->db->select('carrinho');
        $this->db->where('user_id', $id_usuario); 
        $produtosCarrinho = $this->db->get('usuarios')->row_array();
        if ($produtosCarrinho) {
            $carrinho_json = $produtosCarrinho['carrinho'];
            $carrinho_array = json_decode($carrinho_json, true);
            $carrinho_array[] = $carrinho;
            $carrinho_json = json_encode($carrinho_array);
        } else {
            $carrinho_json = json_encode(array($carrinho));
        }

        $this->db->set('carrinho', $carrinho_json);
        $this->db->where('user_id', $id_usuario);
        $this->db->update('usuarios');  
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