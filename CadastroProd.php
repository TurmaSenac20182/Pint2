<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Página do Administrador</title>
	<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #E6E6E6;
}
h1{
color: black;
}
.div1{
box-sizing: border-box;
}
a{
color: white;
padding-left: 7%;
}
nav {
background-color: #2E2E2E;
float: left;
padding-left: 1%;
padding-bottom: 50%;
width: 180px;
}
</style>
</head>

<body>
<div id="div1">

    <nav class="nav flex-column">  
	
        <ul class="nav flex-column">
          <li class="nav-item">
            <div class="nav flex-column">
			<img class="img-thumbnail" src="http://www.polarb2b.com/Content/_img/user.png" alt="Usuario" width="100%">
              <a class="nav-link" href="painel.html" color="white">Painel do Administrador</a>
              <a class="nav-link" href="CadastroProd.html">Cadastrar Produtos</a>
              <a class="nav-link" href="Produtos.html">Produtos</a>
          </li>
      </div>
    </nav>
	</div>
    <br>
		<h1 align="center">Cadastro de Produtos</h1>
		<div class="float-none" class="container">
		<fieldset>
		<form>
  <div class="form-group col-md-6">
    <label for="Foto">Foto</label>
    <input type="file" class="form-control-file" id="Foto">
  </div>
</form>
		<form action="cadastroProdrutos.php" method="post"> 

  <div class="form-group col-sm-10">
    <label for="id" class="sr-only">ID</label>
    <input type="hidden" class="form-control" id="id" name="txtId">
  </div>
  <div class="form-group col-sm-10">
    <label for="Nome">Nome do Produto</label>
    <input type="text" class="form-control" id="Nome"  name="txtNome" placeholder="Nome">
  </div>
  <div class="form-group col-sm-10">
    <label for="preco">Preço</label>
	<input type="text" class="form-control" id="preco"  name="txtPreco"placeholder="R$">
  </div>
 <div class="form-group col-sm-10">
    <label for="categoria">Categoria</label>
	<input type="text" class="form-control" id="categoria" name="txtCategorias" placeholder="">
  </div>
  <div class="form-group col-sm-10">
    <label for="fabricante">Fabricante</label>
	<input type="text" class="form-control" id="fabricante" name="txtFabricante" placeholder="">
  </div>
  <div class="form-group col-sm-10">
    <label for="Desc">Descrição</label>
    <textarea class="form-control" id="Desc"  name="txtDescricao" rows="3" placeholder="Descreva o Produto"></textarea>
	  </div>
	<div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  </fieldset>
</form>
</div>
		
         <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
    </script>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>