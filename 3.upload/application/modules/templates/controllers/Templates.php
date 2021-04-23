<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templates extends CI_Controller
{
  public function header()
  {
    $this->load->view('header');
  }
  public function footer()
  {
    $this->load->view('footer');
  }
}
