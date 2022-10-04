<?php

namespace App\model;
use App\model\Conexao;
use Exception;

class ProdutoDAO{
    private $tabela = "produto";

    public function consultar(){
        $sql = "SELECT * FROM {$this->tabela}";
        $preparacao = Conexao::getConexao()->prepare($sql);
        $preparacao->execute();

        if($preparacao->rowCount()>0){
            return $preparacao->fetchALL(\PDO::FETCH_ASSOC);
        }
        else{
            throw new \Exception("Nenhum dado encontrado no banco"); // ESTAMOS LANÇANDO UM ERRO PARA SER TRATADO PELO CATCH
        }
    }
}