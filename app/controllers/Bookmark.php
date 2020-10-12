<?php

class Bookmark extends Controller {
    public function index()
    {
        $data['judul'] = 'Saved Jobs';
        $this->view('components/header', $data);
        $this->view('bookmark/index');
        $this->view('components/footer');
    }
}