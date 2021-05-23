<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->library('form_validation');
    // $this->load->library('session');

  }

  public function index()
  {
    $data['head'] = "Produk";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['brg'] = $this->db->get('produk')->result_array();
    $this->load->view('templates/_partials/header', $data);
    $this->load->view('templates/_partials/sidebar_gudang');
    $this->load->view('templates/_partials/topbar');
    $this->load->view('gudang/produk/index');
    $this->load->view('templates/_partials/footer');
  }
}
