<?php

class Library_model extends Controller {
    private $table = "databuku";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllLibrary() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahBuku($data)
	{
		$query = "INSERT INTO databuku (judul, kategori, jumlah) VALUES(:judul, :kategori, :jumlah)";
		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->execute();

		return $this->db->rowCount();
	}

    ###
    public function getLibraryById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function updateDataBuku($data)
	{
		$query = "UPDATE databuku SET judul=:judul, kategori=:kategori, jumlah=:jumlah WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteBuku($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}