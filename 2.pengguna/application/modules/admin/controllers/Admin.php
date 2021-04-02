<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	public function index()
	{
		$data['title'] = "Login";
		modules::run('templates/Templates');
		$this->load->view('header', $data);
		modules::run('login/Login');
		$this->load->view('coba', $data);
		modules::run('templates/Templates');
		$this->load->view('footer', $data);
	}
}
