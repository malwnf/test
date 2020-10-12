<?php

class Company extends Controller {
    public function index()
    {
        $data['judul'] = 'Company Profile';
        $this->view('components/header', $data);
        $this->view('company/index');
        $this->view('components/footer');
    }
}