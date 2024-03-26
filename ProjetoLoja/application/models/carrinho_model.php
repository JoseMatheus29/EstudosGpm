<?php

class Carrinho_model extends CI_Model {


    public function index(){ 
        return $this->db->get("pedidos")->result_array();
    }

    public function finalizar($idProduto, $idUsuario){
        
        
        
        
        
        
        
        
        
        
        
        
        // $produtos = $this->db->get_where('produtos', array('id'=> $idPrododuto))->result_array();

        // foreach ($produtos as $produto) {
        //     $idPrododuto = $produto['id'];
        //     $novaQuantidade = $produto['quantidade']-1;
        // }
        // $this->db->set('quantidade', $novaQuantidade);
        // $this->db->where('id', $idPrododuto);
        // $this->db->update('produtos');  
        
        
        // $this->db->set('status', 1);
        // $this->db->where('id', $idPedido);
        // $this->db->update('carrinho');    


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

    public function deletarProdutoCarrinho($idUsuario, $idProduto) {
        $this->db->select('carrinho');
        $this->db->where('user_id', $idUsuario); 
        $produtosCarrinho = $this->db->get('usuarios')->row_array();
        
        // Decodifica o JSON para um array PHP
        $produtosCarrinhoArray = json_decode($produtosCarrinho['carrinho'], true);
    
        // Percorre o array de arrays de produtos no carrinho
        foreach ($produtosCarrinhoArray as $index => $produtos) {
            // Itera sobre os produtos dentro de cada array
            foreach ($produtos as $indice => $produto) {
                if ($produto['id_produto'] == $idProduto) {
                    // Remove o produto do carrinho
                    unset($produtosCarrinhoArray[$index][$indice]);
                }
            }
        }
    
        // Codifica o novo array para JSON
        $novoCarrinhoJSON = json_encode($produtosCarrinhoArray);
    
        // Atualiza o campo 'carrinho' no banco de dados com o novo JSON
        $this->db->set('carrinho', $novoCarrinhoJSON);
        $this->db->where('user_id', $idUsuario);
        $this->db->update('usuarios');
    }
    
    
}
?>