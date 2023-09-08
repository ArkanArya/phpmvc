<?php
class Jurusan_model
{
    private $table = 'kompetensi_keahlian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }    
    public function getAllJurusan()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getJurusanById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table. ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultSingle();
    }
    public function tambahData()
    {
        $query =" INSERT INTO kompetensi_keahlian VALUES ('', :jurusan ) ";
        $this->db->query($query);
        $this->db->bind('jurusan', $_POST['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataJurusan($id)
    {
        $query =" DELETE FROM kompetensi_keahlian WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataJurusan($data)
    {
    $query = "UPDATE kompetensi_keahlian SET
        jurusan = :jurusan
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}