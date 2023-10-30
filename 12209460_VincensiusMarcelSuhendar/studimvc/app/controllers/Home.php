<?php

// class Home{
//     public function index($nama = "Jojo", $pekerjaan = "Pelajar"){
//         echo "Halo, nama saya $nama dan saya merupakan seorang $pekerjaan";
//     }
// }

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header',$data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}

?>