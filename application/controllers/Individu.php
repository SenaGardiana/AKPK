<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individu extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('individu_model');
  	}
	
	public function index()
	{
		$data['title'] = 'Individu';
		$data['individu'] = $this->individu_model->data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('individu/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
        $data['title'] = 'Individu';
		 //data untuk select
		//$data['peserta'] = $this->individu_model->data()->result();

		$data['indvd'] = $this->individu_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('individu/form_tambah');
		$this->load->view('templates/footer');
    }
	
	function get_autofill()
	{
		$data['title'] = 'Individu';
		if (isset($_GET['term'])){
			$result = $this->induvidu_model->search_nip($_GET['term']);
			if (count ($result) > 0){
				foreach ($result as $row)
					$arr_result[] = $row -> nip;
					echo json_encode ($arr_result);
				
			}
		}
	}

	public function proses_tambah()
	{
	
		$nip = $this->input->post('nip');
		$nama = 	$this->input->post('nama');
		$namajabatan = 	$this->input->post('nama_jabatan');
        $status = 	$this->input->post('status');
		$materipelatihan_umum = 	$this->input->post('materi_pelatihan_umum');
		$gap_kinerja = 	$this->input->post('gap_kinerja');
		
		$data=array(
			'nip'=> $nip,
			'nama'=> $nama,
			'nama_jabatan'=> $namajabatan,
			'status'=> $status,
			'materi_pelatihan_umum'=> $materipelatihan_umum,
			'gap_kinerja'=> $gap_kinerja
		);

		$this->individu_model->tambah_data($data, 'individu');
		$this->session->set_flashdata('Pesan','
		<script>
		$(document).ready(function() {
			swal.fire({
				title: "Berhasil ditambahkan!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
		});
		</script>
		');
    	redirect('individu');
	}

}
