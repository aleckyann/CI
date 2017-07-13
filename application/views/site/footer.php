<!-- footer start-->
<footer id="footer" class="clearfix">
	<!-- footer-top -->
	<section class="footer-top clearfix">
		<div class="container">
			<div class="row">
				<!-- footer-widget -->
				<div class="col-sm-3">
					<div class="footer-widget">
						<h3>Política de privacidade</h3>
						<ul>
							<li>Se você, como visitante, decidir registar-se ou submeter informação a este site, você concorda com a utilização de tais dados, em conformidade com esta declaração de privacidade.</li>
							<li><button class="btn btn-primary radius0" data-izimodal-open="modal_privacidade"><i class="fa fa-handshake-o" aria-hidden="true"></i> Política de privacidade</button></li>
						</ul>
					</div>
				</div><!-- footer-widget -->

				<!-- footer-widget -->
				<div class="col-sm-3">
					<div class="footer-widget">
						<h3>Termos de uso</h3>
						<ul>
							<li>Qualquer pessoa, legalmente capaz, doravante denominada "paciente", que ultilize os serviços do <i>getdoctors</i>, deve aceitar este "termo" e todas as políticas e princípios que o regem todos os nossos serviços.</li>
							<li><button class="btn btn-primary radius0" data-izimodal-open="modal_termos"><i class="fa fa-handshake-o" aria-hidden="true"></i> Termos de uso</button></li>
						</ul>
					</div>
				</div><!-- footer-widget -->

				<!-- footer-widget -->
				<div class="col-sm-3">
					<div class="footer-widget social-widget">
						<h3>Redes sociais</h3>
						<ul>
							<li><a target="_new" href="https://www.facebook.com/getdoctors.com.br/"><i class="fa fa-facebook-official"></i>Facebook</a></li>
							<li><a target="_new" href="https://api.whatsapp.com/send?phone=5538999034451"><i class="fa fa-whatsapp" style="color:#00A651" aria-hidden="true"></i>Whatsapp</a></li>
							<li><a target="_new" href="https://www.youtube.com/watch?v=7RmH2Lhvj8A"><i class="fa fa-youtube-play"></i>youtube</a></li>
							<li><a target="_new" href="mailto:contato@getdoctors.com.br"><i class="fa fa-google-plus-square"></i>Google+</a></li>
							<li><a target="_new" href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
						</ul>
					</div>
				</div><!-- footer-widget -->

				<!-- footer-widget -->
				<div class="col-sm-3">
					<div class="footer-widget news-letter">
						<h3>Newsletter</h3>
						<p>Assinando nossa newsllater você receberá todas as nossas novidades e promoções!</p>
						<!-- form newslleter-->
						<form action="<?= base_url('assinar-newsletter') ?>" method="post">
							<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>" />
							<input type="text" name="newsletter_nome" class="form-control" placeholder="Nome" required>
							<input type="email" name="newsletter_email" class="form-control" placeholder="Email" required>
							<hr>
							<button type="submit" class="btn btn-primary radius0"><i class="fa fa-pencil" aria-hidden="true"></i> Assinar</button>
						</form><!-- form -->
					</div>
				</div><!-- footer-widget -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- footer-top -->

	<div class="footer-bottom clearfix text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p><img draggable="false" src="<?= base_url() ?>public/images/logotipo.png" alt="logotipo getdoctors"><i> é uma Startup </i><a href="http://cuidarsaude.com">Cuidar Saúde.</a></p>
					<p><hr></p>
					<p>.<a href='https://app.umbler.com/u/mzkqd8j2'><img draggable="false"  src='https://static.umbler.com/brand/umbler-badges/umbler-badge-hostedby-light-bg.png' width='100px' alt='Hosted by Umbler'></a> . <a href="https://www.drift.com/powered-by/?utm_source=getdoctors.com.br&utm_medium=web-widget&utm_campaign=widget-referral"><img src="https://q65ccltn8wq58fa3nmmjq188-wpengine.netdna-ssl.com/wp-content/themes/drift-kumbi/assets/images/logo.svg" alt="Chat by Drift" draggable="false"></a> .</p>
				</div>

			</div>
		</div>
	</div><!-- footer-bottom -->
</footer>
<!-- footer end -->

<!-- Suporte
<div class="style-chooser" style="opacity:0.85">
	<div class="style-chooser-inner">
		<a id="telefones_uteis" class="toggler pointer"><i class="fa fa-hand-paper-o text-primary" aria-hidden="true"></i></a>
		<h5 class="text-success">Dúvidas</h5>
		(38) 9 5678-5678
		<hr>
		<h5 class="text-success">Financeiro</h5>
		(38) 9 9101-9101
		<hr>
		<h5 class="text-success">Suporte Técnico</h5>
		(38) 9 1234-1234
	</div>
</div>
Suporte-->


<!--/ START MODAL AUTENTICAR PACIENTE -->
	<div id="modal_autenticar_paciente">
		<div class="user-account">
			<?php if($this->session->flashdata('autenticar_paciente')){ ?>
				<p class="text-danger"><?= $this->session->flashdata('autenticar_paciente') ?></p>
			<?php } ?>
			<form action="<?= base_url('autenticar-paciente') ?>" method="post">
				<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>" />
				<div class="form-group">
					<input name="autenticar_email" type="email" class="form-control radius0" placeholder="Email" required>

					<input name="autenticar_senha" type="password" class="form-control radius0" placeholder="Senha" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block radius0">Autenticar</button>
				<hr>
				<p class="text-center"><a class="pointer" data-izimodal-open="modal_recuperar_senha_paciente">Recuperar senha</a></p>
				<hr>
				<h3 class="text-center"><a class="btn btn-success radius0" data-izimodal-open="modal_autenticar_medico">Entrar como <i class="fa fa-user-md" aria-hidden="true"></i></a></h3>
			</form>
		</div>
	</div>
<!--/ END MODAL AUTENTICAR PACIENTE -->


<!--/ START MODAL AUTENTICAR MEDICO-->
	<div id="modal_autenticar_medico">
		<div class="user-account">
			<?php if($this->session->flashdata('autenticar_medico')){ ?>
				<p class="text-danger"><?= $this->session->flashdata('autenticar_medico') ?></p>
			<?php } ?>
			<form action="<?= base_url('autenticar-medico') ?>" method="post">
				<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>" />
				<div class="form-group">
					<input name="autenticar_email" type="email" class="form-control radius0" placeholder="Email" required>

					<input name="autenticar_senha" type="password" class="form-control radius0" placeholder="Senha" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block radius0">Autenticar</button>
				<hr>
				<p class="text-center"><a class="pointer" data-izimodal-open="modal_recuperar_senha_medico">Recuperar senha</a></p>
			</form>
		</div>
	</div>
<!--/ END MODAL AUTENTICAR MEDICO-->

<!--/ START MODAL NEWSLETTER -->
	<div id="modal_newsletter">
		<?php if($this->session->flashdata('newsletter')){ ?>
			<p class="text-success"><?= $this->session->flashdata('newsletter') ?></p>
		<?php } ?>
	</div>
<!--/ END MODAL NEWSLETTER -->


<!--/ START MODAL RECUPERAR SENHA PACIENTE -->
	<div id="modal_recuperar_senha_paciente">
		<div class="user-account">
			<?php if($this->session->flashdata('recuperar_senha_paciente')){ ?>
				<p class="text-danger"><?= $this->session->flashdata('recuperar_senha_paciente') ?></p>
			<?php } else { ?>
			<form action="<?= base_url('recuperar-senha-paciente') ?>" method="post">
				<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>" />
				<div class="form-group">
					<input name="email" type="email" class="form-control radius0" placeholder="Email cadastrado" required>
				</div>
				<div class="form-group">
					<input name="cpf" type="text" class="form-control radius0" data-mask='000.000.000-00' placeholder="CPF" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block radius0">Enviar senha para e-mail</button>
			</form>
			<?php } ?>
		</div>
	</div>
<!--/ END MODAL RECUPERAR SENHA PACIENTE -->

<!--/ START MODAL RECUPERAR SENHA MÉDICO-->
	<div id="modal_recuperar_senha_medico">
		<div class="user-account">
			<?php if($this->session->flashdata('recuperar_senha_medico')){ ?>
				<p class="text-danger"><?= $this->session->flashdata('recuperar_senha_medico') ?></p>
			<?php } else { ?>
			<form action="<?= base_url('recuperar-senha-medico') ?>" method="post">
				<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>" />
				<div class="form-group">
					<input name="email" type="email" class="form-control radius0" placeholder="Email cadastrado" required>
				</div>
				<div class="form-group">
					<input name="cpf" type="text" class="form-control radius0" data-mask='000.000.000-00' placeholder="CPF" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block radius0">Enviar senha para e-mail</button>
			</form>
			<?php } ?>
		</div>
	</div>
<!--/ END MODAL RECUPERAR SENHA MÉDICO-->


<!--/ START MODAL CRIAR-CONTA -->
	<div id="modal_criar_conta">
			<?php if($this->session->flashdata('criar_conta')){ ?>
			<div class="user-account">
					<p class="text-success"><?= $this->session->flashdata('criar_conta') ?></p>
			</div>
			<?php } ?>
	</div>
<!--/ END MODAL CRIAR-CONTA -->

<!--/ START MODAL CADASTRO -->
	<div id="modal_cadastro">
		<div class="user-account">
			<small>Você pode visualizar nossos <a data-izimodal-open="modal_termos" class="pointer">Termos de uso</a> e <a data-izimodal-open="modal_privacidade" class="pointer">Política de privacidde</a> a qualquer momento no final desta página ou por meio dos links.</small>
			<a href="<?= base_url('criar-conta') ?>" class="btn btn-block btn-success">Entendi, criar conta!</a>
		</div>
	</div>
<!--/ END MODAL CADASTRO -->

<!-- MODAL POLÍTICA DE PRIVACIDADE -->
	<div id="modal_privacidade" data-izimodal-iframeURL="<?= base_url('politica-de-privacidade') ?>"></div>
<!-- MODAL POLÍTICA DE PRIVACIDADE -->
	<div id="modal_termos" data-izimodal-iframeURL="<?= base_url('termos-de-uso') ?>"></div>
<!-- JS -->
<script charset="utf-8"	src="<?= base_url('node_modules/izimodal/js/iziModal.min.js') ?>" ></script>
<script charset="utf-8" src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script charset="utf-8" src="<?= base_url() ?>public/js/main.js"></script>
<script charset="utf-8" src="<?= base_url() ?>public/js/index.js"\></script>
<script charset="utf-8" src="<?= base_url('node_modules/jquery-mask-plugin/dist/jquery.mask.min.js') ?>"></script>


<script>
	//CHAT
	!function() {
		var t;
		if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
		t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
		t.factory = function(e) {
		return function() {
			var n;
			return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
		};
		}, t.methods.forEach(function(e) {
		t[e] = t.factory(e);
		}), t.load = function(t) {
		var e, n, o, i;
		e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
		o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
		n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
		});
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('ksrsx8mebu82');
</script>
</body>
</html>
