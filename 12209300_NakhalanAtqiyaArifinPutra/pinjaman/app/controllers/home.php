<?php 
 class home extends controller{
    public function index(){
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
    }
 }
?>