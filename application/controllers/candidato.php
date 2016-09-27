<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Candidato extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library("uri");
        $this->load->helper('url');

        $this->load->model("blog_model");
        $this->load->model("agenda_model");
    }

    protected $titulo_pagina = "Sander ";
    protected $post = NULL;
    protected $posts = array();
    protected $agendas = array();
    protected $pg_conteudo = "";
    protected $dados_pagina = array();

    protected function show_tela() {

        $this->obter_agenda();
        $this->load->view("tela/titulo");
        $this->load->view("tela/menu");
        $this->load->view($this->pg_conteudo, $this->dados_pagina);
        $this->load->view("tela/sidebar");
        $this->load->view("tela/rodape");
    }

    public function obter_agenda() {

        $this->agendas = $this->agenda_model->obterTodasAgenda()->result();

        $this->dados_pagina["agendas"] = $this->agendas;
    }

    public function index() {

        $this->posts = $this->blog_model->obterTodosPosts()->result();

        $this->dados_pagina = array(
            "posts" => $this->posts
        );

        $this->pg_conteudo = 'home_view';

        $this->show_tela();
    }

    public function a_campanha() {

        $id_post = strip_tags($this->uri->segment(3));

        if ($id_post != NULL) {
            $this->post = $this->blog_model->obterPostId($id_post)->result();
        }

        $this->posts = $this->blog_model->obterTodosPosts()->result();


        if (count($this->post) == 0) {

            $this->dados_pagina = array(
                "posts" => $this->posts,
            );
            $this->pg_conteudo = 'blog/lista_post_view';
        } else {
            $this->dados_pagina = array(
                "post" => $this->post,
                "posts" => $this->posts
            );
            $this->pg_conteudo = 'blog/ler_post_view';
        }



        $this->show_tela();
    }

    public function atividade() {
        $id_post = $this->uri->segment(3);

        $post = $this->candidato_blog_model->obter_post_id($id_post)->result();

        $posts = $this->candidato_blog_model->obter_posts_aleatorio()->result();

        $dados = array(
            "posts" => $posts,
            "post" => $post,
            "pagina" => 'candidato/atividade_view'
        );

        $this->load->view("candidato/pagina_view", $dados);
    }

    public function projetos() {

        $this->pg_conteudo = "candidato/projetos_view";
        $this->show_tela();
    }

    public function sobre() {

        $this->pg_conteudo = "candidato/curriculum_view";
        $this->show_tela();
    }

    public function plano() {
        $dados = array(
            "pagina" => 'candidato/plano_view'
        );

        $this->load->view("candidato/pagina_view", $dados);
    }

    public function agenda() {
        $this->pg_conteudo = 'candidato/agenda_view';
        $this->show_tela();
    }

    public function contatos() {
        $this->pg_conteudo = 'candidato/contatos_view';
        $this->show_tela();
    }

    public function participe() {
        $dados = array(
            "pagina" => 'candidato/participe_view'
        );

        $this->load->view("candidato/pagina_view", $dados);
    }

    public function boato() {
        $dados = array(
            "pagina" => 'candidato/boato_view'
        );

        $this->load->view("candidato/pagina_view", $dados);
    }

}
