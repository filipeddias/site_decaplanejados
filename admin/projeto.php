<?php 
    require_once "conexao.php";

    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");


    $sqlProjeto = $conexao->prepare("SELECT fotoProjeto, nomeProjeto, descProjeto FROM projetos  ");

    $sqlProjeto->execute();

    $json = array();
    while ($r = $sqlProjeto->fetch(PDO::FETCH_ASSOC)){
        array_push($json, $r);
    }
    echo json_encode($json, JSON_UNESCAPED_UNICODE)
?>