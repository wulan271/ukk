<?php
class M_profile extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tambah_data');

    }
    function get_data_by_id($id)
    
    {
        $this->db->where('id',$id);
        return $this->db->get('tambah_data');

        }
    }
    

   
    


