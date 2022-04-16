<?php

class M_kamar extends  CI_Model{
    function SemuaData(){
        return $this->db->get('tbl_kamar')->result_array();
    }
    function update($id_kamar){
        return $this->db->get_where('tbl_kamar',['id_kamar'=>$id_kamar])->row_array();
    }
    function hapus($id_kamar){
        $this->db->where('id_kamar',$id_kamar);
        $this->db->delete('tbl_kamar');
    }
}