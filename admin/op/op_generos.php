<?php
	include_once('../classes/manipulacaoDeDados.php');

	$cat = new manipulacaoDeDados();
	$cat->setTabela('género');


	$txt_titulo = $_POST['txt_titulo'];
	$txt_ordem 	= $_POST['txt_ordem'];
	$txt_ativo = $_POST['txt_ativo'];


	$cat ->setCampos("generos, ordem_genero, generos_activos");
	$cat ->setDados(" '$txt_titulo', '$txt_ordem', '$txt_ativo' ");
	$cat-> inserir();

	echo $cat->getMsg();

?>