<?php

class blog_model extends CI_Model {
   
    function obter_post_id($id_post) {
        return $this->db->get_where('post', array('id_post' => $id_post));
    }
    

    function alterar_post($dados, $id_post) {
        $this->db->where('id_post', $id_post);
        $this->db->update('post', $dados);
    }

    function excluir_post($id_post) {
        $this->db->delete('post', array('id_post' => $id_post));
    }
    
    function salvar_post($dados) {
        $this->db->insert('post', $dados);
    }

    function obter_utimo_posts() {
        $this->db->select_max('id_post');
        return $this->db->get('post');
    }
    
    function obter_posts() {
        $this->db->order_by("post.data_post", "desc");
        return $this->db->get('post');
    }
}
