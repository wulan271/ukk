<?php

class M_konsumen extends  CI_Model{
    function SemuaData(){
        return $this->db->get('tbl_konsumen')->result_array();
    }
    function update($id_konsumen){
        return $this->db->get_where('tbl_konsumen',['id_konsumen'=>$id_konsumen])->row_array();
    }
    function hapus($id_konsumen){
        $this->db->where('id_konsumen',$id_konsumen);
        $this->db->delete('tbl_konsumen');
    }
}