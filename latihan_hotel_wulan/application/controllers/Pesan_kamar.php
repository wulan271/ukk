<?php

class pesan_kamar extends CI_Controller
{
    function index()
    {
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
        $this->load->view('content/pesan_kamar');
        $this->load->view('partial_home/footer');
    }
    function pesan_kamar_ini()
    {
        $data['tbl_transaksi']= $this->M_transaksi->SemuaData();
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
        $this->load->view('content/pesan_kamar_ini',$data);
        $this->load->view('partial_home/footer');
    }
    function proses_pesan_kamar()
    {
        $add =[
            'jenis_id' => $this->input->post('jenis_id'),
            'atas_nama' => $this->input->post('atas_nama'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_sewa' => $this->input->post('waktu_sewa'),
            'kamar_id' => $this->input->post('kamar_id'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
        ];
        $this->db->insert('tbl_transaksi', $add);
        redirect(base_url('index.php/pesan_kamar'));
    }
}
