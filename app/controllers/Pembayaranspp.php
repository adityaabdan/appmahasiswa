<?php
class Pembayaranspp extends Controller
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
        $data['title'] = 'Data Pembayaran Spp';
        $data['pembayaranspp'] = $this->model('PembayaransppModel')->getAllPembayaranspp();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pembayaranspp/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Pemabayaran Spp';
        $data['pembayaranspp'] = $this->model('PembayaransppModel')->cariPembayaranspp();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pembayaranspp/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Pembayaran Spp';
        $data['pembayaranspp'] = $this->model('PembayaransppModel')->getPembayaransppById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pembayaranspp/edit', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Pembayaran Spp';
        $data['pembayaranspp'] = $this->model('PembayaransppModel')->getAllPembayaranspp();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pembayaranspp/create', $data);
        $this->view('templates/footer');
    }

    public function simpanPembayaranspp()
    {
        if ($this->model('PembayaransppModel')->tambahPembayaranspp($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/pembayaranspp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/pembayaranspp');
            exit;
        }
    }

    public function updatePembayaranspp()
    {
        if ($this->model('PembayaransppModel')->updateDataPembayaranspp($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/pembayaranspp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/pembayaranspp');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('PembayaransppModel')->deletePembayaranspp($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/pembayaranspp');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/pembayaranspp');
            exit;
        }
    }
}
