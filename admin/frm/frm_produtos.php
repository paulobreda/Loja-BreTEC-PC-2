<?php
	include_once("./classes/DadosDoBanco.php");
	@$acao = $_GET["acao"];
	@$id	  = $_GET["id"];

	if($acao !=""){
	
		
		$dados = new DadosProdutos();
		$dados->setId($id);
		$dados->mostrarProdutos();
		
		$txt_id_categoria = $dados-> getId();
		$txt_id_subcategorias = $dados-> getId();
		$txt_id_consolas = $dados-> getId();
		$txt_id_genero = $dados-> getId();
		$txt_nome_produto = $dados-> getNome_produto();
        $txt_imagem = $dados-> getImagem();
		$txt_url 	= $dados-> getUrl();
		$txt_preco = $dados-> getPreco();		
	
	}

?>

<div id="formulario">
	<h2> Registo de Produtos </h2>
	<form action="./op/op_produtos.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Nome do Produto </span>
			<input type="text" name="txt_nome_produto" id="txt_nome_produto" value="<?php echo @$txt_nome_produto ?>">
		</label>
		
			<label>
			    <span class="titulo">Selecione uma categoria </span>
				<select name="txt_id_categoria" id="txt_id_categoria">
					<?php
						$cb = new DadosCategoria();
						$cb->comboCategoria($txt_id_categoria);
					?>
				</select>
		    </label>

			<label>
			    <span class="titulo">Selecione uma subcategoria </span>
				<select name="txt_id_subcategoria" id="txt_id_categoria">
					<?php
						$cb = new DadosSubcategoria();
						$cb->comboSubcategoria($txt_id_categoria);
					?>
				</select>

			<label>
			    <span class="titulo">Selecione uma consola </span>
				<select name="txt_id_consolas" id="txt_id_consolas">
					<?php
						$cb = new DadosConsola();
						$cb->comboConsolas($txt_id_consolas);
					?>
				</select>
		    </label>

			<label>
			    <span class="titulo">Selecione um género </span>
				<select name="txt_id_genro" id="txt_id_genro">
					<?php
						$cb = new DadosGenero();
						$cb->comboGenero($txt_id_genero);
					?>
				</select>
		    </label>

<div class="dois-campos">
			<label class="imagem">
			    <span class="titulo">Selecione uma imagem </span>
				<input type="file" name="img" >
		    </label>

            <label>
				<span class="titulo">Preço do Produto </span>
				<input type="text" name="txt_preco" id="txt_preco" value="<?php echo @$txt_preco ?>">
			</label>

			<label>
				<span class="titulo">Activo </span>
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