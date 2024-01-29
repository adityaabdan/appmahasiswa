<?php

class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title']  = 'Halaman About Me';
        $data['nama']   = 'Aditya Abdan Farid';
        $data['alamat'] = 'Jl Alalak Selatan RT.11 No.95';
        $data['no_hp']  = '089521763793';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
