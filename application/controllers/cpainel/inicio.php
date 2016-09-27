<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    protected $dados_conteudo = NULL;
    protected $pg_conteudo = 'cpainel/tela/inicio_view';

    protected function show_tela() {
        $this->load->view('cpainel/tela/titulo');
        $this->load->view('cpainel/tela/menu');
        $this->load->view($this->pg_conteudo, $this->dados_conteudo);
        $this->load->view('cpainel/tela/rodape');
    }

    protected function verificar_user_logado() {
        if (($this->session->userdata('id_usuario')) && ($this->session->userdata('nome_usuario')) && ($this->session->userdata('email_usuario')) && ($this->session->userdata('senha_usuario'))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function index() {

        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }
   
        $this->show_tela();
    }

}
