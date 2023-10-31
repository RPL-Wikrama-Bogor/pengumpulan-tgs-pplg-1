<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'page';
        $data['gambar'] = 'adv.jpg';
        $data['nama'] = 'Abraham Motor';
        $data['pekerjaan'] = 'Pelajar';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}

?>