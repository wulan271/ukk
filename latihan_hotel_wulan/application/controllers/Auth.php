<?php

class Auth extends CI_Controller
{
    function index(){

        $this->load->view('content/form_login');
        $this->load->view('partial_home/navigasi');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/footer');
    }
    function proses_login(){
        $email  = $this->input->post('email'); 
        $password  =$this->input->post('password');
        $password  =md5($password);

        $cek_login = $this->db->get_where('tbl_user',array('email'=>$email,'password'=> $password))->row_array();
        
        
    if($cek_login > 0){
            $data_session = array(
                'email' => $email,
                'status' =>"login",
                'hak_akses' => $cek_login['hak_akses'],
                
          
            );
            $this->session->set_userdata($data_session);
         if ($data_session['hak_akses']== 'user'){
            redirect(base_url("index.php/home"));

        }
        else{
            redirect(base_url("index.php/admin"));
        }   
    }else{
        echo "username atau password salah !";
        redirect(base_url("index.php/auth"));

    }

}
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url("index.php/home"));
    }
    function register()
    {
        
   
        $this->load->view('content/form_register');
        $this->load->view('partial_home/navigasi');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/footer');

  }
    function proses_register(){
            $email  =$this->input->post('email');
            $password  =$this->input->post('password');
            $password =md5($password);
            $nama_lengkap =$this->input->post('nama_lengkap');
            $no_hp =$this->input->post('no_hp');

            $data =array(
                'email' =>$email,
                'password' =>$password,
                'nama_lengkap' =>$nama_lengkap,
                'no_hp' =>$no_hp
            );

            $this->db->insert('tbl_user', $data);
            redirect(base_url("index.php/auth"));

            
        }

    
}

