<?php
class PembayaransppModel
{
    private $table = 'pembayaranspp';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPembayaranspp()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getPembayaransppById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahPembayaranspp($data)
    {
        $query = "INSERT INTO pembayaranspp(nama_mahasiswa,npm_mahasiswa,fakultas,spp) VALUES (:nama_mahasiswa, :npm_mahasiswa, :fakultas, :spp)";
        $this->db->query($query);
        $this->db->bind('nama_mahasiswa', $data['nama_mahasiswa']);
        $this->db->bind('npm_mahasiswa', $data['npm_mahasiswa']);
        $this->db->bind('fakultas', $data['fakultas']);
        $this->db->bind('spp', $data['spp']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPembayaranspp($data)
    {
        $query = 'UPDATE pembayaranspp SET nama_mahasiswa=:nama_mahasiswa, npm_mahasiswa=:npm_mahasiswa, fakultas=:fakultas, spp=:spp WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_mahasiswa', $data['nama_mahasiswa']);
        $this->db->bind('npm_mahasiswa', $data['npm_mahasiswa']);
        $this->db->bind('fakultas', $data['fakultas']);
        $this->db->bind('spp', $data['spp']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePembayaranspp($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariPembayaranspp()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_mahasiswa LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
