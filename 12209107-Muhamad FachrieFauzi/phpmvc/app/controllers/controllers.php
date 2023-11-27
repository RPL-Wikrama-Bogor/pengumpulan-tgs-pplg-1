<?php

class controller {
    public function view($view, $data = [])
    {
    require_once '../app/view/' . $view. 'php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model. 'php';
    }
}
?>