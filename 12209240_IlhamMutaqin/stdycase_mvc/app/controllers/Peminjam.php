<?php

class Peminjam extends Controller {

    public function index(){
        $data['page'] = 'Data Peminjam';
        $data['peminjam'] = $this->model('PeminjamModel')->getAllPeminjam();
        $this->view('templates/header', $data);
        $this->view('peminjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Peminjam';
        $this->view('templates/header', $data);
        $this->view('peminjam/create');
        $this->view('templates/footer');
    }

    public function simpanPeminjam()
    {
        if( $this->model('PeminjamModel')->tambahPeminjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }

    public function edit($id){

        $data['page'] = 'Edit Peminjam';
        $data['peminjam'] = $this->model('PeminjamModel')->getPeminjamById($id);
        $this->view('templates/header', $data);
        $this->view('peminjam/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjam(){
        if( $this->model('PeminjamModel')->updateDataBuku($_POST) > 0 ) {
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }

    public function hapus($id){
        if( $this->model('PeminjamModel')->deletePeminjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }

}
?>