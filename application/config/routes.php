<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Para fins de controle de sessão, toda rota deve ser destinada a um User_type
seguindo o acesso da url: $this->uri->segment(1). Exemplo:
>getdoctors.com.br/medico/action
>getdoctors.com.br/paciente/action
>getdoctors.com.br/boss/action
*/


#CONFIG
$route['translate_uri_dashes'] = FALSE;
$route['404_override']                          = 'Site/error';


#SITE
$route['default_controller']                    = 'Site/index';
$route['politica-de-privacidade']               = 'Site/politica_de_privacidade';
$route['termos-de-uso']                         = 'Site/termos_de_uso';
$route['perguntas-frequentes']                  = 'Site/perguntas_frequentes';
$route['criar-conta']                           = 'Site/criar_conta';
$route['chat']                                  = 'Site/chat';


#NEWSLLETER
$route['assinar-newsletter']                    = 'Site/assinar_newsletter';

#AUTH
$route['inautenticar']                          = 'Site/inautenticar';
$route['autenticar']                            = 'Site/autenticar';
