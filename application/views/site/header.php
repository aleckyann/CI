<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aleck Yann Mattos">
   	<meta name="description" content="<?= $description ?>">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="GetDoctors - Um médico pra chamar de seu!" />
	<link rel=”canonical” href="<?= base_url() ?>" />

    <title><?= $title ?></title>

    <!-- START BASE -->
    <script charset="utf-8"	src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>" ></script>
    <link rel="stylesheet" 	href="<?= base_url('node_modules/izimodal/css/iziModal.min.css') ?>">
    <link rel="stylesheet" 	href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" >
    <link rel="stylesheet"	href="<?= base_url('node_modules/font-awesome/css/font-awesome.min.css') ?>" >
    <link rel="stylesheet" 	href="<?= base_url('node_modules/animate.css/animate.min.css') ?>">
    <link rel="stylesheet" 	href="<?= base_url('public/css/main.css') ?>">
	<link rel="stylesheet" 	href="<?= base_url('public/css/presets/preset1.css') ?>" id="preset">
    <link rel="stylesheet" 	href="<?= base_url('public/css/responsive.css') ?>">

	<!-- START FONTS -->
	<link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Ubuntu:400,100,300,500'>
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Signika+Negative:400,100,300,500'>

	<!-- START FAVICONS -->
	<link rel="icon" href="<?= base_url('public/images/ico/favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('public/images/ico/apple-touch-icon-144-precomposed.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('public/images/ico/apple-touch-icon-114-precomposed.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('public/images/ico/apple-touch-icon-72-precomposed.png') ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('public/images/ico/apple-touch-icon-57-precomposed.png') ?>">

    <!-- TIMELINE -->
    <link rel="stylesheet" 	href="<?= base_url('public/css/timeline-style.css') ?>">
    <script charset="utf-8"	src="<?= base_url('public/js/modernizr.js') ?>" ></script>
    <script charset="utf-8"	src="<?= base_url('public/js/timeline.js') ?>" ></script>




	<script>
	//ANALYTICS
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-67512914-2', 'auto');
		ga('send', 'pageview');
	</script>
  </head>

  <body class="animated fadeIn">
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url() ?>"><img draggable="false" class="img-responsive" src="<?= base_url('public/images/logotipo.png') ?>" alt="Logo getdoctors"></a>
				</div>
				<!-- /navbar-header -->

				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
    						<li <?= active($this->uri->segment(1), '') ?>><a style="font-weight: 400" href="<?= base_url() ?>"><i>Home</i></a></li>
                            <li><a style="font-weight: 400" target="_new" href="mailto:contato@getdoctors.com.br"><i>Contato</i></a></li>
                            <li itemscope itemtype="http://schema.org/LocalBusiness" class="hidden-lg hidden-md">
								<a style="font-weight: 400" itemprop="telephone" href="tel:38999034451"><i>Telefone</i></a>
							</li>
						</ul>
					</div>
				</div><!-- navbar-left -->

                <?php if(!$this->session->userdata('email')){ ?>
				<!-- nav-right -->
				<div class="nav-right">
					<ul class="sign-in thumbnail">
						<li><i class="fa fa-user"></i></li>
                        <li><a class="pointer" data-izimodal-open="modal_autenticar_paciente">Login</a></li>
						<li><a class="pointer" data-izimodal-open="modal_cadastro">Registrar</a></li>
					</ul><!-- sign-in -->
				</div>
				<!-- nav-right -->
            <?php } else { ?>
                <div class="nav-right">
                    <div class="nav-right">
    					<ul class="sign-in">
                            <li><u><a href="<?= base_url('paciente/perfil') ?>"><?= $this->session->userdata('email') ?></a></u></li>
                            <li><a href="<?= base_url('inautenticar') ?>">Sair</a></li>
    					</ul><!-- sign-in -->
    				</div>
				</div>
                <?php } ?>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
