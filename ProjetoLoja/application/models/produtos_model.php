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
        $produtos = $this->db->get_where('produtos', array('id'=> $id))->result_array();
        $carrinho = array();
        foreach ($produtos as $produto) {
            $carrinho[] = array(
                'nome' => $produto['nome'],
                'valor' => $produto['valor']
            );
            $idPrododuto = $produto['id'];
            $novaQuantidade = $produto['quantidade']-1;
        }
        $prdJson = json_encode($carrinho);
        $this->db->set('quantidade', $novaQuantidade);
        $this->db->where('id', $idPrododuto);
        $this->db->update('produtos');    

        $this->db->set('carrinho', $prdJson);
        $this->db->where('user_id', 10);
        $this->db->update('usuarios');
        


    }
    }
?>