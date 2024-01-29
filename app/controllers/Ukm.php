<?php
class Ukm extends Controller
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
        $data['title'] = 'Data Ukm';
        $data['ukm'] = $this->model('UkmModel')->getAllUkm();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('ukm/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ukm';
        $data['ukm'] = $this->model('UkmModel')->getAllUkm();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('ukm/create', $data);
        $this->view('templates/footer');
    }

    public function simpanUkm()
    {
        if ($this->model('UkmModel')->tambahUkm($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/ukm');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/ukm');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Ukm';
        $data['ukm'] = $this->model('UkmModel')->getAllUkm();
        $data['ukm'] = $this->model('UkmModel')->getUkmById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('ukm/edit', $data);
        $this->view('templates/footer');
    }

    public function updateUkm()
    {
        if ($this->model('UKmModel')->updateDataUkm($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/ukm');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/ukm');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('UkmModel')->deleteUkm($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/ukm');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/ukm');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Data Ukm';
        $data['ukm'] = $this->model('UkmModel')->cariUkm();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('ukm/index', $data);
        $this->view('templates/footer');
    }

    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('buku/lihatlaporan', $data);
    }



}
