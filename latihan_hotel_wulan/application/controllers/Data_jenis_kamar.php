<?php
class Data_jenis_kamar extends CI_Controller
{
    function index()
    {
     $data['tbl_jenis_kamar']= $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/data_jenis_kamar',$data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_data(){
        $data['tbl_jenis_kamar']= $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/tambah_data_jenis_kamar',$data);
        $this->load->view('partial_admin/footer'); 

    }
    function proses_tambah_data(){
        $add =[
            'nama_jenis_kamar' => $this->input->post('nama_jenis_kamar'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->insert('tbl_jenis_kamar', $add);
        redirect(base_url('index.php/data_jenis_kamar'));
    }
    function update_data($id_jenis){
        $data['tbl_jenis_kamar']= $this->M_jenis_kamar->update($id_jenis);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/update_data_jenis_kamar',$data);
        $this->load->view('partial_admin/footer');
        
    }
    function proses_update_data()
    {
        $data =[
            'nama_jenis_kamar' => $this->input->post('nama_jenis_kamar'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('tbl_jenis_kamar',$data);
        redirect(base_url('index.php/data_jenis_kamar'));
    }
    function hapus_data($id_jenis){
        $this->M_jenis_kamar->hapus($id_jenis);
        redirect(base_url('index.php/data_jenis_kamar'));
    }
        


    

}    

        
        

        
        

        

