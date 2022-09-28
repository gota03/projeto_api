<?php
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
}
else{
    echo "<hr>";
    echo "acessar outra coisa";
}