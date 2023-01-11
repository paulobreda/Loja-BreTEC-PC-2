<?php 

	include_once('./classes/Lista.php');	
	$lista = new Lista();
	$lista->setNumPagina (@$_GET['pg']);
	$lista->setUrl('index.php?link=14');
	
?>

<h2> Lista de Produtos </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>ID </th>
			<th>Nome </th>
			<th>Url </th>
			<th>Preço </th>
			<th>Categoria </th>
			<th>Subcategoria </th>
			<th>Consolas </th>
			<th>Género </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php $lista->listaProdutos();	?>
		
		<tr>
			<td colspan="10"><?php  $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>