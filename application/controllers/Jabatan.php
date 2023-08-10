<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('jabatan_model');
  	}
	
	public function index()
	{
		$data['title'] = 'Jabatan';
		$data['jabatan'] = $this->jabatan_model->data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('jabatan/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
        $data['title'] = 'Jabatan';
		 //data untuk select
		$data['peserta'] = $this->jabatan_model->tampil_data();

		$data['jbtn'] = $this->jabatan_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('jabatan/form_tambah');
		$this->load->view('templates/footer');
    }

	public function cari(){
        $nip = $_GET['nip'];
        $cari = $this->jabatan_model->cari($nip)->result();
        echo json_encode($cari);
    }
	
	public function proses_tambah()
	{
	
		$nip = $this->input->post('nip');
		$nama = 	$this->input->post('nama');
		$namajabatan = 	$this->input->post('nama_jabatan');
        $status = 	$this->input->post('status');
		$kompteknis_gap = 	$this->input->post('kt_gap');
		$kompteknis_usulan = 	$this->input->post('kt_usulan');
		$kompmanajerial_gap = 	$this->input->post('km_gap');
		$kompmanajerial_usulan = 	$this->input->post('km_usulan');
		$kompsosialkultur_gap = 	$this->input->post('ks_gap');
		$kompsosialkultur_usulan = 	$this->input->post('ks_usulan');
		
		$data=array(
			'nip'=> $nip,
			'nama'=> $nama,
			'nama_jabatan'=> $namajabatan,
			'status'=> $status,
			'kt_gap'=> $kompteknis_gap,
			'kt_usulan'=> $kompteknis_usulan,
			'km_gap'=> $kompmanajerial_gap,
			'km_usulan'=> $kompmanajerial_usulan,
			'ks_gap'=> $kompsosialkultur_gap,
			'ks_usulan'=> $kompsosialkultur_usulan
		);

		$this->jabatan_model->tambah_data($data, 'jabatan');
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
    	redirect('jabatan');
	}

}
