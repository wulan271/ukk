<?php

class Profile extends CI_Controller
{
    function index(){
        $user = $this->session->userdata('email');
        // ptint_r($user);xewsqsaq
        $data['user'] = $this->db->get_where('tbl_user', ['email'=>$user])->row_array();        
    $this->load->view('partial_home/header');
    $this->load->view('partial_home/navigasi');
    $this->load->view('content/profile', $data);
    // $this->load->view('content/room');
    $this->load->view('partial_home/footer');
    $this->load->view('partial_home/modals');
    $this->load->view('partial_home/js');

    }
    public function update_profile(){
    $user =$this->session->userdata('email');
    
    $data ['user'] = $this->db->get_where('tbl_user',['email' => $user])->row_array();

    $this->load->view('content/update_profile', $data);
    $this->load->view('partial_home/header');
    $this->load->view('partial_home/navigasi');
    $this->load->view('partial_home/modals');
    $this->load->view('partial_home/js');
    $this->load->view('partial_home/footer');

}
function proses_update_profile(){
    $email        =$this->input->post('email');
    $password     =$this->input->post('password');
    $password     =md5($password);
    $nama_lengkap =$this->input->post('nama_lengkap');
    $no_hp        =$this->input->post('no_hp');

    $data =array(
        'email'  =>$email,
        'password'=>$password,
        'nama_lengkap'=>$nama_lengkap,
        'no_hp'=>$no_hp
    );

    $where =array(
        'email' => $email
    );
    $this->db->where($where);
    $this->db->update('tbl_user', $data);
    redirect(base_url("index.php/profile"));
}function ganti_password(){
    $user =$this->session->userdata('email');
    $data ['user'] = $this->db->get_where('tbl_user',['email' => $user])->row_array();

    $this->load->view('content/ganti_password', $data);
    $this->load->view('partial_home/header');
    $this->load->view('partial_home/navigasi');
    $this->load->view('partial_home/modals');
    $this->load->view('partial_home/js');
    $this->load->view('partial_home/footer');
}
function proses_ganti_password(){
         $email  =$this->input->post('email');
         $password1 =$this->input->post('password1');
         $password2 =$this->input->post('password2');

         if ($password1== $password2) {

            $password = md5($password1);

            $data = array(
                'password' => $password1

            );

            $where = array(
                'email' =>$email

            );

            $this->db->where($where);
            $this->db->update('tbl_user', $data);
            redirect(base_url("index.php/profile"));

        }else{
            echo"password tidak sama";
            redirect(base_url("index.php/profile/ganti_password"));
            
        }

    }
}