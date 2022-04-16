<?php

class M_transaksi extends  CI_Model{
    function SemuaData(){
        return $this->db->get('tbl_transaksi')->result_array();
    }
    function update($id_transaksi){
        return $this->db->get_where('tbl_transaksi',['id_transaksi'=>$id_transaksi])->row_array();
    }
    function hapus($id_transaksi){
        $this->db->where('id_transaksi',$id_transaksi);
        $this->db->delete('tbl_transaksi');
    }
}