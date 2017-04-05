<?php
require_once("cabecalho.php");
require_once("banco-livro.php");
require_once("class/Livro.php");
require_once("class/Categorias.php");

$Id=$_POST['id'];
$Nome=$_POST['nomeCliente'];
$Saldo=$_POST['saldoCliente'];
$Limite=$_POST['limiteCliente'];
$tipoConta= $_POST['tipoConta'];



/*criando um objeto "categoria" para armazenar
dentro do objeto "livro"*/
$categoria= new Categorias();
$categoria->setId($_POST['categoria_id']); 


//Criando o objeto livro através do seu construtor
$Cliente= new Cliente($Nome, $Saldo, $Limite, $tipoConta);
$Cliente->setId($Id);//atribuindo o valor do ID


if(alteraCliente($Cliente, $conexao)){?>
<p class="bg-success">
	O Cliente <?=$Cliente->getNome()?> foi alterado!</p>
<?php
}else{
	$msg= mysqli_error($conexao);?>
	<p class="bg-danger">
	O cliente <?=$Cliente->getNome()?> não foi alterado: <?=$msg?></p>
<?php
}
include("rodape.php");
?>