<?php

include 'server.php'; 
include 'ClasseMetodos.php';

switch($_SERVER['REQUEST_METHOD'])
{
    case 'GET';

    //$nome = $post['nome'];
    //$senha = $post['senha'];
    
    $valores = ['Mirela', 'Izoa', 'mirelaizoaAdmin@gmail.com','123456780'];

    $email = $valores[2];
    $senha = $valores[3];
    $id = 2;

    $tabela = 'admin';

    $Outroscampos = ['nome', 'sobrenome'];
    $Outrosvalores = ['Mirela', 'Admin Izoa'];

    //cadastrar($tabela, $valores);

    //credenciais($email, $senha);

    //pegarRegistoId($tabela, '1');

    //pegarRegistos($tabela);

    //atualizarUmValor($tabela, 'nome', 'Nova Mirela', $id);

    //atualizar($tabela, $Outroscampos, $Outrosvalores, $id);

    //deletarRegisto($tabela, $id);



  

/*
    if( mysqli_query($conexao, "select * from usuarios"))
    {
        $json = json_encode(array('Mensagens'=> 'Utilizador Cadastrado!'));
        echo $json;

    }else
    {
        $json = json_encode(array('Mensagens'=> 'Erro ao Cadastrar Utilizador!'));
        echo $json;
    }*/

break;

}

?>