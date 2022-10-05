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

    public function inserir($dados){
        $sql = "INSERT INTO {$this->tabela} VALUES(NULL, :nome, :preco, :info)";
        $preparacao = Conexao::getConexao()->prepare($sql);
        

        $preparacao->bindValue(":nome", $dados["nome_produto"]);
        $preparacao->bindValue(":preco", $dados["preco_produto"]);
        $preparacao->bindValue(":info", $dados["info_produto"]);

        $preparacao->execute();

        if($preparacao->rowCount()>0){
            return "Dados inseridos com sucesso";
        }
        else{
            throw new \Exception("Dados não inseridos");
        }
    }
}