<?php
class jabatan_model extends ci_model{

    function data()
    {
        $this->db->order_by('nip','ASC');
        return $query = $this->db->get('jabatan');
    }

    public function tambah_data($data, $table)
    {
       $this->db->insert($table, $data);
    }

    function tampil_data(){
        return $this->db->get('peserta');
    }
    
    function cari($nip){
        $query= $this->db->get_where('peserta',array('nama'=>$nip));
        return $query;
    }

}