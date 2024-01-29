<?php
class SppModel
{
    private $table = 'spp';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSpp()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getSppById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahSpp($data)
    {
        $query = "INSERT INTO spp(Biaya,Fakultas) VALUES (:Fakultas, :Biaya)";
        $this->db->query($query);
        $this->db->bind('Biaya', $data['Biaya']);
        $this->db->bind('Fakultas', $data['Fakultas']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSpp($data)
    {
        $query = 'UPDATE spp SET Biaya=:Biaya, Fakultas=:Fakultas WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('Biaya', $data['Biaya']);
        $this->db->bind('Fakultas', $data['Fakultas']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteSpp($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariSpp()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Biaya LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
