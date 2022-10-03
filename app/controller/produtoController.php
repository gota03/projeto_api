<?php
namespace App\controller; // UTILIZANDO NAMESPACE PARA IDENTIFICAR NOSSA CLASSE

class ProdutoController{
   public function get(){
      return "Estou no metodo get";
   }
   public function post(){
      return "Estou no metodo post";
   }
   public function put($id){
      return "Estou no metodo put";
   }
   public function delete($id){
      return "Estou no metodo delete";
   }
}