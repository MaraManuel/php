<?php

include 'server.php'; 
include 'ClasseMetodos.php';

switch($_SERVER['REQUEST_METHOD'])
{
    case 'GET';

    //$nome = $post['nome'];
    //$senha = $post['senha'];
    
    $valores = ['Mirela', 'Izoa', 'mirelaizoaFuncio@gmail.com','12345678'];

    $email = $valores[2];
    $senha = $valores[3];
    //$id = 7;

    $tabela = 'funcionario';

    //$Outroscampos = ['nome', 'sobrenome'];
    //$Outrosvalores = ['Mirela', 'Admin Izoa'];

    //inserir($tabela, $campos, $valores)

    //cadastrar($tabela, $valores);

    //credenciais($email, $senha);

    //pegarRegistoId($tabela, '1');

    //pegarRegistos($tabela);

    //atualizarUmValor($tabela, 'nome', 'Nova Mirela', $id);

    //atualizar($tabela, $Outroscampos, $Outrosvalores, $id);

    //deletarRegisto($tabela, $id);

    //$valoresSala = ['normal', 'Sala 3', 'sala-normal'];
    //inserirSala($valoresSala);

    //$valoresCategoria = ['4','Bebidas', 'icon_cocktail.png'];
    //inserirCategoria($valoresCategoria);

    //$valoresMesa = ['Mesa 1', '1', '4', '1', '00', 'livre'];
    //inserirMesa($valoresMesa);

    //$valoresProduto = ['Panquecas', 'Cinco panquecas com mel derramado e mirtilos','3750','00:17:00','3','sobremesa2.jpeg'];
    //inserirProduto($valoresProduto);

    //O Último campo da reserva ainda nao pode ter absolutamente nada (o campo 'confirmado')!
    //$valoresReserva = ['1', '1', '2022-06-03 21:08:38', '2022-06-14 20:00:00'];
    //inserirReserva($valoresReserva);

    //$valoresSubcategoria = ['Sementes','1'];
    //inserirSubcategoria($valoresSubcategoria);

    //$valoresPedindoProduto = ['1','1','vago'];
    //inserirPedindoProduto($valoresPedindoProduto);

    //$valoresPedindoMesa = ['1','1','2022-06-08 21:08:38'];
    //inserirPedindoMesa($valoresPedindoMesa);

    //$valoresPedindoLimpeza = ['1','2022-06-08 21:08:38'];
    //inserirPedindoLimpeza($valoresPedindoLimpeza);

    //$valoresPedindoConta = ['1','2022-06-08 21:08:38'];
    //inserirPedindoConta($valoresPedindoConta);

    //$valoresConfirmaReserva = ['1','2022-06-08 21:08:38'];
    //inserirConfirmaReserva($valoresConfirmaReserva);

    //$valoresChamando = ['1','2022-06-08 21:08:38'];
    //inserirChamando($valoresChamando);



  


break;

}

?>