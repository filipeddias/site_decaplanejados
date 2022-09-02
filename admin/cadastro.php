<?php 
    require_once ("conexao.php");

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json; charset=utf-8');
    header('Access-Control-Allow-Method: POST');

    $data = file_get_contents('php://input');
    $objData = json_decode($data);

    $nome =  $objData -> nome;
    $email = $objData -> email;
    $senha = $objData -> senha;

    $dataCad = date('y-m-d');
    $status = 'ATIVO';
    $fotoUser = 'cliente/user.png';

    $nome = stripcslashes($nome);
    $email = stripcslashes($email);
    $senha = stripcslashes($senha);


    //trim - retira espaço no inicio e final de uma string
    $nome = trim($nome);
    $email = trim($email);
    //$senha = trim($senha);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    


    
    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");
    if($conexao){
      $sqlDetalhe = $conexao->prepare(" INSERT INTO cliente (nomeCliente, emailCliente, senhaCliente, statusCliente, dataCadCliente, fotoCliente) VALUES ('".$nome."', '".$email."', '".$senha."', '".$status."', '".$dataCad."', '".$fotoUser."')");
      
      $sqlDetalhe -> execute();

      $dadosCadastro = array('mens' => 'Dados cadastrado com sucesso');

      echo json_encode($dadosCadastro);

    }else{
        $dadosCadastro = array('mens' => 'Dados não cadastrado com sucesso');
        echo json_encode($dadosCadastro);
    }
  



    

?>