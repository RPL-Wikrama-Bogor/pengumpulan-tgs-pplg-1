<?php

class Peminjaman extends Controller{

  public function index(){
    $data['judul'] = 'Data Peminjaman';
    $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
    $this->view('templates/header', $data);
    $this->view('peminjaman/index', $data);
    $this->view('templates/footer', $data);
  }

  public function tambah(){
    $data['judul'] = 'Tambah Peminjaman';
    $this->view('templates/header', $data);
    $this->view('peminjaman/create');
    $this->view('templates/footer');
  }

  public function simpanPeminjaman(){
    if($this->model('PeminjamanModel')->tambahPeminjaman($_POST) > 0){
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    }else{
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    }
  }

  public function edit($id){
    $data['judul'] = 'Edit Peminjaman';
    $data['peminjaman'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
    $this->view('templates/header', $data);
    $this->view('peminjaman/edit', $data);
    $this->view('templates/footer');
  }

  public function updatePeminjaman(){
    if($this->model('PeminjamanModel')->updatePeminjaman($_POST) > 0){
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    } else{
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    }
  }

  public function hapus($id){
    if($this->model('PeminjamanModel')->deletePeminjaman($id) > 0){
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    } else{
      header('location: ' . BASE_URL . '/peminjaman');
      exit;
    }
  }

  public function cari(){
    $data['judul'] = 'Data Peminjaman';
    $data['peminjaman'] = $this->model('PeminjamanModel')->cariDataPeminjaman();
    $this->view('templates/header', $data);
    $this->view('peminjaman/index', $data);
    $this->view('templates/footer', $data);
  }
}