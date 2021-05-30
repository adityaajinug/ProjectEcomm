<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ajaxsearch extends CI_Controller
{
  function index()
  {
    $this->load->view('ajaxsearch');
  }

  function fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('ajaxsearch_model');
    if ($this->input->post('query')) {
      $query = $this->input->post('query');
    }
    $data = $this->ajaxsearch_model->fetch_data($query);
    $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
     <tr>
       <th>No</th>
       <th>Nama Produk</th>
       <th>Harga</th>
       <th>Stok</th>
   
      </tr>
  ';
    if ($data->num_rows() > 0) {
      $no = 1;
      foreach ($data->result() as $row) {

        $output .= '
      <tr>
       <td>' . $no++ . '</td>
       <td>' . $row->nama_produk . '</td>
       <td>' . $row->harga . '</td>
       <td>' . $row->stok . '</td>

      </tr>
    ';
      }
    } else {
      $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
    }
    $output .= '</table>';
    echo $output;
  }
}



// Ajaxsearch_model.php - Models
