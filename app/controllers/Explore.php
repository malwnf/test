<?php

class Explore extends Controller {
    public function index()
    {
        $data['judul'] = 'Explore Jobs';
        $this->view('components/header', $data);
        $this->view('explore/index');
        $this->view('components/footer');
    }
}