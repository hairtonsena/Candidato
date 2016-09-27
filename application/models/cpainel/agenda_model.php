<?php

class agenda_model extends CI_Model {

    /**
     * funcão para pegar todos os lembretes que estão no banco de dados.
     */
    public function obter_todos_agendas() {
        $this->db->order_by("status_agenda","desc");
        return $this->db->get('agenda');
    }

    /**
     * Função para retorna um lembrete pelo id
     * @param int $id_agenda
     * @return um lembrete
     */
    public function obter_agenda_por_id($id_agenda) {
        return $this->db->get_where('agenda',array('id_agenda'=>$id_agenda));
    }

    /**
     * Função para salvar o lembrete.
     * @param type $agenda Conjunto de dados do lembrete
     */
    public function salvar_agenda($agenda) {
        $this->db->insert("agenda", $agenda);
    }

    /**
     * Função para fazer o update do lambrete.
     * @param Array $dados
     * @param int $id_agenda
     */
    public function alterar_agenda($dados, $id_agenda){
        $this->db->where("id_agenda",$id_agenda);
        $this->db->update('agenda',$dados);
        
    }
    
    public function excluir_agenda($id_agenda){
        $this->db->delete('agenda', array('id_agenda' => $id_agenda));
    }
}
