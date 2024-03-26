<?php

    include "conexao.php" ;

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($conexao, "INSERT INTO cadastro(nome,endereco,telefone,data,email,senha)VALUE('$nome','$endereco','$telefone','$data','$email','$senha')");

    if($sql = mysqli_query($conexao,$sql)){
        echo"$nome cadastrado com sucesso";

        
    }else{

        echo"usuario nao encontrado"
    }
    

?>
