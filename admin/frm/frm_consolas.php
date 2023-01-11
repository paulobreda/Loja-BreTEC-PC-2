<?php
	@$acao = $_GET["acao"];
	@$id	  = $_GET["id"];

	if($acao !=""){
	
		include_once("./classes/DadosDoBanco.php");
		$dados = new DadosConsola();
		$dados->setId($id);
		$dados->mostrarConsolas();
		
		$txt_titulo = $dados-> getCategoria();
		$txt_ordem 	= $dados-> getOrdemCategoria();
		$txt_ativo = $dados-> getAtivo();		
	
	}

?>

<div id="formulario">
	<h2> Registo de Consolas </h2>
	<form action="./op/op_consolas.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Nome da Consola </span>
			<input type="text" name="txt_titulo" id="txt_titulo" value="<?php echo @$txt_titulo ?>">
		</label>
		
		<div class="dois-campos">
			<label>
				<span class="titulo">Ordem da Consola </span>
				<input type="text" name="txt_ordem" id="txt_ordem" value="<?php echo @$txt_ordem ?>">
			</label>
			<label>
				<span class="titulo">Activo da Consola </span>
				<select name="txt_ativo" id="txt_ativo">
					<option value="S" <?php if(@$txt_ativo=="S")echo "selected" ?>> Sim </option>
					<option value="N" <?php if(@$txt_ativo=="N")echo "selected" ?>> Não </option>
					
				</select>
			</label>
		</div>
		
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;} else{echo "Inserir";} ?>"/>
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;} else{echo "Inserir";} ?>" class="botao" />
		
		
	</form>


</div>