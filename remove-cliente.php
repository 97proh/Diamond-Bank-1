<?php
require_once("cabecalho.php");
require_once("banco-livro.php");
require_once ("logica-usuario.php");

verificaUsuario();

$id= $_POST['id'];
if(removeCliente($id, $conexao)){
	?>
<p class="bg-success">Cliente removido</p>

<?php
}else{
	$msg= mysqli_error($conexao);?>
	<p class="bg-danger">Cliente não foi removido: <?=$msg?></p>
<?php
}

?>