<?php

namespace App\Controllers;

use App\Models\ModelLokasi;

class Home_user extends BaseController
{
    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
    }
    //fungsi untuk memanggil v_dashboard
    public function index()
    {
        $data = [
            'judul' => 'Home Page',
            'page' => 'user/v_home_page',
        ];
        return view('user/v_template_user', $data);
    }

    public function Home_user()
    {
        $data = [
            'judul' => 'Home',
            'page' => 'user/v_template_user',
        ];
        return view('user/v_template_user', $data);
    }

    public function Tentang()
    {
        $data = [
            'judul' => 'Tentang',
            'page' => 'user/v_tentang',
        ];
        return view('user/v_template_user', $data);
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'user/v_home_page',
        ];
        return view('user/v_template_user', $data);
    }

    public function daftarLapangan()
    {
        $data = [
            'judul' => 'Daftar Lapangan',
            'page' => 'user/v_daftar_lapangan',
            'lokasi' => $this->ModelLokasi->getAllData(),

        ];
        return view('user/v_template_user', $data);
    }
}
