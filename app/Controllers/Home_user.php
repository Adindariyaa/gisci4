<?php

namespace App\Controllers;

class Home_user extends BaseController
{
    //fungsi untuk memanggil v_dashboard
    public function index()
    {
        $data = [
            'judul' => 'Home Page',
            'page' => 'v_home_page',
        ];
        return view('v_template_user', $data);
    }

    public function Home_user()
    {
        $data = [
            'judul' => 'Home',
            'page' => 'v_template_user',
        ];
        return view('v_template_user', $data);
    }

    public function Tentang()
    {
        $data = [
            'judul' => 'Tentang',
            'page' => 'v_tentang',
        ];
        return view('v_template_user', $data);
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
        ];
        return view('v_template_user', $data);
    }

    public function viewMap()
    {
        $data = [
            'judul' => 'View Map',
            'page' => 'v_view_map',
        ];
        return view('v_template', $data);
    }

    public function baseMap()
    {
        $data = [
            'judul' => 'Base Map',
            'page' => 'v_base_map',
        ];
        return view('v_template', $data);
    }

    public function marker()
    {
        $data = [
            'judul' => 'Marker',
            'page' => 'v_marker',
        ];
        return view('v_template_user', $data);
    }

    public function circle()
    {
        $data = [
            'judul' => 'Circle',
            'page' => 'v_circle',
        ];
        return view('v_template', $data);
    }
}
