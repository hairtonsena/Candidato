<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pratileira_model
 *
 * @author hairton
 */
class blog_model extends CI_Model {


    function obterTodosPosts() {
        $this->db->order_by("id_post","desc");
        return $this->db->get_where('post',array("status_post"=>1));
    }

    function obterPostId($id_post){
        return $this->db->get_where("post",array("id_post"=>$id_post));
    }
}

?>
