<?php

class Post extends Controller {
    public function index()
    {
        $data['judul'] = 'Post a Job';
        $this->view('components/header', $data);
        $this->view('post/index');
        $this->view('components/footer');
    }
}