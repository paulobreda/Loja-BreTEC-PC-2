<?php 

	include_once('./classes/Lista.php');	
	$lista = new Lista();
	$lista->setNumPagina (@$_GET['pg']);
	$lista->setUrl('index.php?link=12');
	
?>

<h2> Lista de Administradores </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>Id </th>
			<th>Nome de Utilizador </th>
			<th>Email </th>
			<th>Login</th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php $lista->listaAdministradores();	?>
		
		<tr>
			<td colspan="6"><?php  $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>