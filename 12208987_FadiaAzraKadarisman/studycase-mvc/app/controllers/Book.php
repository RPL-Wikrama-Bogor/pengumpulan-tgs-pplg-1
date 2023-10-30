<?php

class Book extends Controller{
    public function index()
    {
        $data['judul'] = 'Data Pinjaman';
        $data['buku'] = $this->model('BukuModel')->getAllPinjam();
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Tambah Pinjaman';
        $this->view('templates/header', $data);
        $this->view('book/create', $data);
        $this->view('templates/footer');
    }

    public function simpanPinjam(){
        if ($this->model('BukuModel')->tambahPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }else {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }
    }

    public function edit($id){
        $data['judul'] = 'Edit Pinjaman';
        $data['buku'] = $this->model('BukuModel')->getPinjamById($id);
        $this->view('templates/header', $data);
        $this->view('book/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePinjam(){
        if ($this->model('BukuModel')->updateDataPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }else {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('BukuModel')->deletePinjam($id) > 0) {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }else {
            header('location: '. BASE_URL . '/book/index');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Data Pinjaman';
        $data['buku'] = $this->model('BukuModel')->cariPinjam($_POST['search']);
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }
}
?>