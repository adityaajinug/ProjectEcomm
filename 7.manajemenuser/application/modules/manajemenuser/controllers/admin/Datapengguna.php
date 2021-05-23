<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapengguna extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->library('form_validation');
    // $this->load->library('session');

  }

  public function index()
  {
    $data['head'] = "Data Pengguna";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getuser'] = $this->db->get('user')->result_array();
    $this->load->view('templates/_partials/header', $data);
    $this->load->view('templates/_partials/sidebar');
    $this->load->view('templates/_partials/topbar');
    $this->load->view('admin/pengguna/index');
    $this->load->view('templates/_partials/footer');
  }
}
