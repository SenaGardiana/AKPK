<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('download');
	$this->load->helper('cookie');
	$this->load->model('Usulan_model');
	$this->load->model('strategis_model');
	$this->load->model('jabatan_model');
	$this->load->model('dashboard_model');
	$this->load->model('user_model');
  }
	
	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');

	}

}
