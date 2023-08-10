<?php
class individu_model extends ci_model{

    function data()
    {
        $this->db->order_by('nip','ASC');
        return $query = $this->db->get('individu');
    }

    public function tambah_data($data, $table)
    {
       $this->db->insert($table, $data);
    }

    function search_nip($title)
  {
    $this->db->like('nip',$title);
	$this->db->order_by('nip','ASC');
	$this->db->limit(10);
	return $this->db->get('peserta')->result();
  }
}