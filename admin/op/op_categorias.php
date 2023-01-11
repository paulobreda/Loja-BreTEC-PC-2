<?php
	include_once('../classes/manipulacaoDeDados.php');

	$acao = $_POST["acao"];
	$id = $_POST["id"];

	$cat = new manipulacaoDeDados();
	$cat->setTabela('categorias');


	$txt_titulo = $_POST['txt_titulo'];
	$txt_ordem 	= $_POST['txt_ordem'];
	$txt_ativo = $_POST['txt_ativo'];

	if($acao=="Inserir"){
		$cat ->setCampos("categoria, ordem_categoria, activo_categoria");
		$cat ->setDados(" '$txt_titulo', '$txt_ordem', '$txt_ativo' ");
		$cat-> inserir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=2' </script>";
	}

	if($acao=="Alterar"){
		$cat ->setcampos("categoria = '$txt_titulo', ordem_categoria = '$txt_ordem', activo_categoria = '$txt_ativo'");
		$cat ->setValorNaTabela("id_categoria");
		$cat ->setValorPesquisa($id);
		$cat ->alterar();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=2' </script>";
	}

	if($acao=="Excluir"){
		$cat ->setValorNaTabela("id_categoria");
		$cat ->setValorPesquisa("$id");
		$cat ->excluir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=2' </script>";
	}
	

	

?>


