<?php
    class M_UserList extends CI_Model
    {
        public function get_all_user(){
            return $this->db->get('tb_user')->result();
        }
    }
    
?>