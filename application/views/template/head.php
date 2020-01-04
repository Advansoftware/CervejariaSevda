<html>
	<head> 
		<!-- Meta Tags utilizadas no site -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="theme-color" content="#ab6d0f"/>
		<meta name="description" content="Acesse o site oficial da Cervejaria Sevda e fique por dentro das nossas cervejas artesanais na rota do Caminho da Fé, agende sua visita a cervejaria e muito mais.">
		<meta property="og:title" content="Cervejaria Sevda - Minas Gerais, na rota do Caminho da Fé" />
		<meta NAME="KEYWORDS" CONTENT="Cervejaria, Brasópolis, Sevda, Cervejaria Brazopolis, Sevda Servejaria, Brazópolis" >
		<meta property="og:description" content="Acesse o site oficial da Cervejaria Sevda e fique por dentro das nossas novas cervejas artesanais na rota do Caminho da Fé, agende sua visita a cervejaria e muito mais." />
		<meta property="og:image" content="<?php echo base_url();?>content/imagens/sevda_face.png" />	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
		<meta NAME="LANGUAGE" CONTENT="PT" >
		<!-- Fim das meta Tags -->	

		<title>Cervejaria Sevda - <?php echo $title;?></title>
		<?php ini_set("allow_url_fopen", 1);?>
		<?= link_tag('assets/css/bootstrap.min.css') ?>
		<?= link_tag('assets/css/sevda.css') ?>
		<?= link_tag('assets/css/style.css') ?>
		<?= link_tag('assets/css/normalize.css') ?>
		<?= link_tag('assets/css/all.css') ?>
		<?= link_tag('assets/css/bootstrap.offcanvas.min.css') ?>
		<?= link_tag('content/imagens/logo_oficial.jpg', 'shortcut icon', 'image/png') ?>
		<?= link_tag('assets/css/animate.css') ?>
		<script type="text/javascript" language="javascript" src='<?php echo base_url();?>assets/js/jquery-3.1.1.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>assets/js/bootstrap.offcanvas.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>assets/js/pace.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>assets/js/js.js'></script>
		<script src="https://kit.fontawesome.com/92c455016e.js" crossorigin="anonymous"></script>
	</head>
	<body id="conteiner">
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-info">
						<h5 class="modal-title text-white" style="text-shadow: 0px 0px 2px rgba(0,0,0,.5)">Pedidos de Providência</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="bg-light" id="RegistrosPagina">
					</div>
				</div>
			</div>
		</div>
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
		window.fbAsyncInit = function() {
		FB.init({
		xfbml            : true,
		version          : 'v5.0'
		});
		};

		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		attribution=setup_tool
		page_id="2379488575455820"
		theme_color="#311607"
		logged_in_greeting="Olá, Como posso ajudar você?"
		logged_out_greeting="Olá, Como posso ajudar você?">
		</div>