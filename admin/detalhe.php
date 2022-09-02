<?php

    require_once("conexao.php");

    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");

    if(!$conexao){
        echo "Não foi possivel conectar ao banco de dados!";
    }

    if(isset($_GET ['idServico'])){ // Verifica se a variavel foi iniciada
        $idServico = $_GET['idServico'];

        $query = $conexao->prepare("SELECT * FROM servico WHERE idServico = $idServico");

        $query->execute();

        $json = array();

        $dados = $query->fetch(PDO::FETCH_ASSOC);

        array_push($json, $dados);

        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
?>