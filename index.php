<?php
    include_once("admin/classes/DadosDoBanco.php");
    $categoria = new DadosCategoria();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Loja Virtual - BreTEC PC </title>
<link rel="stylesheet" href="css/estilo.css">
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/abas.js"></script>
</head>
<body>
    <div id="Principal">
        <section id="cabecalho">
            <?php include_once("cabecalho.php"); ?>
        </section><!--fim topo -->

        <section id="corpo">
        <?php
                    @$link = $_GET['link'];

                    $pag[1] = 'home.php';
                    $pag[2] = 'detalhePro.php';
                    
                    if (!empty($link)){
                        if(file_exists($pag[$link]))
                        {
                            include $pag[$link];
                        }
                        else
                        {
                            include 'home.php';
                        }

                    } else{
                        include 'home.php';
                    }
                ?>
        </section><!--fim corpo -->

        <footer id="rodape">
            <?php include_once("rodape.php"); ?>
        </footer><!--fim rodape -->

    </div><!--fim principal -->
</body>