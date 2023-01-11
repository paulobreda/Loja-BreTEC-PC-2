<?php
	@$acao = $_GET["acao"];
	@$id   = $_GET["id"];

	if($acao !=""){
	
		include_once("./classes/DadosDoBanco.php");
		$dados = new DadosUtilizador();
		$dados->setId($id);
		$dados->mostrarAdministrador();
		
		$txt_nome = $dados-> getNome();
		$txt_email 	= $dados-> getEmail();
		$txt_login  = $dados-> getLogin();		
		$txt_pass = $dados-> getPass();
	
	}

?>

<div id="formulario">
	<h2> Registo de Utilizadores </h2>
	<form action="./op/op_administradores.php" method="post" enctype="multipart/form-data">
		<label>
			<span class="titulo">Nome de Utilizador </span>
			<input type="text" name="txt_nome" id="txt_nome" value="<?php echo @$txt_nome ?>">
		</label>
		
		<div class="dois-campos">
			<label>
				<span class="titulo">Email </span>
				<input type="text" name="txt_email" id="txt_email" value="<?php echo @$txt_email ?>">
			</label>

			<label>
				<span class="titulo">Login </span>
				<input type="text" name="txt_login" id="txt_login" value="<?php echo @$txt_login ?>">
			</label>
			
			<label>
				<span class="titulo">Password </span>
				<input type="password" name="txt_pass" id="txt_pass" value="<?php echo @$txt_pass ?>">
					
				</select>
			</label>
		</div>
		
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;} else{echo "Inserir";} ?>"/>
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;} else{echo "Inserir";} ?>" class="botao" />
		
		
	</form>


</div>