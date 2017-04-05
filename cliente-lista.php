<?php
require_once("cabecalho.php");
require_once("banco-livro.php");
?>
<h2>Lista de Clientes</h2>
<table class="table">
	<tr>
			
			<th>Nome</th>
			<th>Saldo</th>
			<th>Limite</th>
			<th>Tipo de Conta</th>
			<th>Alterar</th>
			<th>Excluir</th>
	</tr>
	<?php
	$vetor_cliente=listarCliente ($conexao);
	foreach ($vetor_cliente as $cliente) {
	?>
		
	<tr>
			
			<td><?=$cliente->getNome()?></td>
			<td><?=$cliente->getSaldo()?></td>
			<td><?=$cliente->getTipoConta()?></td>
			<td><?=$cliente->getCategoria()->getNome()?></td>
			<td>
				<form action="cliente-formulario-altera.php" method="get">
					<input type="hidden" name="id" value="<?=$cliente->getId()?>">
					<button class="btn btn-success">Alterar</button>
				</form>
			</td>
			<td>
				<form action="remove-cliente.php" method="post">
					<input type="hidden" name="id" value="<?=$cliente->getId()?>">
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
	</tr>	
<?php
	}
?>
</table>
	
<?php
require_once("rodape.php");?>