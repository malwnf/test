<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Homepage';
        $this->view('components/header', $data);
        $this->view('home/index');
        $this->view('components/footer',);
    }
}