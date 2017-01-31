<!Doctype html>
<html lang="pt-br">
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAPL - Sistema de Acompanhamento de Processos Licitatórios</title>
    <meta name="description" content="Sistema para acompanhar toda movimentação dos Processos Licitatórios">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <!-- **CSS - stylesheets** -->
    <link id="default-css" rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link id="shortcodes-css" rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
    <link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
    <link id="layer-slider" rel="stylesheet"  href="css/layerslider.css" media="all" />

    <!-- **Additional - stylesheets** -->
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/animations.css" type="text/css" media="all" />


    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <meta name="author" content="FSS Entretenimentos" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="SAPL &mdash; Sistema de Acompanhamento de Processos Licitatórios"/>
    <meta property="og:image" content="http://sispub.com.br/sapl/images/facebook.jpg"/>
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://www.sispub.com.br/sapl/"/>
    <meta property="og:site_name" content="SAPL &mdash; Sistemas de Acompanhamento de Processos Licitatórios"/>
    <meta property="article:section" content="Sistemas Públicos de Gestão">
    <meta property="og:image:type" content="image/jpg">
    <meta property="article:tag" content="Ouvidoria, Esic, Portal de Notícias, Portal da Transparência, Transparência Pùblica, E-Sic, Software Público, responsivo, atendimento, cidadão, Prefeituras, Prefeitura, Município, Câmara Municipal">
    <meta property="og:description" content="Uma empresa voltada para diminuir a distãncia entre o povo e a Gestão Pública."/>
    <meta name="twitter:title" content="SisPUB &mdash; Sistemas Públicos de Gestão" />
    <meta name="twitter:image" content="http://sispub.com.br/sapl/images/twitter.jpg" />
    <meta name="twitter:url" content="@sapl" />
    <meta name="twitter:card" content="summary_large_image" />

</head>

<body>
<div class="wrapper">
    <div class="inner-wrapper">

        <!-- **Top Bar** -->
        <div class="top-bar">
            <!-- **container - Starts** -->
            <div class="container">
                <!-- **top-menu - Starts** -->
                <ul class="top-menu">
                    <li> <i class="fa fa-phone"></i>  Dúvidas? Ligue para: <span> (99) 3551-2219 </span></li>
                </ul> <!-- **top-menu - End** -->
                <!-- **top-right - Starts** -->
            </div> <!-- **container - End** -->
        </div> <!-- **Top Bar - End** -->

        <div id="header-wrapper">
            <!-- **Header** -->
            <header class="header">
                <div class="container">

                    <!-- **Logo - End** -->
                    <div id="logo">
                        <a href="/sapl" title="Priority"> <img src="images/logo.png" alt="image"/> </a>
                    </div><!-- **Logo - End** -->

                    <div id="menu-container">
                        <!-- **Nav - Starts**-->
                        <nav id="main-menu">
                            <div id="dt-menu-toggle" class="dt-menu-toggle">
                                Menu
                                <span class="dt-menu-toggle-icon"></span>
                            </div>
                            <ul class="menu">
                                <li class="menu-item-simple-parent"><a href="/sapl">Home</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="#">Portal Prefeitura</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="#">Transparência</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="#">E-Sic</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="#">Ouvidoria</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="#">Diário Oficial</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="/sapl/contato.php">Contato</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- **Nav - End**-->
                    </div>

                </div>
            </header><!-- **Header - End** -->
        </div>

        <!-- **Main - Starts** -->
        <div id="main">
            <div class="breadcrumb-wrapper type3">
                <div class="container">
                    <div class="main-title">
                        <h1>Central de Licitações</h1>
                    </div>
                </div>
            </div>
            <div class="intro-text type4">
                <!-- **container - Starts** -->
                <div class="container">
                    <div class="column dt-sc-two-third first">
                        <h2>Portal da Transparência</h2>
                        <p>Clique no Botão ao lado para acessar os dados detalhados sobre a execução orçamentária e financeira do Município, com possibilidade de pesquisar informações por dia e pela fase de despesa (empenho, liquidação ou pagamento). A atualização dos dados é diária.</p>
                    </div>
                    <div class="column dt-sc-one-third">
                        <a class="dt-sc-button large" href="#">Transparência <span class="fa fa-angle-right"></span></a>
                    </div>
                </div> <!-- **container - Ends** -->

            </div>
            <div class="dt-sc-margin100"></div>
            <div class="container">
                @yield('left_col')
                <section id="primary" class="page-with-sidebar with-left-sidebar">
                    @yield('content')
                    <div class="dt-sc-hr-invisible-small"></div>
                </section>
            </div>
            <footer id="footer">
                <div class="footer-widgets-wrapper">
                    <div class="container">
                        <p>Comissão Permanente de Licitação. © 2017 <a href="#">Prefeitura Municipal</a></p>

                    </div>
                </div><!-- **footer-widgets-wrapper - End** -->



            </footer> <!-- **Footer - End** -->

        </div><!-- **inner-wrapper - End** -->

    </div><!-- **Wrapper - End** -->

    <!-- **jQuery** -->
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-migrate.min.js"></script>

    <script src="js/preloader.js" type="text/javascript"></script>
    <script src="js/pace.min.js" type="text/javascript"></script>

    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.tipTip.minified.js"></script>

    <script src="js/jquery-easing-1.3.js" type="text/javascript"></script>

    <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>

    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

    <script src="js/jquery.inview.js" type="text/javascript"></script>

    <script src="js/jquery.bxslider.min.js" type="text/javascript"></script>

    <script src="js/jquery.nav.js" type="text/javascript"></script>

    <script src="js/jquery.donutchart.js" type="text/javascript"></script>

    <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>

    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>

    <script src="js/jquery.smartresize.js" type="text/javascript"></script>

    <script src="js/responsive-nav.js" type="text/javascript"></script>
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.gmap.min.js"></script>

    <!-- **Sticky Nav** -->
    <script src="js/jquery.sticky.js" type="text/javascript"></script>

    <!-- **To Top** -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>

    <script src="js/jquery.viewport.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <script src="js/retina.js" type="text/javascript"></script>

    <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>

    <script src="js/custom.js" type="text/javascript"></script>

    <script language='JavaScript'>
        function SomenteNumero(e){
            var tecla=(window.event)?event.keyCode:e.which;
            if((tecla>47 && tecla<58)) return true;
            else{
                if (tecla==8 || tecla==0) return true;
                else  return false;
            }
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDate").form.id;
            document.getElementById("demo").innerHTML = x;
        }
    </script>

</body>
</html>