<?php

class Carrinho_model extends CI_Model {


    public function index(){ 
        return $this->db->get("pedidos")->result_array();
    }

    public function finalizar($produtosUrl, $idUsuario, $valor){
        $produtosJson = urldecode($produtosUrl);
        $idsProdutos = json_decode($produtosJson, true);
        $idsProdutosString = implode(',', $idsProdutos);
        
        $data = array(
            'id_produtos' => $idsProdutosString,
            'id_usuario'  => $idUsuario,
            'status'  => 'Processo de entrega',
            'valor' => $valor
        );
        
        $this->db->insert('pedidos',$data);
        $this->db->set('carrinho', null); 
        $this->db->where('user_id', $idUsuario); 
        $this->db->update('usuarios'); 

    }



    public function adicionarCarrinho( $idProduto, $idUsuario){
        $produtos = $this->db->get_where('produtos', array('id'=> $idProduto))->result_array();
        $carrinho = array();        
        array_push($carrinho, array(
            'id_produto' => $idProduto,
            'idUsuario' => $idUsuario
        ));

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