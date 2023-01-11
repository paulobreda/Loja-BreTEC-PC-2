<?php
	include_once('../classes/manipulacaoDeDados.php');
	include_once("../biblio.php");

	$acao = $_POST["acao"];
	$id	  = $_POST["id"];

	$cat = new manipulacaoDeDados();
	$cat->setTabela('produtos');

	$txt_id_categoria = $_POST['txt_id_categoria'];
    $txt_produto      = $_POST['txt_produto'];
    $txt_imagem       = $_POST['txt_imagem'];
	$txt_url 	      = $_POST['txt_url'];
	$txt_preco        = $_POST['txt_preco'];
	$txt_activo       = $_POST['txt_activo'];

	$imagem		    = $_FILES["img"];
	$txt_nomeimagem = $_POST["nome_imagem"];


	/***************************UPLOAD************************/


	if($imagem['name']!=""){	
		
		$pasta = '../fotos';
		$permitido = array('image/jpg','image/jpeg','image/pjpeg');				
		
		$tmp =  $imagem['tmp_name'];
		$name = $imagem['name'];
		$type = $imagem['type'];	
		
		$txt_nomeimagem = 'bn-'.md5(uniqid(rand(), true)).'.jpg';
		
		if(!empty($name) && in_array($type, $permitido)){				
			
			upload_jpg($tmp, $txt_nomeimagem, 940, $pasta);						
		}elseif($type=='image/png'){			
			upload_png($tmp, $txt_nomeimagem, 940, $pasta);
			
		}elseif($type=='image/gif'){			
			upload_gif($tmp, $txt_nomeimagem, 940, $pasta);	
		}
	};	
	/***************************UPLOAD************************/

    if($acao=="Inserir"){
		$cat ->setCampos("id_categoria, nome, url_imagem, preco");
		$cat ->setDados(" '$txt_id_categoria', '$txt_produto', '$txt_url', '$txt_preco' ");
		$cat-> inserir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=14' </script>";
	}

	if($acao=="Alterar"){
		$cat ->setcampos("nome = '$txt_produto', url_imagem = '$txt_url', preco = '$txt_preco'");
		$cat ->setValorNaTabela("id_produto");
		$cat ->setValorPesquisa($id);
		$cat ->alterar();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=14' </script>";
	}

	if($acao=="Excluir"){
		$cat ->setValorNaTabela("id_produto");
		$cat ->setValorPesquisa("$id");
		$cat ->excluir();

		echo "<script type= 'text/javascript'> location.href='../index.php?link=14' </script>";
	}

?>