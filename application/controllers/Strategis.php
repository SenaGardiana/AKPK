<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strategis extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('strategis_model');
  	}
	
	public function index()
	{
		$data['title'] = 'Strategis';
		$data['peserta'] = $this->strategis_model->data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
        $data['title'] = 'Strategis';
		 //data untuk select
		$data['strategis'] = $this->strategis_model->data()->result();

		$data['strgs'] = $this->strategis_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/form_tambah1');
		$this->load->view('templates/footer');
    }

	public function tambah2()
	{
        $data['title'] = 'Strategis';
		 //data untuk select
		$data['strategis'] = $this->strategis_model->data()->result();

		$data['strgs'] = $this->strategis_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/form_tambah2');
		$this->load->view('templates/footer');
    }

	public function tambah3()
	{
        $data['title'] = 'Strategis';
		 //data untuk select
		$data['strategis'] = $this->strategis_model->data()->result();

		$data['strgs'] = $this->strategis_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/form_tambah3');
		$this->load->view('templates/footer');
    }

	public function tambah4()
	{
        $data['title'] = 'Strategis';
		 //data untuk select
		$data['strategis'] = $this->strategis_model->data()->result();

		$data['strgs'] = $this->strategis_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/form_tambah4');
		$this->load->view('templates/footer');
    }

	public function tambah5()
	{
        $data['title'] = 'Strategis';
		 //data untuk select
		$data['strategis'] = $this->strategis_model->data()->result();

		$data['strgs'] = $this->strategis_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('strategis/form_final');
		$this->load->view('templates/footer');
    }

}
