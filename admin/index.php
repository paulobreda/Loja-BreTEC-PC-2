<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Loja Virtual - BreTEC PC </title>
<link rel="stylesheet" href="estilos.css">
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/abas.js"></script>
</head>
<body>
    <div id="Principal">
        <div id="cabecalho">
            <?php include_once('cabecalho.php'); ?>
        </div><!--fim topo -->
       
        <div id="corpo">
            <nav id="esquerdo">
                <?php include_once('menu.php'); ?>
            </nav>

            <div id="direito">
                <?php
                    @$link = $_GET['link'];

                    $pag[1] = 'home.php';
                    $pag[2] = 'lst/lst_categorias.php';
                    $pag[3] = 'frm/frm_categorias.php';
                    $pag[4] = 'lst/lst_subcategorias.php';
                    $pag[5] = 'frm/frm_subcategorias.php';
                    $pag[6] = 'lst/lst_consolas.php';
                    $pag[7] = 'frm/frm_consolas.php';
                    $pag[8] = 'lst/lst_genero.php';
                    $pag[9] = 'frm/frm_genero.php';
                    $pag[10] = 'lst/lst_banner.php';
                    $pag[11] = 'frm/frm_banner.php';
                    $pag[12] = 'lst/lst_administradores.php';
                    $pag[13] = 'frm/frm_administradores.php';
                    $pag[14] = 'lst/lst_produtos.php';
                    $pag[15] = 'frm/frm_produtos.php';


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
            </div>
        </div>
</body>
</html>