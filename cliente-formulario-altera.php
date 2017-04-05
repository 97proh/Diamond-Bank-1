<?php
require_once("cabecalho.php");
require_once("banco-livro.php");
require_once ("banco-categoria.php");
require_once ("logica-usuario.php");

verificaUsuario();

$id = $_GET['id'];
$Cliente= buscarCliente($conexao, $id);
$vetor_categorias= listarCategorias($conexao);

?>

<h1>Alterando Clientes</h1>
<form action="altera-cliente.php" method="post">
	<input type= "hidden" name="id" value=<?=$Cliente->getId()?>>
 	<table class="table">
 		<?php include("cliente-formulario-base.php");?>
 		<tr>
 			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
 			
 		</tr>
 	</table>
</form>

<?php
require_once("rodape.php");
?>