<?php require_once 'database.php'; ?>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin/estilos.css">
    <!--Material Design Iconic Font-->
    <link rel="stylesheet" href="material-design/css/material-design-iconic-font.min.css">


    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Hind|Oxygen" rel="stylesheet" />
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Flat Menu JS-->
    <script src="js/flat-menu.js"></script>

    <!--Flat Menu CSS-->
    <link rel="stylesheet" href="CSS/flat-menu.css" />
    <link rel="stylesheet" href="CSS/skins.css" />


    <!--Demo Only-->
    <script src="demo/demo.js"></script>
    <link rel="stylesheet" href="demo/" />

    </head>

    <body>
<!--Navigation Start-->
<aside class="side-bar default-skin">

<div class="nav-container">
<ul class="menu-side-icons">

<li class="home">
<a href="#home_link"> <i class="zmdi zmdi-home forside"></i></a> </li>
<li class="lists"> <i class="zmdi zmdi-view-list forside"></i> </li>
<li class="widgets"> <i class="zmdi zmdi-widgets forside"></i> </li>
<li class="devices"> <i class="zmdi zmdi-devices forside"></i> </li>
<li class="profile"> <i class="zmdi zmdi-account forside"></i> </li>
<li class="notify"> <i class="zmdi zmdi-notifications forside"></i>
    <span class="notify-badge"></span>
</li>
<li><a href="#blog-link"> <i class="zmdi zmdi-view-web forside"></i> </a></li>
<ul>
</div>
</aside>

<div class="flat-menu default-skin">
<nav class="lists-items">
<ul>
   <li><a href="#1">  </a> </li>
         <!--Dropdown-->
   <li class="has-sub"> <span class="dropdown-heading"> Item two with dropdown </span> 
     <ul> 
      <li> <a href="#2">sub item 1 </a> </li>
     <li> <a href="#2">sub item 2 </a> </li>
      <li> <a href="#2">sub item 3 </a> </li>
     <li> <a href="#2">sub item 4 </a> </li>
      <li> <a href="#2">sub item 5 </a> </li>
     <li> <a href="#2">sub item 6 </a> </li>
     </ul> 
 </li>
<li class="has-sub"> <span class="dropdown-heading"> Item three with dropdown </span> 
     <ul> 
      <li> <a href="#2">sub item 1 </a> </li>
     <li> <a href="#2">sub item 2 </a> </li>
      <li> <a href="#2">sub item 3 </a> </li>
     <li> <a href="#2">sub item 4 </a> </li>
     </ul> 
 </li>
   <li> <a href="#1"> Item three </a> </li>
   <li> <a href="#1"> Item four </a> </li>
   <li> <a href="#1"> Item five </a> </li>
   <li> <a href="#1"> Item six </a> </li>

</ul>
</nav> <!--//lists-items-->

<nav class="widget-items">
<ul>
  <li> Widget Item 1 </li>
  <li> Widget Item 2 </li>
  <li> Widget Item 3 </li>
  <li> Widget Item 4 </li>
  <li> Widget Item 5 </li>
  <li> Widget Item 6 </li>
  <li> Widget Item 7 </li>
  <li> Widget Item 8 </li>
  <li> Widget Item 9 </li>
  <li> Widget Item 10 </li>
  <li> Widget Item 11 </li>
  <li> Widget Item 12 </li>
  <li> Widget Item 13 </li>
  <li> Widget Item 14 </li>
  <li> Widget Item 15 </li>
</ul>
</nav>  <!--//widget-items-->
<nav class="devices-items">
<p> You can put anything here... </p>
</nav>
  
<nav class="notify-items">
<ul class="notification">
<li> 
<a href="#5"> Here is a most recent notice</a>
    <time class="ago"> a moment ago... </time> 
   
</li> 
<li> 
<a href="#5"> Notification item two </a>
<time class="ago"> 1 minute ago... </time> 
</li> 

<li> 
<a href="#5"> Notification item three </a>
<time class="ago"> 5 minutes ago... </time> 
</li> 
<li>
<a href="#5"> This is fourth notification </a>
<time class="ago"> 15 minutes ago... </time> 
</li> 
<li> 
<a href="#5"> Older notification </a>
<time class="ago">  a day ago... </time> 
</li> 

</ul>
</nav> <!--//notify-items-->

<nav class="profile-contents">
<p> User Profile Goes Here... </p>


</nav> <!--//profile-contents-->

</div> <!--//flat-menu-->


<!--Navigation Ended-->

<div id="corpo-loja">
    <aside class="banner">
        <img src="Imagens/banner-assistencia-especializada.png" alt="banner">
    </aside>

    <section class="categorias">
        <h2 class="fundo_principal">Categorias</h2>
        
        <?php
        $stmt = $conn->prepare('SELECT * FROM categorias');
        $stmt->execute();
        ?>
        <header></header>
        <input type="checkbox" id="check">
            <label for="check" class="icon-menu">Menu</label>
            <nav class="menu">
            <?php while($menu1 = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <ul>
                    <li class="fundo_principal"><?php echo $menu1->categoria; ?></li>
                </ul>
                    
            <ul class="fundo_branco">
                <li>Produto 1</li>
                <li>Produto 2</li>
                <li>Produto 3</li>
                <li>Produto 4</li>
            </ul>
            <?php } ?>
        </nav>
    </section>

    <div id="lado-direito">
        <h3 class="titulo fundo_principal">Lista de Produtos</h3>
        <section class="montra">
            <h2>Categoria do Produto</h2>
            <ul>
                <li>
                    <a href="#">
                        <figure>
                            <img src="Imagens/Kingston-8GB.png" alt="Memórias">
                            <figcaption>KINGSTON - 8GB 3200MHz DDR4 CL16 DIMM FURY Beast RGB</figcaption>
                        </figure>
                        <span>€39,99</span>
                        <form action="">
                            <input type="submit" value="">
                        </form>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <figure>
                            <img src="Imagens/Lenovo-Portátil_L.png" alt="Portáteis">
                            <figcaption>LENOVO - portátil LENOVO IdeaPad 3 Chromebook 15.6P 15IJL6-762 N4500 8GB 128GB Chrome OS</figcaption>
                        </figure>
                        <span>€ 299,99</span>
                        <form action="">
                            <input type="submit" value="">
                        </form>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <figure>
                            <img src="Imagens/Portatil_Asus.png" alt="Portáteis">
                            <figcaption>Portatil Asus E510MA-N4BHDPE1 INTEL CELERON N4020, 15.6", 4GB DDR4, 128GB W10P</figcaption>
                        </figure>
                        <span>€ 299,99</span>
                        <form action="">
                            <input type="submit" value="">
                        </form>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <figure>
                            <img src="Imagens/Caixa_PC.png" alt="Portáteis">
                            <figcaption>Caixa ATX Nox Hummer Fusion RGB</figcaption>
                        </figure>
                        <span>€ 299,99</span>
                        <form action="">
                            <input type="submit" value="">
                        </form>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <figure>
                            <img src="Imagens/Processador_AMD.png" alt="Portáteis">
                            <figcaption>Processador AMD Ryzen 5 5600X 6-Core 3.7GHz c/ Turbo 4.6GHz 35MB SktAM4</figcaption>
                        </figure>
                        <span>€ 299,99</span>
                        <form action="">
                            <input type="submit" value="">
                        </form>

                    </a>
                </li>
            </ul>
        </section>
    </div>

</div>