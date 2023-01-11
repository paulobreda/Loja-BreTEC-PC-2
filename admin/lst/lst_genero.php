<?php 

	include_once('./classes/Lista.php');	
	$lista = new Lista();
	$lista->setNumPagina (@$_GET['pg']);
	$lista->setUrl('index.php?link=8');
	
?>

<h2> Lista de Géneros </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>ID </th>
			<th>Nome </th>
			<th>Activo </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php $lista->listaGenero();	?>
		
		<tr>
			<td colspan="5"><?php  $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>