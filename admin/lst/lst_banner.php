<?php 

	include_once('./classes/Lista.php');	
	$lista = new Lista();
	$lista->setNumPagina (@$_GET['pg']);
	$lista->setUrl('index.php?link=10');
	
?>

<h2> Lista de Banners </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>ID </th>
			<th>Titulo </th>
			<th>Activo </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php $lista->listaBanner();	?>
		
		<tr>
			<td colspan="5"><?php  $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>