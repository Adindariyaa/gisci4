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
    $query = $this->db->table($this->table)
        ->select('TRIM(LOWER(kecamatan)) AS kecamatan')
        ->where('kecamatan !=', '')
        ->groupBy('TRIM(LOWER(kecamatan))')
        ->get();

    return $query->getNumRows();
}

    public function getFilteredQuery($keyword = null, $kecamatan = null, $max_harga = null)
    {
        $builder = $this->builder();

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('LOWER(nama_lokasi)', strtolower($keyword))
                ->orLike('LOWER(alamat_lokasi)', strtolower($keyword))
                ->orLike('LOWER(kecamatan)', strtolower($keyword))
                ->groupEnd();
        }

        if (!empty($kecamatan)) {
            $builder->where('kecamatan', $kecamatan);
        }

        if (!empty($max_harga)) {
            $builder->where('harga_sewa <=', $max_harga);
        }

        return $builder;
    }
}
