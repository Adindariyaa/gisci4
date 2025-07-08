<?php

namespace App\Controllers;

use App\Models\ModelLokasi;


class User extends BaseController
{
    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
    }
    public function index()
    {
        $data = [
            'judul' => 'User',
            'lokasi' => $this->ModelLokasi->getAllData(), // ini ditambahkan
            'daftar' => $this->ModelLokasi->paginate(6),
            'pager' => $this->ModelLokasi->pager,
        ];
        return view('user/home', $data);
    }



    public function viewDetail($id)
    {
        $lokasi = $this->ModelLokasi->find($id); // ambil data berdasarkan ID

        if (!$lokasi) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data dengan ID $id tidak ditemukan.");
        }

        $data = [
            'judul' => 'View Detail',
            'lokasi' => $lokasi,
        ];

        return view('user/viewDetail', $data);
    }


    public function daftarLapangan()
    {
        $modelKecamatan = new ModelLokasi();

        // Ambil nilai filter dari form GET
        $filter_kecamatan = $this->request->getGet('kecamatan');
        $max_harga = $this->request->getGet('max_harga');

        $builder = $this->ModelLokasi;

        // Terapkan filter jika ada
        if (!empty($filter_kecamatan)) {
            $builder = $builder->where('kecamatan', $filter_kecamatan);
        }
        if (!empty($max_harga)) {
            $builder = $builder->where('harga_sewa <=', $max_harga);
        }

        $data = [
            'judul' => 'Daftar Lapangan',
            'daftar' => $builder->paginate(6),
            'pager' => $this->ModelLokasi->pager,
            'kecamatan' => $modelKecamatan->findAll(),
            'filter_kecamatan' => $filter_kecamatan,
            'max_harga' => $max_harga,
            'page' => 'user/daftar_lapangan'
        ];

        return view('user/home', $data);
    }


    
}
