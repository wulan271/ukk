<?php
class Data_konsumen extends CI_Controller
{
    function index()
    {
     $data['tbl_konsumen']= $this->M_konsumen->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/data_konsumen',$data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_data(){
        $data['tbl_konsumen']= $this->M_konsumen->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/tambah_data_konsumen',$data);
        $this->load->view('partial_admin/footer'); 

    }
    function proses_tambah_data(){
        $add =[
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_tengah' => $this->input->post('nama_tengah'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'provinsi' => $this->input->post('provinsi'),
            'negara' => $this->input->post('negara'),
            'no_identitas' => $this->input->post('no_identitas'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email'),
        ];
        $this->db->insert('tbl_konsumen', $add);
        redirect(base_url('index.php/data_konsumen'));
    }
    function update_data($id_konsumen){
        $data['tbl_konsumen']= $this->M_konsumen->update($id_konsumen);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/update_data_konsumen',$data);
        $this->load->view('partial_admin/footer');
        
    }
    function proses_update_data()
    {
        $data =[
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_tengah' => $this->input->post('nama_tengah'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'provinsi' => $this->input->post('provinsi'),
            'negara' => $this->input->post('negara'),
            'no_identitas' => $this->input->post('no_identitas'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email'),
        ];
        $this->db->where('id_konsumen', $this->input->post('id_konsumen'));
        $this->db->update('tbl_konsumen',$data);
        redirect(base_url('index.php/data_konsumen'));
    }
    function hapus_data($id_konsumen){
        $this->M_konsumen->hapus($id_konsumen);
        redirect(base_url('index.php/data_konsumen'));
    }
        


    

}    

        
        

        
        

        

