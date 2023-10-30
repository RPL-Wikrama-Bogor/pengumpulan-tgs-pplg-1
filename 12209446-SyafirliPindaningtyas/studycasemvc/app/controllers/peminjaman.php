<?php 

class Peminjaman extends Controller {
    public function index() 
    {
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() 
    {
        $data['judul'] = 'Tambah Peminjaman';
        $this->view('templates/header', $data);
        $this->view('peminjaman/create');
        $this->view('templates/footer');
    }

    public function simpanPeminjaman() 
    {
        $tgl = $_POST['tgl_pinjam'];
        $tgl1 = date('Y-m-d H:i:s', strtotime('+2 days', strtotime($tgl)));
        $_POST['tgl_kembali'] = $tgl1;
        $status = 'belum kembali';
        $_POST['status'] = $status;


        if ($this->model('PeminjamanModel')->tambahPeminjaman($_POST) > 0) {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
        }else {
            header('location: ' . BASE_URL . '/peminjaman/index');
            exit;
    } }

    public function edit($id) {

        $data['judul'] = 'Edit Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjaman() 
    {
        $status = 'sudah kembali';
        $_POST['status'] = $status;
        if ( $this->model('PeminjamanModel')->updateDataPeminjaman($_POST) > 0) {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location: '. BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('PeminjamanModel')->deletePeminjaman($id) > 0) {
            header ('location: '. BASE_URL . '/peminjaman/index');
            exit;
        } else {
            header('location:'. BASE_URL . '/peminjaman/index');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cariPeminjaman($_POST['search']);
        $this->view('templates/header', $data);
        $this->view('Peminjaman/index', $data);
        $this->view('templates/footer');
    }
    
}
?>