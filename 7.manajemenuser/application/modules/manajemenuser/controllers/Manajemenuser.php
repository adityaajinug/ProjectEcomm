<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manajemenuser extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }


  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['head'] = 'Login';
      $this->load->view('templates/login/header', $data);
      $this->load->view('login/index');
      $this->load->view('templates/login/footer');
    } else {
      $this->_login();
    }
  }
  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if ($user) {
      // cek password
      if (password_verify($password, $user['password'])) {
        $data = [
          'email' => $user['email'],
          'role_id' => $user['role_id']
        ];
        $this->session->set_userdata($data);
        if ($user['role_id'] == 1) {
          redirect('manajemenuser/admin/dashboard');
        } else {
          redirect('manajemenuser/gudang/dashboard');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('manajemenuser');
      }
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kamu telah logout!</div>');
    redirect('manajemenuser');
  }
  public function reg()
  {
    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'email sudah digunakan!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
      'matches' => 'Password tidak sama!',
      'min_length' => 'Password terlalu pendek!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['head'] = 'Register';
      // modules::run('templates/Templates');
      $this->load->view('templates/login/header', $data);
      $this->load->view('login/register');
      // modules::run('templates/Templates');
      $this->load->view('templates/login/footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'img' => 'default.jpg',
        'role_id' => 2,
        'date_created' => time()

      ];
      $this->db->insert('user', $data);

      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Akun sudah terdaftar!. Silahkan Login
    </div>');
      redirect('manajemenuser/index');
    }
  }
}
