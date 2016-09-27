<?php

class agenda_model extends CI_Model {

    function obterTodasAgenda() {
        return $this->db->get_where("agenda", array("status_agenda" => 1));
    }

}
