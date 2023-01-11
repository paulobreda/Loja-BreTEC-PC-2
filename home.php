

<?php require_once 'database.php'; ?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin/estilos.css">
    <meta property="og:url" content="https://somewebmedia.github.io/hc-offcanvas-nav/">
    <meta property="og:image" content="https://somewebmedia.github.io/hc-offcanvas-nav/hc-offcanvas-nav.png">
    <link rel="icon" type="image/png" href="./favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700">
    <link rel="stylesheet" href="demo/demo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/hc-offcanvas-nav.js"></script>
</head>
<body>
<body class="theme-default">
<div id="container">
  <header>
    <div class="wrapper cf">
      <nav id="main-nav">
        <ul class="first-nav">
          <li class="computers">
            <a href="https://www.google.com/search?q=Crypto" rel="noreferrer" target="_blank">Computadores</a>
            <ul>
              <li><a href="#" style="color:aqua;">Computadores </a></li>
              <li><a href="#" class="sub">Desktops</a></li>
              <li><a href="#" class="sub">Portáteis</a></li>
              <li><a href="#" class="sub">Gaming</a></li>
              <li><a href="#" class="sub">Workstations</a></li>
            </ul>
          </li>
          
          <li class="devices">
            <span>Componentes</span>
            <ul>
            <li><a href="#" style="color:aqua;">Componentes Hardware </a></li>

              <li class="processor">
                <a href="#">Processadores</a>
                <ul>
                  <li><a href="#" class="sub">Intel</a></li>
                  <li><a href="#" class="sub">AMD</a></li>
                </ul>
              </li>

              <li class="motherboard">
                <a href="#">Motherboards</a>
                <div class="subnav-container">
                  <ul>
                    <li><a href="#" class="sub">Intel</a></li>
                    <li><a href="#" class="sub">AMD</a></li>
                  </ul>
                </div>
              </li>

              <li class="graphics">
                <a href="#" >Placas Gráficas</a>
                <ul>
                  <li><a href="#" class="sub">NVIDIA</a></li>
                  <li><a href="#" class="sub">AMD</a></li>
                </ul>
              </li>

              <li class="memory">
                <a href="#" >Memória RAM</a>
                <ul>
                <li><a href="#" class="sub">Memória RAM DDR5</a></li>
                  <li><a href="#" class="sub">Memória RAM DDR4</a></li>
                  <li><a href="#" class="sub">Memória RAM DDR3 / DDR2 / DDR</a></li>
                  <li><a href="#" class="sub">Memória RAM SO-DIMM (Para Portáteis)</a></li>
                </ul>

                <li class="power">
                <a href="#" >Fontes Alimentação</a>
              </li>

              <li class="boxes">
                <a href="#" >Caixas</a>
                <ul>
                <li><a href="#" class="sub">E-ATX</a></li>
                  <li><a href="#" class="sub">ATX</a></li>
                  <li><a href="#" class="sub">Micro-ATX</a></li>
                  <li><a href="#" class="sub">Mini-ITX</a></li>
                </ul>

                <li class="sound">
                <a href="#" >Placas de Som</a>
                <ul>
                  <li><a href="#" class="sub">Internas</a></li>
                  <li><a href="#" class="sub">Externas</a></li>
                </ul>

                <li class="drives">
                <a href="#" >Drives</a>
                <ul>
                  <li><a href="#" class="sub">Blu-Ray</a></li>
                  <li><a href="#" class="sub">DVD-RW</a></li>
                </ul>
              </li>
            </ul>
            
          <li class="peripherals">
            <a href="#">Periféricos</a>
            <ul>
            <li><a href="#" style="color:aqua;">Periféricos </a></li>

            <li class="monitors">
                <a href="#">Monitores</a>
                <ul>
                  <li><a href="#" class="sub">120Hz</a></li>
                  <li><a href="#" class="sub">144Hz</a></li>
                  <li><a href="#" class="sub">240Hz</a></li>
                  <li><a href="#" class="sub">360Hz</a></li>
                  <li><a href="#" class="sub">ASUS ProArt</a></li>
                  <li><a href="#" class="sub">Office</a></li>
                </ul>
              </li>

              <li class="keyboard">
                <a href="#">Teclados e Ratos</a>
                <ul>
                  <li><a href="#" class="sub">Teclados</a></li>
                  <li><a href="#" class="sub">Ratos</a></li>
                </ul>

                <li class="headset">
                <a href="#">Headsets</a>
                <ul>
                  <li><a href="#" class="sub">Headsets Wireless</a></li>
                </ul>  
                            
                <li class="bundles">
                <a href="#">Bundles Gaming</a>
                <ul>
                  <li><a href="#" class="sub">Bundles Gaming</a></li>
                </ul>              
                
                <li class="chairs">
                <a href="#">Cadeiras Gaming</a>
                <ul>
                  <li><a href="#" class="sub">Cadeiras</a></li>
                  <li><a href="#" class="sub">Tapetes Cadeira</a></li>
                </ul>              
                
                <li class="joysticks">
                <a href="#" >Joysticks e Simuladores Gaming</a>
                <ul>
                <li><a href="#" class="sub">Volantes</a></li>
                  <li><a href="#" class="sub">Joysticks</a></li>
                  <li><a href="#" class="sub">Gamepads</a></li>
                  <li><a href="#" class="sub">Arcade</a></li>
                </ul>
                              
                <li class="webcam">
                <a href="#">Webcams</a>
                <ul>
                  <li><a href="#" class="sub">Webcams de Videoconferência</a></li>
                </ul>

                <li class="printer">
                <a href="#" >Impressoras e Consumíveis</a>
                <ul>
                <li><a href="#" class="sub">Impressoras Jacto de Tinta</a></li>
                  <li><a href="#" class="sub">Impressoras Laser</a></li>
                  <li><a href="#" class="sub">Impressoras Grande Formato</a></li>
                  <li><a href="#" class="sub">Leitores Códigos de Barras</a></li>
                  <li><a href="#" class="sub">Tinteiros</a></li>
                  <li><a href="#" class="sub">Toners</a></li>
                  <li><a href="#" class="sub">Papel de Impressão</a></li>
                </ul>   

                <li class="pos">
                <a href="#" >POS</a>
                <ul>
                <li><a href="#" class="sub">Scanners</a></li>
                  <li><a href="#" class="sub">Impressoras POS</a></li>
                  <li><a href="#" class="sub">Balanças</a></li>
                  <li><a href="#" class="sub">Gavetas de Dinheiro</a></li>
                  <li><a href="#" class="sub">Visor Cliente</a></li>
                </ul>

                <li class="energy">
                <a href="#" >Energia</a>
                <ul>
                <li><a href="#" class="sub">UPS</a></li>
                  <li><a href="#" class="sub">Tomadas</a></li>
                  <li><a href="#" class="sub">Baterias</a></li>
                  <li><a href="#" class="sub">Acessórios</a></li>
                </ul>
                
              
            </ul>
          </li>
          <li class="storage">
            <a href="#">Armazenamento</a>
            <ul>
            <li><a href="#" style="color:aqua;">Armazenamento </a></li>

            <li class="internal">
                <a href="#">Armazenamento Interno</a>
                <ul>
                  <li><a href="#" class="sub">Discos SSD</a></li>
                  <li><a href="#" class="sub">Discos HDD</a></li>
                </ul>  
              </li>
              <li class="external">
                <a href="#">Armazenamento Externo</a>
                <ul>
                  <li><a href="#" class="sub">Discos SSD</a></li>
                  <li><a href="#" class="sub">Discos HDD</a></li>
                </ul>  
              </li>   

              <li class="docking">
                <a href="#" >Caixas Externas e Docking Stations</a>
                <ul>
                  <li><a href="#" class="sub">Caixas Externas 2.5"</a></li>
                  <li><a href="#" class="sub">Caixas externas 3.5"</a></li>
                  <li><a href="#" class="sub">Caixas Externas M.2</a></li>
                  <li><a href="#" class="sub">Docking Stations</a></li>
                </ul>    
              </li>         

                <li class="net">
                <a href="#">Armazenamento de Rede</a>
                <ul>
                  <li><a href="#" class="sub">NAS</a></li>
                  <li><a href="#" class="sub">Acessórios</a></li>
                </ul>  
              </li>    

              <li class="cards">
                <a href="#">Cartões de Memória</a>
              </li> 

              <li class="pens">
                <a href="#">Pens USB</a>
              </li>  
              
              <li class="reader">
                <a href="#">Leitores de Cartões</a>
                <ul>
                  <li><a href="#" class="sub">Leitores de Cartões de Cidadão</a></li>
                  <li><a href="#" class="sub">Leitores de Cartões de Memória</a></li>
                </ul>  
              </li>    
              </li>
            </ul>
          </li>
        </ul>

        <ul class="second-nav">
          <li class="consoles">
                <a href="#" >Consolas</a>
                <ul>
                <li><a href="#" style="color:aqua;">Consolas </a></li>

          <li class="xbox">
            <a href="#">Xbox</a>
          </li> 

          <li class="playstation">
            <a href="#">Playstation</a>
          </li> 

          <li class="nintendo">
            <a href="#">Nintendo</a>
          </li> 

          <li class="pads">
            <a href="#">Comandos</a>
          </li> 

          <li class="games">
            <a href="#">Jogos</a>
          </li> 
          </ul>    
          </li>                 
              
              <li class="cooling">
                <a href="#" >Modding/Cooling</a>
                <ul>
                <li><a href="#" style="color:aqua;">Modding/Cooling </a></li>

                <li class="watercooling">
                  <a href="#">Watercooling</a>
                </li> 

                <li class="aircooling">
                  <a href="#">Aircooling</a>
                </li>

                <li class="thermal">
                  <a href="#">Massas Térmicas</a>
                </li>

                <li class="fans">
                  <a href="#">Ventoinhas</a>
                </li>

                <li class="coolers">
                  <a href="#">Coolers para Portáteis</a>
                </li>

                <li class="kit">
                  <a href="#">Kit Ferramentas</a>
                </li>

                <li class="organization">
                  <a href="#">Organização</a>
                </li>
                </ul>    
              </li>                           
              
              <li class="signal">
                <a href="#" >Redes/Comunicação</a>
                <ul>
                <li><a href="#" style="color:aqua;">Redes/Comunicação</a></li>
                
              <li class="routers">
                <a href="#">Routers</a>
                <ul>
                  <li><a href="#" class="sub">Sistema Mesh</a></li>
                </ul>      
              </li>

              <li class="switches">
                <a href="#">Switches</a>
                <ul>
                  <li><a href="#" class="sub">Acessórios</a></li>
                </ul>  
              </li>    

              <li class="network">
                <a href="#">Placas de Rede</a>
                <ul>
                  <li><a href="#" class="sub">Placa de Rede PCIe</a></li>
                  <li><a href="#" class="sub">Placa de Rede USB</a></li>
                </ul>  
              </li>   

              <li class="kvms">
                <a href="#">KVMs</a>
                <ul>
                  <li><a href="#" class="sub">Acessórios</a></li>
                </ul>  
              </li>    

              <li class="powerlines">
                  <a href="#">Powerlines</a>
                </li>

              <li class="access">
                  <a href="#">Access Points / Repetidores</a>
              </li>

              <li class="bluetooth">
                  <a href="#">Adaptadores Bluetooth</a>
              </li>
                </ul>

              <li class="software">
                <a href="#" >Software</a>
                <ul>
                <li><a href="#" style="color:aqua;">Software</a></li>

              <li class="operative">
                  <a href="#">Sistemas Operativos</a>
              </li>

              <li class="office">
                  <a href="#">Microsoft Office</a>
              </li>

              <li class="security">
                  <a href="#">Segurança</a>
              </li>
          </li>
        </ul>

        <li class="cables">
          <a href="#" >Cabos e Adaptadores</a>
            <ul>
        <li><a href="#" style="color:aqua;">Cabos e Adaptadores</a></li>

        <li class="hdmi">
          <a href="#">Cabos HDMI</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>    

        <li class="displayport">
          <a href="#">Cabos DisplayPort</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>   
        
        <li class="mini">
          <a href="#">Cabos Mini DisplayPort</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>   

        <li class="dvi">
          <a href="#">Cabos DVI</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>   

        <li class="vga">
          <a href="#">Cabos VGA</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>   

        <li class="usb">
          <a href="#">Cabos USB</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li> 
        
        <li class="usbc">
          <a href="#">Cabos USB-C</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li> 

        <li class="rj45">
          <a href="#">Cabos RJ45</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li> 

        <li class="sata">
          <a href="#">Cabos SATA</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li> 

        <li class="jack">
          <a href="#">Cabos Jack 3.5mm</a>
            <ul>
        <li><a href="#" class="sub">Adaptadores</a></li>
            </ul>  
        </li>
        </ul>

        <ul class="bottom-nav">
          <li class="github">
            <a href="https://github.com/somewebmedia" rel="noreferrer" target="_blank">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
          </li>
          <li class="email">
            <a href="mailto:somewebmedia@gmail.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            </a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/somewebguy" rel="noreferrer" target="_blank">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.881 8.948c-.773-4.085-4.859-4.593-4.859-4.593H.723c-.604 0-.679.798-.679.798s-.082 7.324-.022 11.822c.164 2.424 2.586 2.672 2.586 2.672s8.267-.023 11.966-.049c2.438-.426 2.683-2.566 2.658-3.734 4.352.24 7.422-2.831 6.649-6.916zm-11.062 3.511c-1.246 1.453-4.011 3.976-4.011 3.976s-.121.119-.31.023c-.076-.057-.108-.09-.108-.09-.443-.441-3.368-3.049-4.034-3.954-.709-.965-1.041-2.7-.091-3.71.951-1.01 3.005-1.086 4.363.407 0 0 1.565-1.782 3.468-.963 1.904.82 1.832 3.011.723 4.311zm6.173.478c-.928.116-1.682.028-1.682.028V7.284h1.77s1.971.551 1.971 2.638c0 1.913-.985 2.667-2.059 3.015z"/></svg>
            </a>
          </li>
        </ul>

      </nav>

      <a class="toggle" href="#">
        <span></span>
       
        
      </a>

    </div>

  </header>

  <main>

    
  <script>
    (function($) {
      'use strict';

      // call our plugin
      var Nav = new hcOffcanvasNav('#main-nav', {
        disableAt: false,
        customToggle: '.toggle',
        levelSpacing: 40,
        navTitle: 'Menu Principal',
        levelTitles: true,
        levelTitleAsBack: true,
        pushContent: '#container',
        labelClose: false
      });

      // add new items to original nav
      $('#main-nav').find('li.add').children('a').on('click', function() {
        var $this = $(this);
        var $li = $this.parent();
        var items = eval('(' + $this.attr('data-add') + ')');

        $li.before('<li class="new"><a href="#">'+items[0]+'</a></li>');

        items.shift();

        if (!items.length) {
          $li.remove();
        }
        else {
          $this.attr('data-add', JSON.stringify(items));
        }

        Nav.update(true); // update DOM
      });

      // demo settings update

      const update = function(settings) {
        if (Nav.isOpen()) {
          Nav.on('close.once', function() {
            Nav.update(settings);
            Nav.open();
          });

          Nav.close();
        }
        else {
          Nav.update(settings);
        }
      };

      $('.actions').find('a').on('click', function(e) {
        e.preventDefault();

        var $this = $(this).addClass('active');
        var $siblings = $this.parent().siblings().children('a').removeClass('active');
        var settings = eval('(' + $this.data('demo') + ')');

        if ('theme' in settings) {
          $('body').removeClass().addClass('theme-' + settings['theme']);
        }
        else {
          update(settings);
        }
      });

      $('.actions').find('input').on('change', function() {
        var $this = $(this);
        var settings = eval('(' + $this.data('demo') + ')');

        if ($this.is(':checked')) {
          update(settings);
        }
        else {
          var removeData = {};
          $.each(settings, function(index, value) {
            removeData[index] = false;
          });

          update(removeData);
        }
      });
    })(jQuery);
  </script>

</div>
<div id="corpo-loja">
    <aside class="banner">
        <img src="Imagens/banner-assistencia-especializada.png" alt="banner">
    </aside>

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



</body>
</html>
