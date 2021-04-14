<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		// modules::run('templates/Templates');
		$data['title'] = "Admin";
		// modules::run('templates/Templates');
		$this->load->view('_partials/header', $data);
		// $this->load->view('_partials/sidebar');
		$this->load->view('_partials/topbar');
		$this->load->view('index');
		$this->load->view('_partials/footer');
		// $this->load->view('Templates/_partials/header', $data);
		// $this->load->view('Templates/_partials/sidebar');
		// $this->load->view('Templates/_partials/topbar');
		// $this->load->view('Admin/index');
		// $this->load->view('Templates/_partials/footer');
	}
}
