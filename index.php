<?php
require_once("vendor/autoload.php");
use App\controller\ProdutoController;
//print_r($_GET);
$rota = !empty($_GET["url"]) ? $_GET["url"] : "nada ainda" ; // VERIFICA SE A URL NAO ESTA VAZIA, SE ESTIVER EXIBE UM TEXTO CASO CONTRARIO ATRIBUI UM CONTEUDO NORMAL
echo $rota;
$rota = explode("/",$rota ); // EXPLODE IRA CRIAR UM VETOR SEPARANDO AS INFORMACOES QUANDO ENCONTRAR UMA /
echo "<hr>";
print_r($rota);
if($rota[0] === "api" ){
    echo "<hr>";
    echo "Chegou na api";
    echo "<hr>";
    array_shift($rota);
    //echo "<hr>";
    print_r($rota);
    // $meuProduto = new ProdutoController();
    // echo "<hr>";
    // $meuProduto->inicio();
    // PEGANDO A INFORMACAO DO SERVICO QUE O USUARIO QUER ACESSAR
    // ORGANIZANDO O CAMINHO PARA DEIXAR COM O MESMO NOME DA CLASSE DA PASTA CONTROLLER
    //echo "<hr>";
    if(!file_exists("App\controller\\".$rota[0]."Controller.php")){
        echo "<hr>";
        echo "Esse serviço não esta disponivel";
    }
    else{
        $servico = "App\controller\\".ucfirst($rota[0])."Controller";
        echo "{$servico}";
        array_shift($rota);
        $HTTP = $_SERVER["REQUEST_METHOD"]; // ESTA PEGANDO O VERBO HTTP QUE É O METODO DE ENVIO DOS DADOS OU SEJA GET POST PUT DELETE
    }
   
}
else{
    echo "<hr>";
    echo "acessar outra coisa";
}