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
    //$campos = ['tipo', 'nome'];
    //$valores = ['normal', 'Sala 3'];
    //$id = '5';
    //atualizarSala($campos, $valores, $id);
    //deletarSala($id);


    //$valoresCategoria = ['5','Bebidas', 'icon_cocktail.png'];
    //inserirCategoria($valoresCategoria);
    //$campos = ['nome'];
    //$valores = ['Marisco'];
    //$id = '5';
    //atualizarCategoria($campos, $valores, $id);
    //deletarCategoria($id);


    //$valoresMesa = ['Mesa 2', '1', '4', '1', '00', 'livre'];
    //inserirMesa($valoresMesa);
    //$campos = ['nome'];
    //$valores = ['Mesa 3'];
    //$id = '3';
    //atualizarMesa($campos, $valores, $id);
    //deletarMesa($id);

    //$valoresProduto = ['Panquecas', 'Cinco panquecas com mel derramado e mirtilos','3750','00:17:00','3','sobremesa2.jpeg'];
    //inserirProduto($valoresProduto);
    //$campos = ['nome'];
    //$valores = ['Panqueca'];
    //$id = '1';
    //atualizarProduto($campos, $valores, $id);
    //deletarProduto($id);



    //O Último campo da reserva ainda nao pode ter absolutamente nada (o campo 'confirmado')!
    //$valoresReserva = ['1', '1', '2022-06-03 21:08:38', '2022-06-14 20:00:00'];
    //inserirReserva($valoresReserva);
    //$campos = ['id_mesa'];
    //$valores = ['2'];
    //$id = '2';
    //atualizarReserva($campos, $valores, $id);
    //deletarReserva($id);

    


    //$valoresSubcategoria = ['Sementes','1'];
    //inserirSubcategoria($valoresSubcategoria);
    //$campos = ['nome'];
    //$valores = ['Sementess'];
    //$id = '1';
    //atualizarSubcategoria($campos, $valores, $id);
    //deletarSubcategoria($id);

    //---------------------------------------------

    //$valoresPedindoProduto = ['1','1','vago'];
    //inserirPedindoProduto($valoresPedindoProduto);
    //$campos = ['tipo'];
    //$valores = ['entrada'];
    //$id = '2';
    //atualizarPedindoProduto($campos, $valores, $id);
    //deletarPedindoProduto($id);

    //$valoresPedindoMesa = ['1','1','2022-06-08 21:08:38'];
    //inserirPedindoMesa($valoresPedindoMesa);
    //$campos = ['id_cliente'];
    //$valores = ['2'];
    //$id = '2';
    //atualizarPedindoMesa($campos, $valores, $id);
    //deletarPedindoMesa('1');

    //$valoresPedindoLimpeza = ['1','2022-06-08 21:08:38'];
    //inserirPedindoLimpeza($valoresPedindoLimpeza);
    //$campos = ['id_mesa'];
    //$valores = ['2'];
    //$id = '2';
    //atualizarPedindoLimpeza($campos, $valores, $id);
    //deletarPedindoLimpeza('1');

    //$valoresPedindoConta = ['1','2022-06-08 21:08:38'];
    //inserirPedindoConta($valoresPedindoConta);
    //$campos = ['id_mesa'];
    //$valores = ['2'];
    //$id = '2';
    //atualizarPedindoConta($campos, $valores, $id);
    //deletarPedindoConta('1');

    /*
    $valoresConfirmaReserva = ['1','2022-06-08 21:08:38'];
    inserirConfirmaReserva($valoresConfirmaReserva);
    $campos = ['id_reserva'];
    $valores = ['2'];
    $id = '2';
    atualizarConfirmaReserva($campos, $valores, $id);
    deletarConfirmaReserva('1');
    */

    /*
    $valoresChamando = ['1','2022-06-08 21:08:38'];
    inserirChamando($valoresChamando);
    $campos = ['id_mesa'];
    $valores = ['2'];
    $id = '2';
    atualizarChamando($campos, $valores, $id);
    deletarChamando('1');*/


    


  


break;

}

?>