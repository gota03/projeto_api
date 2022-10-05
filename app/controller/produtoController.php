<?php
namespace App\controller; // UTILIZANDO NAMESPACE PARA IDENTIFICAR NOSSA CLASSE
use App\model\ProdutoDAO;

class ProdutoController{
   public function get(){
      $meuProduto = new ProdutoDAO();
      return $meuProduto->consultar();
   }
   public function post(){
      $meuProduto = new ProdutoDAO();
      return $meuProduto->inserir($_POST);
      //var_dump($_POST);
   }
   public function put($id){
      return "Estou no metodo put";
   }
   public function delete($id){
      return "Estou no metodo delete";
   }
}