<?php
class Spp extends Controller
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
        $data['title'] = 'Data Spp';
        $data['spp'] = $this->model('SppModel')->getAllSpp();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('spp/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Spp';
        $data['spp'] = $this->model('SppModel')->cariSpp();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('spp/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Spp';
        $data['spp'] = $this->model('SppModel')->getSppById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('spp/edit', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Spp';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('spp/create', $data);
        $this->view('templates/footer');
    }

    public function simpanSpp()
    {
        if ($this->model('SppModel')->tambahSpp($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/spp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/spp');
            exit;
        }
    }

    public function updateSpp()
    {
        if ($this->model('SppModel')->updateDataSpp($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/spp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/spp');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('SppModel')->deleteSpp($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/spp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/spp');
            exit;
        }
    }
}
