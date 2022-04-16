<?php

class M_user extends  CI_Model{
    function SemuaData(){
        return $this->db->get('tbl_user')->result_array();
    }
    function update($id_user){
        return $this->db->get_where('tbl_user',['id_user'=>$id_user])->row_array();
    }
    function hapus($id_user){
        $this->db->where('id_user',$id_user);
        $this->db->delete('tbl_user');
    }
}