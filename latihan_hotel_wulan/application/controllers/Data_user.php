<?php
class Data_user extends CI_Controller
{
    function index()
    {
     $data['tbl_user']= $this->M_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/data_user',$data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_data(){
        $data['tbl_user']= $this->M_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/tambah_data_user',$data);
        $this->load->view('partial_admin/footer'); 

    }
    function proses_tambah_data(){
        $add =[
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_hp' => $this->input->post('no_hp'),
            'hak_akses' => $this->input->post('hak_akses'),
        ];
        $this->db->insert('tbl_user', $add);
        redirect(base_url('index.php/data_user'));
    }
    function update_data($id_user){
        $data['tbl_user']= $this->M_user->update($id_user);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('partial_admin//js');
        $this->load->view('content_admin/update_data_user',$data);
        $this->load->view('partial_admin/footer');
        
    }
    function proses_update_data()
    {
        $data =[
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_hp' => $this->input->post('no_hp'),
            'hak_akses' => $this->input->post('hak_akses'),
            
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tbl_user',$data);
        redirect(base_url('index.php/data_user'));
    }
    function hapus_data($id_user){
        $this->M_user->hapus($id_user);
        redirect(base_url('index.php/data_user'));
    }
        


    

}    

        
        

        
        

        

