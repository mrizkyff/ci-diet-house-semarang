<?php 
    class M_Profile extends CI_Model{
        public function get_profile($id){
            $this->db->where('id_user',$id);
            return $this->db->get('tb_user')->row();
        }
        public function update($id,$data){
            $this->db->where('id_user',$id);
            return $this->db->update('tb_user',$data);
        }
    }
?>