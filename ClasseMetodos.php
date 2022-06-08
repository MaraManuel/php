<?php

include 'server.php';


//Clear
function clear($input)
{
    global $conexao;

    $var = "";
    //sqp
    $var = mysqli_escape_string($conexao, $input);
    // xss
    $var = htmlspecialchars($input);

    return $var;


}

function clearVetor($input)
{
    global $conexao;
    
    foreach ($input as $key => $var) {
        //sqp
        $var = mysqli_escape_string($conexao, $var);
        // xss
        $var = htmlspecialchars($var);
    }
    

    return $input;


}



function inserir($tabela, $campos, $valores)
{

    global $conexao;

    $tabela = clear($tabela);
    $campos = clearVetor($campos);
    $valores = clearVetor($valores);

    $t = count($campos);

    $query = "";

    $query .= "insert into ".$tabela." (";

    foreach($campos as $valor): 
        $query .= $valor.",";
    endforeach;

    
    $query = substr($query, 0, strlen($query)- 1);
    $query .= ") values (";

    foreach($valores as $valor): 
        $query .= "'".$valor."',";
    endforeach;

    $query = substr($query, 0, strlen($query)- 1);
    $query .= ") ";


    if( mysqli_query( $conexao, $query) ):
       
       $json =json_encode(array('Mensagem'=>'Cadastrado!'));
           
        echo $json;
          
   
       else :
       
           $json =json_encode(array ('Mensagem'=>'Erro ao cadastrar! '));
   
           echo $json;
       endif;
}



function cadastrar($tabela, $valores)
{

    global $conexao;

    
    $campos = ['nome', 'sobrenome', 'email', 'senha', 'dataDeEntrada'];

    $tabela = clear($tabela);
    $campos = clearVetor($campos);
    $valores = clearVetor($valores);


      $senhaSegura = password_hash( $valores[3], PASSWORD_DEFAULT);

      $valores[3] = $senhaSegura;


      date_default_timezone_set('Africa/Luanda');

      $valores[] = date('Y-m-d H:i:s');



      $t = count($campos);

      if( verificandoEmail($valores[2]) == ""):
        inserir($tabela, $campos, $valores);
      else:
        $json =json_encode(array('Mensagem'=>'Email em uso!'));
           
        echo $json;
      endif;



   
      


    
    
}


function credenciais($email, $senha)
{
    global $conexao;

    $email = clear($email);
    $senha = clear($senha);

    

    $tabela = verificandoEmail($email);


    if( $tabela != "")
    {
        verificandoCredenciais($tabela, $email, $senha);
    }
    else
    {
        $json = json_encode(array('Mensagem'=>"O email '$email' nao pertence a nenhuma conta!"));
        echo $json;
    }
    
    
        

}   


function verificandoEmail($email)
{
    global $conexao;

    $query;

    $tabelas = ['funcionario','cliente','admin'];

    foreach($tabelas as $tabela): 

        if( verificandoEmailT($tabela, $email)):

            return $tabela;

        endif;

    endforeach;

    return "";
           
}

function verificandoEmailT($tabela, $email)
{
    global $conexao;


    $query = mysqli_query( $conexao, "select * from {$tabela} where email='{$email}'");

    if( mysqli_num_rows($query) > 0):

        return true;
    else:
        return false;
    endif;
           
}

function verificandoCredenciais($tabela, $email, $senha)
{

    global $conexao;

    
    $query = "SELECT * FROM {$tabela} WHERE email = '$email'";

    $query = mysqli_query($conexao, $query);

    if( mysqli_num_rows($query) == 1 ):

        $dados = mysqli_fetch_array($query);

        $senhaBd = $dados['senha'];

        if( password_verify($senha, $senhaBd)):

        $json = json_encode(array('Mensagem'=>'Sessao iniciada com sucesso '.$dados['nome']." ".$dados['sobrenome']));

        echo $json;
        else:
        $json = json_encode(array('Mensagem'=>'O email nao corresponde a senha.'));
        echo $json;  
        endif;

        
    endif;
}

function pegarRegistoId($tabela, $id)
{
    
    global $conexao;


    if($query = mysqli_query($conexao,"select * from ".$tabela." where id =".$id))
    {
        while($dados = mysqli_fetch_assoc($query)) 
        {
            $array[] = $dados;
 
            $json = json_encode($array) ;
      
        }
 
           
          echo  $json;


            
            }
            else
          
            {
          
               $json = json_encode(array('Mensagem'=>'Registro não encontrado!'));
               echo $json;
        
            }

}

function pegarRegistos($tabela)
{
    
    global $conexao;

    if($query = mysqli_query($conexao,"select * from ".$tabela))
    {
        while($dados = mysqli_fetch_assoc($query)) 
        {
            $array[] = $dados;
 
            $json = json_encode($array) ;
      
        }
 
           
          echo  $json;


            
            }
            else
          
            {
          
               $json = json_encode(array('Mensagem'=>'Registro não encontrado!'));
               echo $json;
        
            }

}

function atualizar($tabela, $campos, $valores, $id)
{
    global $conexao;

    $id = clear($id);
    $tabela = clear($tabela);    
    $campos = clearVetor($campos);
    $valores = clearVetor($valores);

    $t = count($campos);

   

    $query = "update ".$tabela." set ";

    $i = 0;

    foreach($campos as $campo): 

        $query .= $campo." = '".$valores[$i]."',";
        $i++;
    endforeach;

    
    $query = substr($query, 0, strlen($query)- 1);
    $query .= " where id = '$id'";

    
    if( mysqli_query( $conexao, $query) ):
       
       $json =json_encode(array('Mensagem'=>'Atualizado com sucesso!'));
           
        echo $json;
          
   
       else :
       
           $json =json_encode(array ('Mensagem'=>'Erro ao Atualizar! '));
   
           echo $json;
       endif;
    


}

function atualizarUmValor($tabela, $campo, $valor, $id)
{
    global $conexao;

    $id = clear($id);
    $tabela = clear($tabela);    
    $campo = clear($campo);
    $valor = clear($valor);


   

    $query = "update ".$tabela." set ".$campo." = '".$valor."' where id = '$id'";

    
    if( mysqli_query( $conexao, $query) ):
       
       $json =json_encode(array('Mensagem'=>'Atualizado com sucesso!'));
           
        echo $json;
          
   
       else :
       
           $json =json_encode(array ('Mensagem'=>'Erro ao Atualizar! '));
   
           echo $json;
       endif;
    


}

function deletarRegisto($tabela, $id)
{
    global $conexao;

    $id = clear($id);
    $tabela = clear($tabela); 


   

    $query = "delete from ".$tabela." where id = '$id'";

    $query = mysqli_query($conexao, $query);

    
    if( mysqli_num_rows($query) == 1  ):
       
       $json =json_encode(array('Mensagem'=>'Registo deletado com sucesso!'));
           
        echo $json;
          
   
       else :
       
           $json =json_encode(array ('Mensagem'=>'Erro ao Deletar! '));
   
           echo $json;
       endif;
    


}