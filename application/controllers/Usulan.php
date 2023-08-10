<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('Usulan_model');

  	}
	
	public function index()
	{
		$data['title'] = 'Usulan';
	
		$this->load->view('templates/header', $data);
		$this->load->view('usulan/index');
		$this->load->view('templates/footer');
    }
}