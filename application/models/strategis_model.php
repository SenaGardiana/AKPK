<?php
class strategis_model extends ci_model{

    function data()
    {
        $this->db->order_by('nip','ASC');
        return $query = $this->db->get('peserta');
    }

    public function tambah_data($data, $table)
    {
       $this->db->insert($table, $data);
    }
    
}