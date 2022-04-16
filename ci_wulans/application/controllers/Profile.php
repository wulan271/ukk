<?php
class Profile extends CI_Controller
{
    function index()
    {
        $this->load->view('v_profile');
    }
    function biodata($data1, $data2, $data3, $data4, $data5, $data6, $data7)
    {
        $data = [
            'namadepan' => $data1,
            'namabelakang' => $data2,
            'temlahir' => $data3,
            'tgllahir' => $data4,
            'jk' => $data5,
            'alm' => $data6,
            'jp' => $data7,
        ];
        $this->load->view('v_biodata', $data);
    }
    public function tambah_data()
    {
        $this->load->view('v_tambah_data');
    }
    public function action_tambah_data()
    {
        $add = [
            'namadepan' => $this->input->post('namadepan'),
            'namabelakang' => $this->input->post('namabelakang'),
            'temlahir' => $this->input->post('temlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'jk' => $this->input->post('jk'),
            'alm' => $this->input->post('alm'),
            'jp' => $this->input->post('jp'),
        ];
        $this->load->view('v_biodata', $add);
    }
    public function tampil_data()
    {
        $this->load->model('M_profile');
        $data['profile'] = $this->M_profile->tampil_data()->result();
        $this->load->view('v_tampil_data_profile', $data);
    }
    public function tambah_data_profile()
    {
        $this->load->view('tambah_data_profile_v');
    }
    public function action_tambah_data_profile(){
        $add =[
                  'nama_depan' =>$this->input->post('nama_depan'),
                  'nama_belakang' =>$this->input->post('nama_belakang'),
                  'tempat_lahir' =>$this->input->post('tempat_lahir'),
                  'tanggal_lahir' =>$this->input->post('tanggal_lahir'),
                  'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
                  'alamat' =>$this->input->post('alamat'),
                  'jenjang_pendidikan' =>$this->input->post('jenjang_pendidikan'),
                ];
                $this->db->insert('tambah_data', $add);
                redirect('../profile/tampil_data');
    }
    public function update_data($id)
    {
        $this->load->model('M_profile');
        $data['profile'] =$this->M_profile->get_data_by_id($id)->row_array();
        $this->load->view('update_data_profile_v',$data);
    }
    function action_update_data_profile(){
        $id = $this->input->post('id');
        $update  = [
            'nama_depan' =>$this->input->post('nama_depan'),
            'nama_belakang' =>$this->input->post('nama_belakang'),
            'tempat_lahir' =>$this->input->post('tempat_lahir'),
            'tanggal_lahir' =>$this->input->post('tanggal_lahir'),
            'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
            'alamat' =>$this->input->post('alamat'),
            'jenjang_pendidikan' =>$this->input->post('jenjang_pendidikan'),
          ];
        $update = $this->db->update('tambah_data', $update,['id' => $id]);
        redirect('../profile/tampil_data');
    }
    public function hapus_data($id){
        $id = $id;
        $this->db->delete('tambah_data', ['id' =>$id]);
        redirect('../profile/tampil_data');
    }


}



