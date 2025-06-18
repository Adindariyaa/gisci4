<?php

namespace App\Controllers;

class Home extends BaseController
{
    //fungsi untuk memanggil v_dashboard
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
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
        if ($username === 'admin@gmail.com' && $password === 'admin123') {
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
