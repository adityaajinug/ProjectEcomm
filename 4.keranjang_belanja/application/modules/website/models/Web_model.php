<?php
class Web_model extends CI_Model
{

  public function getprod()
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->order_by('id_produk', 'desc');
    $this->db->limit('4');
    return $this->db->get('tbl_produk')->result_array();
  }
  public function getprodall()
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->order_by('id_produk', 'desc');
    return $this->db->get('tbl_produk')->result_array();
  }
  public function prodId($id)
  {
    return $this->db->get_where('tbl_produk', ['id_produk' => $id])->row_array();
  }
  public function getsimilarprod()
  {
    // $model_name = array('nama_produk' => 'Laptop');
    $sql = 'SELECT tbl_produk.*
        FROM tbl_produk
        JOIN tbl_kategori ON  tbl_kategori.id = tbl_produk.kategori
        WHERE tbl_kategori.id != ' . $this->db->escape('nama_produk');
    return $this->db->query($sql)->result_array(static::class); //return related products arra
  }
  public function detail_prod($id)
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->where('id_produk', $id);
    return $this->db->get('tbl_produk')->row_array();
  }
  public function getkat()
  {
    return $this->db->get('tbl_kategori')->result_array();
  }
  public function getperkat($id)
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->where('id', $id);
    return $this->db->get('tbl_produk')->result_array();
  }
  public function tambah_pelanggan($data)
  {
    $this->db->insert('tbl_pelanggan', $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_order($data)
  {
    $this->db->insert('tbl_order', $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_detail_order($data)
  {
    $this->db->insert('tbl_detail_order', $data);
  }
}
