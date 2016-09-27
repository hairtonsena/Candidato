<?php

class usuario_model extends CI_Model {

    // Função para verificar os dados do professor para logar.
    function obterUsuarioLogin($dados) {
        return $this->db->get_where('usuario', array('email_usuario' => $dados['email_usuario'], 'senha_usuario' => $dados['senha_usuario']));
    }

    // Função para pegar o prefessor pelo id;
    function obter_professor_id($id_usuario) {
        return $this->db->get_where('usuario', array('id_usuario' => $id_usuario));
    }

    // Função para salvar os dados alterado do professor 
    function alterar_dados($dados, $id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario', $dados);
    }

}

?>
