<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GetDoctors - Error 404</title>

    <!-- CSS -->
    <link rel="stylesheet" 	href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" >
    <link rel="stylesheet" href="<?= base_url() ?>public/css/main.css">

	<!-- icons -->
	<link rel="icon" href="<?= base_url() ?>public/images/ico/favicon.ico">

  </head>
  <body style="cursor:default; -moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" unselectable="on" onselectstart="return false;" onmousedown="return false;">

	<div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h1 style="font-weight:600; font-size:10em; color:black; opacity: 0.8">Ops!</h1>
                <h2 style="font-weight:200; color:black; opacity: 0.8">A página que você tentou acessar não existe ou foi removida! <a href="<?= base_url() ?>">Voltar à home.</a></h2>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <hr>
                <p style="font-weight:100;">Você tentou acessar: <code><?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?></code></p>
                <p style="font-weight:100;">Momento do acesso: <code><?= date('d/m/Y h:i:s') ?></code></p>
                <p style="font-weight:100;">Satus do nosso servidor: <code>success</code></p>
                <p style="font-weight:100;">Reportar erro contínuo: <a style="font-weight: 100; " target="_new" href="mailto:suporte@getdoctors.com.br">Contato</a></p>
                <hr>
            </div>
            <div class="col-sm-4 col-sm-offset-4" >
                <b style="font-weight:100;">Este erro pode acontecer quando:</b>
                <li style="font-weight:100;">Você tenta inserir manualmente um endereço na url do seu navegador.</li>
                <li style="font-weight:100;">Você acessa o site por links de terceiros. ou</li>
                <li style="font-weight:100;">Esta página deixou de existir.</li>

            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <hr>
            </div>
            <div class="col-sm-3 col-sm-offset-5 col-xs-6 col-xs-offset-3">
                <a href="https://www.getdoctors.com.br"><img draggable="false" src="<?= base_url() ?>public/images/logotipo.png" alt="Logo" title="Clique para voltar à home"></a>
            </div>
        </div>
	</div>

  </body>
</html>
