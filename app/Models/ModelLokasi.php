<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table = 'tbl_lokasi'; // Nama tabel
    protected $primaryKey = 'id_lokasi';
    protected $allowedFields = [
        'nama_lokasi',
        'alamat_lokasi',
        'latitude',
        'longitude',
        'foto_lokasi',
        'jumlah_lapangan',
        'jam_mulai',
        'jam_selesai',
        'harga_sewa',
        'harga_sewa_wk',
        'kontak_pemesanan',
        'kantin',
        'toilet',
        'parkir',
        'metode_pemesanan',
        'kecamatan' // <- ini penting!
    ];

    public function getLastInputDate()
    {
        return $this->db->table($this->table)
            ->orderBy('created_at', 'DESC') // atau sesuaikan dengan nama kolom tanggalmu
            ->limit(1)
            ->get()
            ->getRow(); // pakai getRow() karena hanya ambil satu baris
    }

    public function getTotal()
    {
        return $this->db->table($this->table)->countAll();
    }

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getWilayahTercakup()
    {
        return $this->db->table($this->table)
            ->select('kecamatan')
            ->groupBy('kecamatan')
            ->get()
            ->getNumRows();
    }
}
