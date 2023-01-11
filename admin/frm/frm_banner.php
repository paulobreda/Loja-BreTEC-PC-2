<?php
	@$acao = $_GET["acao"];
	@$id   = $_GET["id"];

	if($acao !="" ){
	
		include_once("./classes/DadosDoBanco.php");
		$dados = new DadosBanner();
		$dados->setId($id);
		$dados->mostrarBanner();
		
		$txt_id = $dados-> getId();
		$txt_titulo 	= $dados-> getTitulo();
		$txt_alt = $dados-> getAlt();
		$txt_url = $dados-> getUrl();
		$txt_activo = $dados-> getActivo();
		$txt_imagem = $dados-> getImagem();
	

	}

?>

<div id="formulario">
	<h2> Registo de Banner </h2>
	<form action="./op/op_banner.php" method="post" enctype="multipart/form-data">
	
		<label class="imagem">
			<span class="titulo">Selecione uma imagem </span>
			<input type="file" name="img" >
		</label>
		
		<label>
			<span class="titulo">Título do Banner </span>
			<input type="text" name="txt_titulo" id="txt_titulo" value="<?php echo @$txt_titulo ?>">
		</label>
		<label>
			<span class="titulo">Alt do Banner </span>
			<input type="text" name="txt_alt" id="txt_alt" value="<?php echo @$txt_alt ?>">
		</label>
		<div class="dois-campos">
			<label>
				<span class="titulo">url </span>
				<input type="text" name="txt_url" id="txt_url" value="<?php echo @$txt_url ?>">
			</label>
			<label>
				<span class="titulo">Activo </span>
				<select name="txt_ativo" id="txt_ativo">
					<option value="S" <?php if(@$txt_ativo=="S")echo "selected" ?>> Sim </option>
					<option value="N" <?php if(@$txt_ativo=="N")echo "selected" ?>> Não </option>
					
				</select>
			</label>
		</div>
		
		<input type="hidden" name="nome_imagem" value="<?php  echo $nome_imagem; ?>" />
		<input type="hidden" name="id" value="<?php  echo $id; ?>" />
		<input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		
	</form>


</div>