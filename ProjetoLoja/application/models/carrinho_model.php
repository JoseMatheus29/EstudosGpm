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



    public function adicionarCarrinho( $idProduto, $idUsuario){
        $produtos = $this->db->get_where('produtos', array('id'=> $idProduto))->result_array();
        $carrinho = array();        
        array_push($carrinho, array(
            'id_produto' => $idProduto,
            'idUsuario' => $idUsuario
        ));
        //$carrinho_json = json_encode($carrinho);
        #pegar o ultimo valor da coluna carrinho e incrementar com o novo valor para assim fazer o array de pedidos 
        $this->db->select('carrinho');
        $this->db->where('user_id', $idUsuario); 
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
        $this->db->where('user_id', $idUsuario);
        $this->db->update('usuarios');  
        foreach ($produtos as $produto) {
            $idPrododuto = $produto['id'];
            $novaQuantidade = $produto['quantidade']-1;
        }

        $this->db->set('quantidade', $novaQuantidade);
        $this->db->where('id', $idPrododuto);
        $this->db->update('produtos');  
    }

    public function deletarProdutoCarrinho($idUsuario, $idProduto){
        $this->db->select('carrinho');
        $this->db->where('user_id', $idUsuario); 
        $produtosCarrinho = $this->db->get('usuarios')->row_array();
        $protutosCarrinhoArray = json_decode($produtosCarrinho['carrinho'], true);
        foreach($protutosCarrinhoArray as $produtos){
            foreach($produtos as $produto){
                if($produto['id_produto'] == $idProduto){
                    unset($produto);
                    $carrinhoNovoBanco = json_encode($produto);
                    $this->db->set('carrinho', $carrinhoNovoBanco);
                    $this->db->where('user_id', $idUsuario);
                    $this->db->update('usuarios');  
                }
                
                

            }
            
        }

    }
}
?>