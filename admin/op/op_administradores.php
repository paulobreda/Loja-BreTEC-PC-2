<?php
	include_once('../classes/manipulacaoDeDados.php');

	$acao = $_POST["acao"];
	$id = $_POST["id"];

	$cat = new manipulacaoDeDados();
	$cat->setTabela('utilizadores');

	$txt_id = $_POST["txt_id"];
	$txt_nome 	= $_POST["txt_nome"];
	$txt_email 	= $_POST["txt_email"];
	$txt_login 	= $_POST["txt_login"];
	$txt_pass	= $_POST["txt_pass"];

	if($acao=="Inserir"){
		$cat ->setCampos("id_utilizador, nome_utilizador, email, login, password");
		$cat ->setDados(" '$txt_id' '$txt_nome', '$txt_email', '$txt_login', '$txt_pass'");
		$cat-> inserir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=12' </script>";
	}

	if($acao=="Alterar"){
		$cat ->setcampos("id_utilizador = '$txt_id', nome_utilizador = '$txt_nome', email = '$txt_email', login = '$txt_login', password = '$txt_pass'");
		$cat ->setValorNaTabela("id_utilizador");
		$cat ->setValorPesquisa($id);
		$cat ->alterar();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=12' </script>";
	}

	if($acao=="Excluir"){
		$cat ->setValorNaTabela("id_utilizador");
		$cat ->setValorPesquisa("$id");
		$cat ->excluir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=12' </script>";
	}

?>