<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
    <header id="header">
        <div id="masthead" class="container">
            <section class="top-header">
                <picture class="top-image">
                    <source srcset="<?php echo get_template_directory_uri();?>/img/desktop/banner.jpg" media="(min-width: 1024px)">
                    <source srcset="<?php echo get_template_directory_uri();?>/img/mobile/banner.jpg">
                    <img srcset="<?php echo get_template_directory_uri();?>/img/mobile/banner.jpg" alt="">
                </picture>
            </section>
            <section class="header">
                <div class="search">
                    <i class="fa fa-search"></i>
                </div>
                <h1 id="branding" class="logo"><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home" class="site-name"><?php bloginfo( 'name' ) ?></a></h1>

                <div class="hamburger">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-times"></i>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/quatrorodas" class="link" target="_blank"> 
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/quatro_rodas/?hl=en" class="link" target="_blank"> 
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/quatrorodas?lang=en" class="link" target="_blank"> 
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://www.abril.com.br/" class="link" target="_blank"> 
                        <i class="icon-abril"></i>
                    </a>
                </div>
                <nav class="menu">
                    <ul class="items">
                        <li class="item">
                            <span class="name">Carros</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu carros">
                                <div class="categories">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="btn link">Ver todos os carros</a>
                                </div>
                                <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Audi</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Bentley</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">BMW</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Chevrolet</h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Chryler</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Dodge</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Ferrari</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Fiat</h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Ford</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Honda</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Hyundai</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">JAC Motos</h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Jaguar</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Jeep</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Kia</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Lamborghini</h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Mercedes-Benz</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Mitsubishi</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Volkswagen</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <span class="name">Testes</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu tests">
                                <div class="categories">
                                    <ul class="categories-list">
                                        <li class="category active">
                                            <span class="category-name">Ver tudo de testes</span>
                                            <i class="fa fa-angle-right"></i>
                                        </li> 
                                        <li class="category">
                                            <span class="category-name">Comparativos</span>
                                            <i class="fa fa-angle-right"></i>
                                        </li> 
                                        <li class="category">
                                            <span class="category-name">Impressões</span>
                                            <i class="fa fa-angle-right"></i>
                                        </li> 
                                        <li class="category">
                                            <span class="category-name">Longa Duração</span>
                                            <i class="fa fa-angle-right"></i>
                                        </li> 
                                        <li class="category">
                                            <span class="category-name">Teste de pista</span>
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="sub-items">
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste1.jpg" alt=""></figure>
                                        <h4 class="title">Ford Focus Fastback Titanium Plus</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste2.jpg" alt=""></figure>
                                        <h4 class="title">Audi A6 2.0 TFSI</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <h4 class="title">Ford EcoSport 1.6 Powershift</h4>
                                        <p class="description">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste3.jpg" alt=""></figure>
                                        <h4 class="title">Audi Q3 1.4</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste4.jpg" alt=""></figure>
                                        <h4 class="title">BMW 420i Cabriolet</h4>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <span class="name">Notícias</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu news">
                                <div class="categories"></div>
                                <ul class="sub-items">
                                     <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste1.jpg" alt=""></figure>
                                        <h4 class="title">Ford Focus Fastback Titanium Plus</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste2.jpg" alt=""></figure>
                                        <h4 class="title">Audi A6 2.0 TFSI</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <h4 class="title">Ford EcoSport 1.6 Powershift</h4>
                                        <p class="description">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste3.jpg" alt=""></figure>
                                        <h4 class="title">Audi Q3 1.4</h4>
                                    </a>
                                    </li>
                                    <li class="sub-item">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                        <figure><img src="<?php echo get_template_directory_uri();?>/img/desktop/teste4.jpg" alt=""></figure>
                                        <h4 class="title">BMW 420i Cabriolet</h4>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <span class="name">Auto-Serviço</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu services">
                                <div class="categories">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="btn link">Ver todos os serviços</a>
                                </div>
                                <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <span class="name">Guia de compras</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu guide">
                                 <div class="categories">
                                    <a href="<?php bloginfo( 'url' ) ?>/" class="btn link">Ver todos os guias</a>
                                </div>
                                <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    </ul>
                                    <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Item </h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <span class="name">Tabela Fipe</span>
                            <i class="fa fa-angle-down"></i>
                            <div class="sub-menu fipe">
                                <div class="categories"></div>
                                <ul class="sub-items">
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Carro</h4>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="<?php bloginfo( 'url' ) ?>/" class="link">
                                            <h4 class="title">Moto</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="search-content">
                    <input type="text" class="search-field" placeholder="Pesquisar"><i class="fa fa-search"></i>
                </div>
            </section>
            <section class="popular">
                <h5 class="title"> + Acessados</h5>
                <ul class="popular-items">
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Salão do Automóvel</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Renegade</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Novo Sandero</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Novo Fox</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Novo Ka</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">HB 20</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Duster</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Golf</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Corolla</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">Civic</a></p>
                    </li>
                    <li class="popular-item">
                        <p><a class="link" href="<?php bloginfo( 'url' ) ?>/">IA-ZI</a></p>
                    </li>
                </ul>
            </section>
        </div>
    </header>
    <main class="container">