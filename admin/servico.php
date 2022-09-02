<?php 
    require_once "conexao.php";

    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");


    $sqlServicos = $conexao->prepare("SELECT * FROM `servico` WHERE statusServico = 'ativo' ORDER BY nomeServico ASC");

    $sqlServicos->execute();

    $json = array();
    while ($r = $sqlServicos->fetch(PDO::FETCH_ASSOC)){
        array_push($json, $r);
    }
    echo json_encode($json, JSON_UNESCAPED_UNICODE)
?>