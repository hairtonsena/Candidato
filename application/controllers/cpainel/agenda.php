<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('UTC');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('cpainel/agenda_model');
    }

    protected $agenda = null;
    protected $agendas = array();
    protected $dados_conteudo = NULL;
    protected $pg_conteudo = '';

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
// verificando se o usuário está logado.
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $this->agendas = $this->agenda_model->obter_todos_agendas()->result();

        $this->dados_conteudo = array(
            "agendas" => $this->agendas
        );

        $this->pg_conteudo = 'cpainel/agenda/agenda_view';

        $this->show_tela();
    }

    //Função para exibir o formulário cadastrar uma nova noticia.
    public function nova() {
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $this->pg_conteudo = 'cpainel/agenda/form_nova_agenda_view';
        $this->show_tela();
    }

    public function salvar_agenda() {
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }
        $this->form_validation->set_rules('descricao_agenda', 'Texto agenda', 'required|trim|min_length[3]|max_length[120]');
        $this->form_validation->set_rules('data_agenda', 'Data agenda', 'required|trim|min_length[5]|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post("id_agenda")) {
                $this->alterar($this->input->post("id_agenda"));
            } else {
                $this->novo();
            }
        } else {

            $descricao_agenda = $this->input->post('descricao_agenda');

            $data_agenda = $this->input->post('data_agenda');

            $dados = array(
                "descricao_agenda" => $descricao_agenda,
                "data_agenda" => implode("-", array_reverse(explode("/", $data_agenda))),
                "status_agenda" => 0
            );


            if ($this->input->post("id_agenda")) {
                $this->agenda_model->alterar_agenda($dados, $this->input->post("id_agenda"));
            } else {
                $this->agenda_model->salvar_agenda($dados);
            }

            redirect(base_url("cpainel/agenda"));
        }
    }

    public function alterar($id_agenda = NULL) {
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        if ($id_agenda == null) {
            $id_agenda = strip_tags($this->uri->segment(4));
        }

        $this->agenda = $this->agenda_model->obter_agenda_por_id($id_agenda)->result();

        if (count($this->agenda) != 1) {
            redirect(base_url("cpainel/agenda"));
        }

        $this->dados_conteudo = array(
            "agenda" => $this->agenda
        );

        $this->pg_conteudo = "cpainel/agenda/form_alterar_agenda_view";
        $this->show_tela();
    }

    // Função para excluir um lembrete
    public function excluir() {
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $id_agenda = strip_tags($this->uri->segment(4));

        $this->agenda = $this->agenda_model->obter_agenda_por_id($id_agenda)->result();
        if (count($this->agenda) == 0) {
            $this->session->set_flashdata("mensagem", "Não foi possivel excluir.");
        } else {
            $this->agenda_model->excluir_agenda($id_agenda);
        }
        redirect(base_url("cpainel/agenda"));
    }

    public function ativar_desativar_agenda() {
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $id_agenda = strip_tags($this->uri->segment(4));

        $this->agenda = $this->agenda_model->obter_agenda_por_id($id_agenda)->result();
        if (count($this->agenda) != 0) {

            $dados = array();

            if ($this->agenda[0]->status_agenda == 0) {
                $dados["status_agenda"] = 1;
            } else {
                $dados["status_agenda"] = 0;
            }
            $this->agenda_model->alterar_agenda($dados, $this->agenda[0]->id_agenda);
        } else {
            redirect(base_url("cpainel/agenda"));
        }
        redirect(base_url("cpainel/agenda"));
    }

}

?>