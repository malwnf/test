<?php

class Details extends Controller {
    public function index()
    {
        $data['judul'] = 'Jobs Details';
        $this->view('components/header', $data);
        $this->view('details/index');
        $this->view('components/footer');
    }
}