<?php

class BukuModel{
  private $table = 'tb_buku';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  public function getAllBuku(){
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->resultSet();
  }
  public function getBukuById($id){
    $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
    $this->db->bind('id',$id);
    return $this->db->single();
  }
  public function getBukuByName(){
    $name = $_POST['name'];
    $this->db->query("SELECT * FROM ". $this->table ." WHERE judul LIKE :name");
    $this->db->bind('name',"%$name%");
    return $this->db->resultSet();
  }
  public function tambahBuku($data){
    $query = "INSERT INTO tb_buku (judul, penulis, peminjam, tgl_pinjam) VALUES (:judul, :penulis, :peminjam, :tgl_pinjam)";
    $this->db->query($query);
    $this->db->bind('judul',$data['judul']);
    $this->db->bind('penulis',$data['penulis']);
    $this->db->bind('peminjam',$data['peminjam']);
    $this->db->bind('tgl_pinjam',$data['tgl_pinjam']);
    $this->db->execute();

    return $this->db->rowCount();
  }
  public function updateDataBuku($data){
    $query = 'UPDATE tb_buku SET judul=:judul, penulis=:penulis, peminjam=:peminjam, tgl_pinjam=:tgl_pinjam, tgl_selesai=:tgl_selesai WHERE id=:id';
    $this->db->query($query);
    $this->db->bind('id',$data['id']);
    $this->db->bind('judul',$data['judul']);
    $this->db->bind('penulis',$data['penulis']);
    $this->db->bind('peminjam',$data['peminjam']);
    $this->db->bind('tgl_pinjam',$data['tgl_pinjam']);
    $this->db->bind('tgl_selesai',$data['tgl_selesai']);
    $this->db->execute();

    return $this->db->rowCount();
  }
  public function deleteBuku($id){
    $this->db->query('DELETE FROM '. $this->table . ' WHERE id=:id');
    $this->db->bind('id',$id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}