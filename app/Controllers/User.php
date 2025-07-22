<?php

namespace App\Controllers;

use App\Models\ModelLokasi;


class User extends BaseController
{
    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
        helper('url');
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $filter_kecamatan = $this->request->getGet('kecamatan');
        $max_harga = $this->request->getGet('max_harga');

        $model = $this->ModelLokasi;

        // Buat query dasar untuk filter
        $builder = $model->getFilteredQuery($keyword, $filter_kecamatan, $max_harga);

        // Clone builder untuk map
        $builderForMap = clone $builder;
        $dataForMap = $builderForMap->get()->getResultArray();

        // Pagination
        $page = (int) ($this->request->getGet('page') ?? 1);
        $perPage = 6;
        $offset = ($page - 1) * $perPage;

        $total = $builder->countAllResults(false);
        $pagedData = $builder->limit($perPage, $offset)->get()->getResultArray();

        $pager = \Config\Services::pager();
        $pager->makeLinks($page, $perPage, $total, 'default_full');

        $data = [
            'judul' => 'User',
            'daftar' => $pagedData,
            'semua_data' => $dataForMap,
            'pager'  => $pager,
            'keyword' => $keyword,
            'kecamatanList' => $model->distinct()->select('kecamatan')->findAll(),
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
        $keyword = $this->request->getGet('keyword');
        $filter_kecamatan = $this->request->getGet('kecamatan');
        $max_harga = $this->request->getGet('max_harga');

        $model = $this->ModelLokasi;
        $builder = $model->getFilteredQuery($keyword, $filter_kecamatan, $max_harga);

        $data = [
            'judul' => 'Daftar Lapangan',
            'daftar' => $builder->get()->getResultArray(), // Tampilkan semua data hasil filter
            'kecamatan' => $model->distinct()->select('kecamatan')->findAll(),
            'filter_kecamatan' => $filter_kecamatan,
            'max_harga' => $max_harga,
            'keyword' => $keyword,
            'page' => 'user/daftar_lapangan'
        ];

        return view('user/home', $data);
    }
}
