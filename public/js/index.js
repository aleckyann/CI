	//AUTENTICAR-PACIENTE
	$("#modal_autenticar_paciente").iziModal({
		title: 'AUTENTICAÇÃO DE USUÁRIO',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 10,
		history: false,
	});

	//AUTENTICAR-MEDICO
	$("#modal_autenticar_medico").iziModal({
		title: 'AUTENTICAÇÃO DE MÉDICO',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 10,
		history: false,
	});

	//CADASTRO
	$("#modal_cadastro").iziModal({
		title: 'Cadastro',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 1,
		history: false,
	});

	//CRIAR_CONTA
	$("#modal_criar_conta").iziModal({
		title: 'Cadastro',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 1,
		history: false,
	});

	//RECUPERAR SENHA PACIENTE
	$("#modal_recuperar_senha_paciente").iziModal({
		title: 'Recuperar senha: Paciente',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 10,
		history: false,
	});

	//RECUPERAR SENHA MÉDICO
	$("#modal_recuperar_senha_medico").iziModal({
		title: 'Recuperar senha: Médico',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 400,
		padding: 10,
		history: false,
	});

	//PRIVACIDADE
	$("#modal_privacidade").iziModal({
		title: 'POLÍTICA DE PRIVACIDADE',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		autoOpen: false,
		width: 600,
		padding: 10,
		history: false,
		iframe : true,
	});

	//TERMOS
	$("#modal_termos").iziModal({
		title: 'TERMOS DE USO DO GETDOCTORS',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconClass: null,
		width: 600,
		padding: 10,
		autoOpen: false,
		history: false,
		iframe : true,
	});

	//NEWSLETTER
	$("#modal_newsletter").iziModal({
		title: 'Newsletter getdoctors.com.br',
		theme: '',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconColor: '',
		iconClass: null,
		width: 400,
		padding: 10,
		overlayClose: false,
		autoOpen: false,
		closeOnEscape: false,
		history: false,
	});

	//ATUALIZAR-PERFIL
	$("#modal_atualizar_perfil").iziModal({
		title: 'Atualização do seu perfil getdoctors.com.br',
		theme: '',
		headerColor: '#00A651',
		overlayColor: 'rgba(0, 0, 0, 0.4)',
		iconColor: '',
		iconClass: null,
		width: 400,
		padding: 10,
		overlayClose: true,
		autoOpen: false,
		closeOnEscape: true,
		history: false,
    	bodyOverflow: false,
    	focusInput: true,
    	autoOpen: false,
    	timeout: 3000, //Set a time, in miliseconds, to close automaticaly the modal
    	timeoutProgressbar: true, //Set here to 'true' if your enabled a timeout.
    	timeoutProgressbarColor: '#010101',
		transitionInModal: 'transitionIn',
		transitionOutModal: 'transitionOut',
		transitionInOverlay: 'fadeIn',
		transitionOutOverlay: 'fadeOut',
	});
