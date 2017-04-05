<?php
require_once("conecta.php");
require_once("class/Livro.php");
require_once("class/Categorias.php");
require_once("class/Ebook.php");
require_once("class/LivroFisico.php");

function insereCliente(Cliente $Cliente, $conexao){

	$query= "insert into cliente (nome, saldo, limite, categoria_id, tipoConta)
			values ('{$Cliente->getNome()}', {$Cliente->getSaldo()}, '{$Cliente->getLimite()}',
			 {$Cliente->getCategoria()->getId()}, '{$Cliente->getTipoConta()}')";
		//echo $query;	
	return mysqli_query($conexao, $query);
}

function listarCliente ($conexao){
	$vetor_cliente= array();
	$query="select cliente.*, categorias.nome as
	categoria_nome from produtos join categorias
	on categorias.id=produtos.categoria_id";
	$resultado= mysqli_query($conexao, $query);

	while ($cliente_array= mysqli_fetch_assoc($resultado)){
		/* criando um objeto cliente a cada repetição
		 do laço*/
		 $categoria= new Categorias();
		 $categoria->setNome($cliente_array["categoria_nome"]);

		 $Id=$cliente_array['id'];
		 $Nome=$cliente_array['nome'];
		 $Saldo=$cliente_array['saldo'];
		 $Limite= $cliente_array['limite'];
		 $tipoConta= $livro_array['tipoConta'];
		 $Categoria=$categoria;

		 $Categoria= new Cliente($Nome, $Saldo, $Limite, $tipoConta);
		 $Cliente->setId($Id);

		 array_push($vetor_cliente, $Cliente);
	}
	return $vetor_cliente;
}

function alteraCliente (Cliente $Cliente, $conexao){
		$query = "update produtos set nome = '{$Cliente->getNome()}', Saldo = {$Cliente->getSaldo()}, limite = '{$Cliente->getLimite()}', categoria_id= {$Livro->getCategoria()->getId()}, tipoConta= '{$Livro->getTipoConta()}'
			where id = {$Cliente->getId()}";
		//echo $query;
			
	return mysqli_query($conexao, $query);
	}

	function buscarCliente($conexao, $id) {

	$query = "select * from cliente where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$cliente_buscado = mysqli_fetch_assoc($resultado);

	$categoria= new Categorias();
	$categoria->setId($cliente_buscado['categoria_id']);

		$Id=$cliente_buscado['id'];
		$Nome=$cliente_buscado['nome'];
		$Saldo=$cliente_buscado['saldo'];
		$Limite= $cliente_buscado['limite'];
		$tipoConta= $cliente_buscado['tipoConta'];
		$Categoria=$categoria;

		if($tipoConta=="corrente"){
	$Cliente= new corrente($Nome, $Saldo, $Limite, $tipoConta);
	}else{
	$Cliente= new poupanca($Nome, $Saldo, $Limite, $tipoConta);
	} 
		 $Cliente->setId($Id);

	return $Cliente;
}

	function removeCliente ($id, $conexao){
		$query="delete from cliente where id= {$id}";
		return mysqli_query($conexao,$query);
	}

?>