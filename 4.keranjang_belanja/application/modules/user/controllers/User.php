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
		$data['head'] = "E-Comm";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// modules::run('templates/Templates');
		$this->load->view('templates/_partials/header_web', $data);
		// $this->load->view('_partials/sidebar');
		$this->load->view('templates/_partials/topbar_web');
		$this->load->view('index');
		$this->load->view('templates/_partials/footer_web');
		// $this->load->view('Templates/_partials/header', $data);
		// $this->load->view('Templates/_partials/sidebar');
		// $this->load->view('Templates/_partials/topbar');
		// $this->load->view('Admin/index');
		// $this->load->view('Templates/_partials/footer');
	}
}
