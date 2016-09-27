<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('UTC');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('form_validation');

        $this->load->model('cpainel/blog_model');
    }

    protected $post = NULL;
    protected $posts = array();
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

        $this->posts = $this->blog_model->obter_posts()->result();

        $this->dados_conteudo = array(
            "posts" => $this->posts
        );

        $this->pg_conteudo = 'cpainel/blog/posts_view';

        $this->show_tela();
    }

    public function novo_post() {

        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $this->pg_conteudo = 'cpainel/blog/form_novo_post_view';
        $this->show_tela();
    }

    public function ver_post($id_post = NULL) {
        if (!$this->verificar_user_logado()) {
            redirect(base_url('cpainel/seguranca'));
        }

        if ($id_post == NULL) {
            $id_post = $this->uri->segment(4);
        }

        $this->post = $this->blog_model->obter_post_id($id_post)->result();

        $this->dados_conteudo = array(
            "post" => $this->post
        );

        $this->pg_conteudo = "cpainel/blog/ver_post_view";
        $this->show_tela();
    }

    public function salvar_post() {

        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        $this->form_validation->set_rules('titulo', 'Título', 'required|trim|min_length[3]|max_length[250]');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post("id_post")) {
                $this->alterar_post($this->input->post("id_post"));
            } else {
                $this->novo_post();
            }
        } else {

            $titulo = $this->input->post('titulo');
            $data = date('Y:m:d');

            $text_post = $this->input->post('post');

            $dados = array(
                "titulo_post" => $titulo,
                "data_post" => $data,
                "texto_post" => $text_post,
                "status_post" => 0
            );

            if ($this->input->post("id_post")) {
                $id_post = $this->input->post("id_post");
                $this->blog_model->alterar_post($dados, $id_post);
                $post = $this->blog_model->obter_post_id($id_post)->result();

                redirect(base_url("cpainel/blog/ver_post/" . $post[0]->id_post));
            } else {

                $this->blog_model->salvar_post($dados);
                $post = $this->blog_model->obter_utimo_posts()->result();

                redirect(base_url("cpainel/blog/ver_post/" . $post[0]->id_post));
            }
        }
    }

    public function alterar_post($id_post = null) {
        // verificando se o usuário está logado.
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }

        if ($id_post == null) {
            $id_post = strip_tags($this->uri->segment(4));
        }
        $this->post = $this->blog_model->obter_post_id($id_post)->result();
        if (count($this->post) == 0) {
            redirect(base_url("cpainel/posts"));
        }

        $this->dados_conteudo = array(
            "post" => $this->post
        );

        $this->pg_conteudo = 'cpainel/blog/form_alterar_post_view';
        $this->show_tela();
    }

    public function excluir_post() {
        // verificando se o usuário está logado.
        if (!$this->verificar_user_logado()) {
            redirect(base_url("cpainel/seguranca"));
        }
        $id_post = strip_tags($this->uri->segment(4));

        $this->post = $this->blog_model->obter_post_id($id_post)->result();

        if (count($this->post) == 0) {
            redirect(base_url("cpainel/blog"));
        } else {
            $this->blog_model->excluir_post($id_post);
        }

        redirect(base_url("cpainel/blog"));
    }

    public function ativar_desativar_post() {
        if ($this->verificar_user_logado()) {
            $id_post = strip_tags($this->uri->segment(4));

            $this->post = $this->blog_model->obter_post_id($id_post)->result();

            if (count($this->post) != 0) {
                if ($this->post[0]->status_post == 0) {
                    $dados = array(
                        "status_post" => 1,
                    );
                    $this->blog_model->alterar_post($dados, $id_post);
                } else {
                    $dados = array(
                        "status_post" => 0,
                    );
                    $this->blog_model->alterar_post($dados, $id_post);
                }
                redirect(base_url("cpainel/blog/ver_post/" . $this->post[0]->id_post));
            } else {
                redirect(base_url("cpainel/blog"));
            }
        } else {
            redirect(base_url("cpainel/seguranca"));
        }
    }

}

?>