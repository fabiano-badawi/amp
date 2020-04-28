<?php

require_once '/var/www/common/data.inc.php';
require_once '/var/www/common/Mobile_Detect.php';
$detect = new Mobile_Detect;
?>
<!doctype html>
<html AMP lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Quem são os Heads e CEOs de empresas brasileiras?</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
    <meta property="og:title" content="<?=str_replace('"', '', encurtador($obj->Body,70))?>" />
    <link rel="canonical" href="https://negociosemfoco.com/heads-ceos/">
    <link rel="shortcut icon" href="/favicon.png">

    <!--*
        *   Fonts
        **-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--*
        *   JavaScripts to Include
        **-->
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element=amp-sidebar src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

    <!--*
        *   Required CSS Code (AMP Boilerplate)
        **-->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <!--*
        *   Custom CSS Code
        **-->
    <style amp-custom>
  div.imagem-principal {
    text-align: center;
  }

        /* GLOBAL STYLES */
		/**---------------------
		  *
		  * Resets
		  *
		  *---------------------**/
		figure{margin: 0}
		*{box-sizing: border-box}
		button{background: none; border: none}
		a{text-decoration: none}
		:focus{outline: 0;}
		ul{padding-left: 20px}

		/**---------------------
		  *
		  * Global Styles
		  *
		  *---------------------**/
		html{font-size: 62.5%; box-sizing: border-box;}
		body{font-size: 2.2rem; line-height: 1.7; -webkit-font-smoothing: antialiased;}

		.font-1, html{font-family: 'Roboto', serif; font-weight: 400}

		.text-center{text-align: center}
		.text-justify{text-align: justify}
		.margin-0{margin: 0}
		.margin-top-0{margin-top: 0; font-size: 1.7rem}
		.margin-bottom-0{margin-bottom: 0; font-size: 1.7rem}
		.minus-margin-top-bottom-15{margin-top: -15px; margin-bottom: -15px}

		.space{height: 10px}
		.space-2{height: 20px}
		.space-3{height: 30px}
                .space-4{height: 40px}

		.divider{margin: 13px 0;}
		.divider-30{margin: 30px 0;}
		.divider.colored{height: 1px; background: rgba(0,0,0,.12)}
		.divider-30.colored{height: 1px; background: rgba(0,0,0,.12)}

		.pull-left{float: left}
		.pull-right{float: right}
		.pull-right12{float: right; margin-left: 12px}

		.clearfix:after,
		.clearfix:before {
			display: table;
			content: "";
			line-height: 0
		} .clearfix:after {clear: both}

		h2{margin-bottom: 7.5px}
		p{margin: 7.5px 0 30px;}
		small{font-size: 1rem; line-height: 1}
		strong,b{font-weight: 400}

		h1,h2,h3,h6{
			font-weight: 700;
			color: #2d2d2d;
		}

                h4,h5{
                        font-weight: 700;
			line-height: 1.5;
                }

		h1{font-size: 4.8rem}
		h2{font-size: 3.8rem}
		h3{font-size: 2.8rem}
		h4{font-size: 2.1rem}
		h5{font-size: 1.6rem}
		h6{font-size: 1rem}

		a,
		.primary-color{color: #5782C9}
		.secondary-color{color: #442672}
		.light-color{color: #FFF}
		.light-color-2{color: rgba(255,255,255,.54)}
		.dark-color{color: #333030;}
		.ocean-color{color: #2b90d9;}
		.grass-color{color: #3ac569;}
		.salmon-color{color: #ff7473;}
		.sun-color{color: #feee7d;}
		.alge-color{color: #79a8a9;}
		.flower-color{color: #353866;}

		.primary-bg{background-color: #252525}
		.secondary-bg{background-color: #442672}
		.light-bg{background-color: #fff;}
		.dark-bg{background-color: #333030;}
		.ocean-bg{background-color: #2b90d9;}
		.grass-bg{background-color: #3ac569;}
		.salmon-bg{background-color: #ff7473;}
		.sun-bg{background-color: #feee7d;}
		.alge-bg{background-color: #79a8a9;}
		.flower-bg{background-color: #353866;}

		.circle{border-radius: 50%}

		[dir="rtl"] .pull-left{float: right}
		[dir="rtl"] .pull-right{float: left}
		body {text-align: left}
		body[dir="rtl"] {text-align: right}

		.text-center{text-align: center}

		code {
			padding: .2rem .4rem;
			font-size: 90%;
			color: #bd4147;
			background-color: #f7f7f9;
			border-radius: .25rem;
		}

		/**---------------------
		  *
		  * Header Styles
		  *
		  *---------------------**/
		header{
			position: relative;
			min-height: 55px;
			padding: 0 5px;

			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5782c9+0,442672+100 */
			background: rgb(25,25,25); /* Old browsers */
		}

		header .fa{
			color: #FFF;
			opacity: .87;
			font-size: 17px;
			line-height: 56px;
			height: 55px;
			padding: 0 15px;
			margin: 0;
		}

		#logo{
			height: 55px;
			line-height: 61px;
			display: inline-block;
		}

                #logotxt{
                        height: 55px;
                        margin-left: 25px;
                        line-height: 61px;
                       	display: inline-block;
                        color: white;
                        font-family: 'Roboto', serif;
                       	font-weight: 400;
                       	font-size: 2.1rem;
               	}

                #DesktopVersion{
                        color: #5782C9;
                }

		/**---------------------
		  *
		  * Sidebar Styles
		  *
		  *---------------------**/
		#mainSideBar{
			min-width: 300px;
			padding-bottom: 30px;
		}

		#mainSideBar > div:not(.divider){
			padding: 17px 20px;
		}

		#mainSideBar figure{
			width: 300px;
			max-width: 100%;
			padding: 20px;
			position: relative;
		}

		#mainSideBar button{
			position: absolute;
			right: 20px;
			top: 20px;
		}

		#mainSideBar amp-img{
			margin-bottom: 5px;
		}

		#mainSideBar h3,
		#mainSideBar h5{
			margin: 0;
			line-height: 1.5;
		}

		#menu{margin-top: 15px}
		#menu div{padding: 0}

		#menu h6,
		#menu a{
			color: inherit;
			font-size: 1.3rem;
			font-weight: 400;
			padding:0;
			border: none;
		}

		#menu a,
		#menu span{
			padding: 14px 20px 14px 53px;
			display: block;
			color: inherit;
			position: relative;

			-webkit-transition: all ease-in-out .2s;
			transition: all ease-in-out .2s;
		}

		#menu section[expanded] > h6 span{
			background-color: rgba(0,0,0,.06);
			color: #5782C9;
		}

		#menu h6 span:after{
			position: absolute;
			right: 20px;
			top: 0;
			font-family: 'FontAwesome';
			font-size: 12px;
			line-height: 47px;
			content: '\f0dd';
		}

		#menu i,
		#mainSideBar li i{
			font-size: 1.7rem;
			position: absolute;
			left: 20px;
		}

		.social-ball{
			font-size: 1.6rem;
			display: inline-block;
			text-align: center;
			line-height: 30px;
			height: 30px;
			width: 30px;
			border-radius: 50%;
			color: #FFF;
			margin-right: 5px;
		}

		.social-ball.fa-facebook{background-color: #4867AA}
		.social-ball.fa-twitter{background-color: #00ACED}
		.social-ball.fa-linkedin{background-color: #0177B5}
		.social-ball.fa-behance{background-color: #010103}
		.social-ball.fa-dribbble{background-color: #E04C86}

		/**---------------------
		  *
		  * Grid
		  *
		  *---------------------**/
		[class*="col-"]{margin-bottom: 30px;}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}

        /* /GLOBAL STYLES */

        /* INDEX PAGE STYLES */

        /**---------------------
		  *
		  * Sidebar Box
		  *
		  *---------------------**/
		.blog-sidebar-box{margin-bottom: 30px;}

        /**---------------------
		  *
		  * Photo Row
		  *
		  *---------------------**/
		.photo-row {
			margin: 15px -2.5px 0
		}

		.photo-row a {
			width: 33.33333333333333%;
			padding: 0 2.5px;
			float: left;
			display: block
		}

        /**---------------------
		  *
		  * Media List
		  *
		  *---------------------**/
		.media-list{
			list-style: none;
			padding: 0;
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

		.media-list a{
			position: relative;
			display: block;
		}

		.media-list i{
			position: absolute;
			right: 5px;
			top: 50%;
			line-height: 10px;
			margin-top: -17px;
			display: block;
		}

		.media-list amp-img{
			display: block;
		}

		.media-list div{
			margin-left: 0px; /** Valor original 80px **/
			padding-bottom: 15px;
			margin-bottom: 15px;
		}

		.media-list li:not(:last-child) div{
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

        /**---------------------
		  *
		  * Bordered List
		  *
		  *---------------------**/
		.bordered-list{
			padding-left: 0;
			list-style: none;
		}

		.bordered-list a{
			color: inherit;
			display: block;
			position: relative;
			padding: 10px 15px 8px 0;
			border-bottom: 1px solid rgba(0,0,0,.06);
		}

		.bordered-list a:after{
			position: absolute;
			right: 5px;
			top: 0;
			font-size: 12px;
			line-height: 47px;
			font-weight: 400;
			content: '+';
		}

        /**---------------------
		  *
		  * Title
		  *
		  *---------------------**/
		.bordered-title{
			border-bottom: 1px solid rgba(0,0,0,.12);
			margin: 0 -15px;
			padding: 0 15px 8px;
		}

                .bordered-title h1{
                        margin: 0;
                        line-height: 1.3;
                }

		.bordered-title h3{
			margin: 0;
			line-height: 1.3;
		}

		.bordered-title h4,h5{
			opacity: .54;
			margin: 0;
		}

       /**---------------------
		  *
		  * Social Share
		  *
		  *---------------------**/
		.social-share-container{
			height: 30px;
		}

		.socials-share-title{
			line-height: 30px;
			display: inline-block;
			vertical-align: top;
			margin-right: 10px;
		}

		amp-social-share[type=facebook],
		amp-social-share[type=gplus],
		amp-social-share[type=pinterest],
		amp-social-share[type=email],
		amp-social-share[type=twitter],
		amp-social-share[type=linkedin]{
			background-image: none;
		}

		amp-social-share[type=whatsapp]{
			background-color: #189D0E;
		}

		amp-social-share[type=baidu]{
			background-color: #4252A2;
		}

		amp-social-share{
			font-size: 1.6rem;
			display: inline-block;
			text-align: center;
			line-height: 30px;
			height: 30px;
			width: 30px;
			border-radius: 50%;
			color: #FFF;
			margin-right: 5px;
		}

        /**---------------------
		  *
		  * Accordion
		  *
		  *---------------------**/
		.accordion section{
			margin-bottom: 4px;
		}

		.accordion section > h4{
			padding: 5px 15px 5px 35px;
			background-color: rgba(0,0,0,.02);
            border-color: rgba(0,0,0,.06);
		}

		.accordion section > h4:before{
			content: '';
			position: absolute;
			left: 15px;
			top: 50%;
			margin-top: -2px;
			display: block;
			width: 4px;
			height: 4px;
			border-radius: 50%;
			background-color: rgba(87,130,201,1);
		}

		.accordion section > h4:after{
			content: '\f107';
			position: absolute;
			right: 15px;
			top: 0;
			display: block;
			font-family: FontAwesome;
			line-height: 39px;
			font-size: 1.2rem;
		}

		.accordion section[expanded] > h4:after{
			content: '\f106';
		}

		.accordion section > div{
			padding: 10px 15px;
		}

        
        /**---------------------
                  *
                  * Related
                  *
                  *---------------------**/

		.related {
		  background-color: #f5f5f5;
		  margin: 1rem;
		  display: flex;
		  color: #111;
		  padding: 0;
		  box-shadow: 0 1px 1px 0 rgba(0,0,0,.14), 0 1px 1px -1px rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);
		  text-decoration: none;
		}
		.related > span {
		  font-weight: 400;
		  margin: 8px;
		}
		.related:hover {
		  background-color: #ccc;
		}

        /**---------------------
		  *
		  * Comment Items
		  *
		  *---------------------**/
		.button-row .button{
			float: left;
		}

		.button{
			overflow: hidden;

			margin: 10px;
			padding: 10px;

			cursor: pointer;
			user-select: none;
			transition: all 60ms ease-in-out;
			text-align: center;
			white-space: nowrap;
			text-decoration: none;

			border: 0 none;
			border-radius: 4px;

			font-size: 1.3rem;
			font-weight: 700;
			line-height: 1.3;

			-webkit-appearance: none;
			-moz-appearance:    none;
			appearance:         none;
		}

		.button-large{
			padding: 10px 15px;
			font-size: 1.7rem;
		}

		.button-small{
			padding: 7px 13px;
			font-size: 1.1rem;
		}

        /* /INDEX PAGE STYLES */
    </style>
</head>
<body dir="ltr">
    <header itemscope itemtype="https://schema.org/WPHeader">
        <button class="pull-right fa fa-bars" on='tap:mainSideBar.toggle'></button>
        <a href="/"><amp-img class="pull-left circle" src="/wp-content/uploads/2017/10/logo.png" width="54" height="54" layout="fixed" attribution="Mobius Studio"></amp-img></a><a id="logotxt" href="/">Negócios em Foco</a>
    </header><!-- TOP NAVBAR ENDS -->

    <div class="container-fluid">
		<div></div>

		<div class="row">
			<div class="col-sm-3">
			</div>

			<div class="col-sm-6">
				<div class="bordered-title">
					<h<?=($detect->isMobile() ? 3 : 1)?>>Conheça alguns nomes à frente de startups e empresas brasileiras</h<?=($detect->isMobile() ? 3 : 1)?>>
					<h<?=($detect->isMobile() ? 5 : 4)?>>Listamos alguns profissionais que ocupam cargos de alto escalão em empresas brasileiras e que foram citados em notícias do Negócios em Foco</h<?=($detect->isMobile() ? 5 : 4)?>>

					<br />
                                        <amp-social-share type="email" layout="fixed" width="30" height="30"><i class="fa fa-envelope"></i></amp-social-share>
                                        <amp-social-share type="facebook" layout="fixed" width="30" height="30" data-param-app_id="<?=$obj->ReleaseId?>"><i class="fa fa-facebook"></i></amp-social-share>
                                        <amp-social-share type="twitter" layout="fixed" width="30" height="30"><i class="fa fa-twitter"></i></amp-social-share>
                                        <amp-social-share type="whatsapp" layout="fixed" width="30" height="30"><i class="fa fa-whatsapp"></i></amp-social-share>
					<h5><i class="fa fa-map-marker"></i>São Paulo - SP <i class="fa fa-calendar"></i> 20/04/2020</h5>
				</div><!-- TITLE ENDS -->

                                <p class="minus-margin-top-bottom-30">

				<div class="space-4"></div>

				<div class="content">
				Na lista abaixo você pode conhecer o perfil de alguns profissionais que ocupam cargos executivos em empresas brasileiras. São CEOs, fundadores, diretores, presidentes ou heads, profissionais que tem uma missão e um propósito dentro da empresa.<br /><br />
				Os nomes abaixo não formam um ranking e também não foi adotado um critério de ordenação.<br /><br />
				Confira a lista!
				</div>

				<div class="space-3"></div>

<?php
$lastNews = array(
'natacha-machado;<h4 class="margin-0">Dra Natacha Machado</h4><span><strong>médica ginecologista e mestre em saúde</strong></span>',
'rafael-fragnan;<h4 class="margin-0">Rafael Fragnan</h4><span><strong>diretor de Sinistros da Argo Seguros</strong></span>',
'miriam-christino;<h4 class="margin-0">Miriam Christino</h4><span><strong>terapeuta integrativa</strong></span>',
'nicolas-vergara;<h4 class="margin-0">Nicolás Vergara</h4><span><strong>Head do Santander Universidades</strong></span>',
'gilberto-gaertner;<h4 class="margin-0">Gilberto Gaertner</h4><span><strong>professor de psicologia da Universidade Positivo</strong></span>',
'eliziane-gorniak;<h4 class="margin-0">Eliziane Gorniak</h4><span><strong>diretora do Instituto Positivo</strong></span>',
'marcela-bonin;<h4 class="margin-0">Marcela Bonin</h4><span><strong>diretora do Mantis Diagnósticos Avançados</strong></span>',
'claudia-papa;<h4 class="margin-0">Claudia Papa</h4><span><strong>Vice-Presidente da Generali Brasil</strong></span>',
'anderson-benetti;<h4 class="margin-0">Anderson Benetti</h4><span><strong>Head de Produto na Senior Sistemas</strong></span>',
'natalia-meneguit;<h4 class="margin-0">Natalia Meneguit</h4><span><strong>Advogada na Meneguit Advogados Associados</strong></span>',
'monica-saccarelli;<h4 class="margin-0">Monica Saccarelli</h4><span><strong>CEO da Grão</strong></span>',
'marcelo-salomao;<h4 class="margin-0">Marcelo Salomão</h4><span><strong>diretor executivo da Gigatron Franchising</strong></span>',
'cesar-nanci;<h4 class="margin-0">Cesar Nanci</h4><span><strong>CEO da empresa Pulses</strong></span>',
'christiane-mirna-machado;<h4 class="margin-0">Cristiane Mirna Machado</h4><span><strong>diretora de Produtos da Stefanini Scala</strong></span>',
'nicolas-toth;<h4 class="margin-0">Nicolas Toth</h4><span><strong>CEO da Sharecare Brasil.</strong></span>',
'fernando-cardozo;<h4 class="margin-0">Fernando Cardozo</h4><span><strong>presidente da Guide Investimentos</strong></span>');
?>

                                <div>
                                        <h3 class="margin-0">Heads e CEOs</h3>

                                        <ul class="media-list">
						<?php foreach($lastNews as $value) {
							$value = explode(';', $value);
						?>
                                                <li>
                                                        <a class="clearfix" href="/heads-ceos/<?=$value[0]?>">
                                                                <div>
                                                                        <?=$value[1]?>
                                                                </div>

                                                                <i class="fa fa-angle-right"></i>
                                                        </a>
                                                </li>
						<?php } ?>
                                        </ul><!-- PHOTO-ROW ENDS -->
                                </div><!-- SIDEBAR-BOX ENDS -->

				<div class="space-3"></div>

                                <div>

                                        <amp-img src="/wp-content/uploads/2017/04/negocios-em-foco.png" width="204" height="48"></amp-img>

                                        <ul class="bordered-list">
                                                <li><a href="/noticias/"><strong>Últimas notícias</strong></a></li>
                                                <li><a href="/heads-ceos/"><strong>Heads & CEOs</strong></a></li>
                                                <li><a href="/noticias-corporativas/?cat=negocio"><strong>Negócios</strong></a></li>
                                                <li><a href="/noticias-corporativas/?cat=ne-startups"><strong>Startups</strong></a></li>
                                                <li><a href="/noticias-corporativas/?cat=ne-franquias"><strong>Franquias</strong></a></li>
                                                <li><a href="/noticias-corporativas/?cat=tecnologia"><strong>Tecnologia</strong></a></li>
                                        </ul><!-- PHOTO-ROW ENDS -->
                                </div><!-- SIDEBAR-BOX ENDS -->

                                <div class="space-2"></div>

                                <div>
                                        <h3>Compartilhe</h3>
                                        <amp-social-share type="email" layout="fixed" width="30" height="30"><i class="fa fa-envelope"></i></amp-social-share>
                                        <amp-social-share type="facebook" layout="fixed" width="30" height="30" data-param-app_id="<?=$obj->ReleaseId?>"><i class="fa fa-facebook"></i></amp-social-share>
                                        <amp-social-share type="twitter" layout="fixed" width="30" height="30"><i class="fa fa-twitter"></i></amp-social-share>
                                        <amp-social-share type="whatsapp" layout="fixed" width="30" height="30"><i class="fa fa-whatsapp"></i></amp-social-share>
                                </div><!-- TITLE ENDS -->

			</div><!-- COL-SM-9 ENDS -->


			<div class="col-sm-3">
			</div>


		</div><!-- ROW ENDS -->

        <div class="text-center">
		<a href="https://negociosemfoco.com/contato/"><i class="fa fa-envelope"></i> <b>Contato</b></a> | <a href="https://negociosemfoco.com/mkt/anuncie/"><b>Anuncie</b></a>
		<br />
            	<small><b>Copyright © 2020 | Todos os direitos reservados.<b/></small>
        </div><!-- TEXT-CENTER/COPYRIGHT ENDS -->

        <div class="space-2"></div>
	</div><!-- CONTAINER-FLUID ENDS -->

    <amp-sidebar id='mainSideBar' layout='nodisplay'>
        <figure class="primary-bg">
            <amp-img class="circle" src="/wp-content/uploads/2017/10/logo.png" width="60" height="60" layout="fixed" attribution="Mobius Studio"></amp-img>
            <figcaption>
                <h3 class="light-color">Negócios em Foco</h3>
                <h5 class="light-color-2">Notícias empresariais</h5>
            </figcaption>

            <button on='tap:mainSideBar.toggle' class="fa fa-caret-left light-color"></button>
        </figure><!-- NAVBAR USER CARD ENDS -->

        <nav id="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <a href="/"><i class="fa fa-home"></i>Home</a>
            <a href="/noticias-corporativas/?cat=negocio"><i class="fa fa-building"></i>Negócios</a>
            <a href="/noticias-corporativas/?cat=tecnologia"><i class="fa fa-microchip"></i>Tecnologia</a>
	    <a href="/noticias-corporativas/?cat=industrias"><i class="fa fa-industry"></i>Indústrias</a>
            <amp-accordion>
                <section>
                    <h6><span><i class="fa fa-plus"></i>Mais</span></h6>
                    <div>
                        <a href="/noticias-corporativas/?cat=ciencia-saude">Ciência e Saúde</a>
                        <a href="/noticias-corporativas/?cat=governo">Governo</a>
                        <a href="/noticias-corporativas/?cat=arte-e-entretenimento">Arte e Entretenimento</a>
                        <a href="/">Todas</a>
                    </div>
                </section>
            </amp-accordion>
            <a href="/contato/"><i class="fa fa-envelope"></i>Contato</a>
        </nav><!-- MENU ENDS -->

        <div class="divider colored"></div>

        <div>
            <p class="margin-top-0">Localização<br />São Paulo - SP, Brasil</p>
            <p class="margin-bottom-0">E-Mail<br />redacao@negociosemfoco.com</p>
        </div><!-- CONTACT INFORMATION ENDS -->

    </amp-sidebar><!-- SIDEBAR ENDS -->

<amp-analytics type="googleanalytics" id="analytics1">
<script type="application/json">
{
  "vars": {
    "account": "UA-98407161-1"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>

</body>
</html>
