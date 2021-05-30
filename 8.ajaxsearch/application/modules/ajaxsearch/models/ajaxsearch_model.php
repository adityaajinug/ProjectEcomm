<?php
class Ajaxsearch_model extends CI_Model
{
  function fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("produk");
    if ($query != '') {
      $this->db->like('nama_produk', $query);
      $this->db->or_like('harga', $query);
      $this->db->or_like('stok', $query);
      $this->db->or_like('gambar', $query);
      // $this->db->or_like('Country', $query);
    }
    $this->db->order_by('id', 'DESC');
    return $this->db->get();
  }
}
