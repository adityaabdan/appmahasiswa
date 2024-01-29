<?php
class UkmModel
{
    private $table = 'ukm';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUkm()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getUkmById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahUkm($data)
    {
        $query = "INSERT INTO ukm(nama_ukm) VALUES (:nama_ukm)";
        $this->db->query($query);
        $this->db->bind('nama_ukm', $data['nama_ukm']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataUkm($data)
    {
        $query = 'UPDATE ukm SET nama_ukm=:nama_ukm WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_ukm', $data['nama_ukm']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteUkm($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariUkm()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_ukm LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
