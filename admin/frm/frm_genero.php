<?php
	@$acao = $_GET["acao"];
	@$id	  = $_GET["id"];

	if($acao !=""){
	
		include_once("./classes/DadosDoBanco.php");
		$dados = new DadosGenero();
		$dados->setId($id);
		$dados->mostrarGenero();
		
		$txt_titulo = $dados-> getCategoria();
		$txt_ordem 	= $dados-> getOrdemCategoria();
		$txt_ativo = $dados-> getAtivo();		
	
	}

?>

<div id="formulario">
	<h2> Registo de Géneros </h2>
	<form action="./op/op_genero.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Géneros </span>
			<input type="text" name="txt_titulo" id="txt_titulo" value="<?php echo @$txt_titulo ?>">
		</label>
		
		<div class="dois-campos">
			<label>
				<span class="titulo">Ordem dos Géneros </span>
				<input type="text" name="txt_ordem" id="txt_ordem" value="<?php echo @$txt_ordem ?>">
			</label>
			<label>
				<span class="titulo">Géneros Activos </span>
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