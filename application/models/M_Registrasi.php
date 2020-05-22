<?php
    class M_Registrasi extends CI_Model
    {
        public function save_user($data){
            return $this->db->insert('tb_user',$data);
        }
        public function createUser($data){
            $this->db->insert('tb_user',$data);
            return $this->db->affected_rows();
        }
        public function updateUser($data,$id){
            $this->db->update('tb_user',$data,['id_user' => $id]);
            return $this->db->affected_rows();
        }
    }
    
?>