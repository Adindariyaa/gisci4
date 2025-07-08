<?php

namespace App\Controllers;

use App\Models\ModelLokasi;

class Home extends BaseController
{

    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
    }

    //fungsi untuk memanggil v_dashboard
    public function index()
    {
        $lastInput = $this->ModelLokasi->getLastInputDate();
        $data = [
            'judul' => 'Dashboard',
            'page' => 'admin/v_dashboard',
            'totalLokasi' => $this->ModelLokasi->getTotal(),
            'lastInputDate' => $lastInput ? $lastInput->created_at : 'Belum ada data',
            'lokasi' => $this->ModelLokasi->getAllData(),
           'kecamatanTercakup' => $this->ModelLokasi->getWilayahTercakup()

        ];

        return view('v_template', $data);
    }

    public function login()
    {
        return view('v_login');
    }

    public function prosesLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Sementara, pakai contoh user manual
        if ($username === 'admin@gmail.com' && $password === '123') {
            return redirect()->to('/home');
        } else {
            return redirect()->to('/v_login')->with('error', 'Username atau password salah');
        }
    }


    public function viewMap()
    {
        $data = [
            'judul' => 'View Map',
            'page' => 'v_view_map',
        ];
        return view('v_template', $data);
    }
}
