<?php

class PeminjamanModel{
  private $table = 'tb_peminjaman',
          $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getAllPeminjaman(){
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getPeminjamanById($id){
    $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahPeminjaman($data){
    $query = "INSERT INTO " . $this->table . " (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali) VALUES(:nama_peminjam, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";
    $data['tgl_kembali'] = date('Y-m-d H:i:s', strtotime($data['tgl_pinjam'] . ' +2 days'));
    $this->db->query($query);
    $this->db->bind('nama_peminjam', $data['nama_peminjam']);
    $this->db->bind('jenis_barang', $data['jenis_barang']);
    $this->db->bind('no_barang', $data['no_barang']);
    $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
    $this->db->bind('tgl_kembali', $data['tgl_kembali']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function updatePeminjaman($data){
    $query = "UPDATE tb_peminjaman SET nama_peminjam=:nama_peminjam, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama_peminjam', $data['nama_peminjam']);
    $this->db->bind('jenis_barang', $data['jenis_barang']);
    $this->db->bind('no_barang', $data['no_barang']);
    $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
    $this->db->bind('tgl_kembali', $data['tgl_kembali']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deletePeminjaman($id){
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataPeminjaman(){
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM tb_peminjaman WHERE nama_peminjam LIKE :keyword OR jenis_barang LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}