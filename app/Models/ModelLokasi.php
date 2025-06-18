<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table = 'tbl_lokasi'; // pastikan tabelnya sesuai

    public function insertData($data)
    {
        $this->db->table($this->table)->insert($data);
    }

    public function getAllData()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }
}
