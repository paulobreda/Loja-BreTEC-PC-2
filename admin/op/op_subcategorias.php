<?php
	include_once('../classes/manipulacaoDeDados.php');

	$cat = new manipulacaoDeDados();
	$cat->setTabela('subcategorias');


	$txt_titulo = $_POST['txt_titulo'];
	$txt_ordem 	= $_POST['txt_ordem'];
	$txt_ativo = $_POST['txt_ativo'];


	$cat ->setCampos("subcategoria, ordem_subcategoria, activo_subcategoria");
	$cat ->setDados(" '$txt_titulo', '$txt_ordem', '$txt_ativo' ");
	$cat-> inserir();

	echo $cat->getMsg();

?>