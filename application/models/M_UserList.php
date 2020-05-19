<?php
    class M_UserList extends CI_Model
    {
        public function get_all_user(){
            return $this->db->get('tb_user')->result();
        }
        public function get_by_id($id){
            $this->db->where('id_user',$id);
            return $this->db->get('tb_user')->result();
        }
        public function update_user($where,$data){
            $this->db->where($where);
            return $this->db->update('tb_user',$data);
        }
        public function delete_user($id){
            $hasil = $this->db->delete('tb_user',array('id_user' => $id));
            return $hasil;
        }
    }
    
?>