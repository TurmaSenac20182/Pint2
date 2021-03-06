<?php
require "conexao.php";

//create todas as tabelas.
 function createLogin($nome,$email,$telefone,$senha)
 {
    $link = getConnection();


    $query="insert into tb_vendedores(nome,email,telefone,senha) values('{$nome}', '{$email}', '{$telefone}', md5('{$senha}'))";
    if(mysqli_query($link, $query))
    {
      return true;
    }

    mysqli_close($link);
   
 }


 function createLoja($vendedor_id,$nome,$cnpj,$seguimento,$logradouro,$bairro,$cidade,$uf,$referencia)
 {
    $link = getConnection();

    $query="call spr_registra_loja({$vendedor_id},'{$nome}','{$cnpj}','{$seguimento}','{$logradouro}','{$bairro}','{$cidade}','{$uf}','{$referencia}')";

   

    if(mysqli_query($link, $query))
    {
      return true;
    }
    else {
      return false;
    }
    mysqli_close($link);    
  }

  function createProdutos($id_loja, $categoria, $fabricante, $nome, $preco, $descricao)
  {
     $link = getConnection();

     $query="call spr_registra_prodruto({$id_loja},'{$categoria}','{$fabricante}', '{$nome}', '{$preco}', '{$descricao}')";    

     if(mysqli_query($link, $query))
      

     {
       return true;
     }

     mysqli_close($link);
    
  }

  //-----------------------------------------------------------------------------------

 function findByLoja($Nome,$id)
 {

  $link = getConnection();

  $query = "select * from tb_vededores where id = {$id} or nome = '{$loja}' ";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

function produtoFindByName($nome)
 {

  $link = getConnection();

  $query = "select * from lista_produtos where nome like '%{$nome}%'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

/*function findByLoja($Nome,$id)
{

  $link = getConnection();

  $query = "select * from tb_lojas where id = {$id} or nome = '{$loja}' ";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}*/

function findByLogin($Email)
 {

  $link = getConnection();

  $query = "select * from tb_vendedores where email = '{$email}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

function findByEndereço($endereco)
{
  $link = getConnection();

  $query = "select * from tb_endereco where endereco = '{$endereco}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}


function findByCategoria($categoria)
{
  $link = getConnection();

  $query = "select * from tb_categorias where categoria = '{$categoria}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}


function findByFabricante($fabricante)
{
  $link = getConnection();

  $query = "select * from tb_fabricantes where fabricante = '{$fabricante}'";

  $result = mysqli_query($link, $query);

  $dados = array();

  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }

  if(!$link) {
    mysqli_close($link);
  }

  return $dados;
}

  //--------------------------------------------------------------------------
  function updateLogin($senha)
  {
    $link = getConnection();


    $query = "update tb_vendedores set senha = '{$senha}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function updateProdutos($nome,$descricao,$preco)
  {
    $link = getConnection();


    $query = "update tb_produtos set nome= '{$nome}', descricao='{$descricao}',preco='{$preco}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function updateLoja($nome,$cnpj,$seguimento)
  {
    $link = getConnection();


    $query = "update tb_loja set nome= '{$nome}', cnpj='{$cnpj}',seguimento='{$seguimento}'";

    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }

  function updateEndereco($logradouro,$bairro,$numero,$cidade,$uf,$referencia)
  {
    $link = getConnection();

    $query = "update tb_endereco set nome= '{$logradouro}', bairro='{$bairro}',numero='{$cidade}',uf='{$uf}',referencia='{$referencia}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }


  function updateCategoria($categoria)
  {
    $link = getConnection();

    $query = "update tb_categorias set categoria= '{$categoria}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }


  function updateFabricante($fabricante)
  {
    $link = getConnection();

    $query = "update tb_fabricantes set fabricante= '{$fabricante}'";
    mysqli_query($link, $query);

    if(!$link) {
      mysqli_close($link);
    }
  }
  //------------------------------------------------------------------------------------

    function deleteLogin($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_vendedores where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }


    function deleteProdutos($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_produtos where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }


    function deleteLoja($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_lojas where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }


    function deleteEndereço($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_endereço where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }


    function deleteCategoria($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_categorias where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }


    function deleteFabricante($id) {
      $link = getConnection();

      // definindo a query SQL para ser disparada para banco
      $query = "delete from tb_fabricantes where id = '{$id}'";

      mysqli_query($link, $query);

      if(!$link) {
        mysqli_close($link);
      }
    }
