<?php

namespace App\Controllers;

use App\Models\ModelLokasi;

class Lokasi extends BaseController
{

    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Lokasi',
            'page' => 'lokasi/v_data_lokasi',
            'lokasi' => $this->ModelLokasi->getAllData(),
        ];
        return view('v_template', $data);
    }

    public function inputLokasi()
    {
        $data = [
            'judul' => 'Input Lokasi',
            'page' => 'lokasi/v_input_lokasi'
        ];
        return view('v_template', $data);
    }

    // public function insertData()
    // {
    //     if ($this->validate([
    //         'nama_lokasi' => [
    //             'label' => 'Nama Lokasi',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'alamat_lokasi' => [
    //             'label' => 'Alamat Lokasi',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]

    //         ],
    //         'kecamatan' => [
    //             'label' => 'Kecamatan',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'latitude' => [
    //             'label' => 'Latitude',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'longitude' => [
    //             'label' => 'Longitude',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'foto_lokasi' => [
    //             'label' => 'Foto Lokasi',
    //             'rules' => 'uploaded[foto_lokasi]|max_size[foto_lokasi,1024]|mime_in[foto_lokasi,image/jpg,image/jpeg,image/png]',
    //             'errors' => [
    //                 'uploaded' => '{field} Tidak Boleh Kosong !!',
    //                 'max_size' => 'Ukuran {field} Maksimal 1024 KB !!',
    //                 'mime_in' => 'Format {field} Harus Jpg, Jpeg, Png'
    //             ]
    //         ],

    //         'jumlah_lapangan' => [
    //             'label' => 'Jumlah Lapangan',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'jam_mulai' => [
    //             'label' => 'Jam Mulai',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'jam_selesai' => [
    //             'label' => 'Jam Selesai',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'harga_sewa' => [
    //             'label' => 'Harga Sewa',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'kontak_pemesanan' => [
    //             'label' => 'Kontak Pemesanan',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ],
    //         'metode_pemesanan' => [
    //             'label' => 'Metode Pemesanan',
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Tidak Boleh Kosong !!'
    //             ]
    //         ]



    //     ])) {
    //         $foto_lokasi = $this->request->getFile('foto_lokasi');
    //         $nama_file = $foto_lokasi->getRandomName();
    //         // jika lolos validasi
    //         $kantin = $this->request->getPost('kantin') ? 1 : 0;
    //         $toilet = $this->request->getPost('toilet') ? 1 : 0;
    //         $parkir = $this->request->getPost('parkir') ? 1 : 0;

    //         $data = [
    //             'nama_lokasi' => $this->request->getPost('nama_lokasi'),
    //             'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
    //             'latitude' => $this->request->getPost('latitude'),
    //             'longitude' => $this->request->getPost('longitude'),
    //             'foto_lokasi' => $nama_file,
    //             'jumlah_lapangan' => $this->request->getPost('jumlah_lapangan'),
    //             'jam_mulai'          => $this->request->getPost('jam_mulai'),
    //             'jam_selesai'        => $this->request->getPost('jam_selesai'),
    //             'harga_sewa'         => $this->request->getPost('harga_sewa'),
    //             'kontak_pemesanan' => $this->request->getPost('kontak_pemesanan'),
    //             'kantin' => $kantin,
    //             'toilet' => $toilet,
    //             'parkir' => $parkir,
    //             'metode_pemesanan' => $this->request->getPost('metode_pemesanan'),
    //             'kecamatan'         => $this->request->getPost('kecamatan')
    //         ];
    //         //dd($data);
    //         $foto_lokasi->move('foto', $nama_file);
    //         //kirim data ke function inser data di model lokasi 
    //         $this->ModelLokasi->insert($data);
    //         //notifikasi data berhasil disimpan
    //         session()->setFlashdata('pesan', 'Data Lokasi Berhasil Di Simpan!');
    //         return redirect()->to('Lokasi/inputLokasi');
    //     } else {
    //         return redirect()->to('Lokasi/inputLokasi')->withInput();
    //     }
    // }

    public function insertData()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nama_lokasi' => 'required',
            'alamat_lokasi' => 'required',
            'kecamatan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jumlah_lapangan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'harga_sewa' => 'required',
            'kontak_pemesanan' => 'required',
            'metode_pemesanan' => 'required',
            'harga_sewa_wk' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil semua file yang diupload
        $files = $this->request->getFileMultiple('foto_lokasi');
        $fotoNames = [];
        if (!$files || !is_array($files)) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', ['foto_lokasi' => 'Foto Lokasi harus dipilih.']);
        }
        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                if (!in_array($file->getMimeType(), ['image/jpeg', 'image/jpg', 'image/png'])) {
                    return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', ['foto_lokasi' => 'Format file harus JPG, JPEG, atau PNG']);
                }
                if ($file->getSize() > 1024 * 1024) {
                    return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', ['foto_lokasi' => 'Ukuran maksimal tiap gambar 1MB']);
                }

                $newName = $file->getRandomName();
                $file->move('foto', $newName);
                $fotoNames[] = $newName;
            }
        }

        // Konversi fasilitas
        $kantin = $this->request->getPost('kantin') ? 1 : 0;
        $toilet = $this->request->getPost('toilet') ? 1 : 0;
        $parkir = $this->request->getPost('parkir') ? 1 : 0;

        $data = [
            'nama_lokasi'        => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi'      => $this->request->getPost('alamat_lokasi'),
            'latitude'           => $this->request->getPost('latitude'),
            'longitude'          => $this->request->getPost('longitude'),
            'foto_lokasi'        => implode(',', $fotoNames), // gabungkan jadi string
            'jumlah_lapangan'    => $this->request->getPost('jumlah_lapangan'),
            'jam_mulai'          => $this->request->getPost('jam_mulai'),
            'jam_selesai'        => $this->request->getPost('jam_selesai'),
            'harga_sewa'         => $this->request->getPost('harga_sewa'),
            'harga_sewa_wk'         => $this->request->getPost('harga_sewa_wk'),
            'kontak_pemesanan'   => $this->request->getPost('kontak_pemesanan'),
            'metode_pemesanan'   => $this->request->getPost('metode_pemesanan'),
            'kantin'             => $kantin,
            'toilet'             => $toilet,
            'parkir'             => $parkir,
            'kecamatan'          => $this->request->getPost('kecamatan')
        ];

        $this->ModelLokasi->insert($data);
        session()->setFlashdata('pesan', 'Data Lokasi Berhasil Disimpan!');
        return redirect()->to('Lokasi/inputLokasi');
    }


    public function pemetaanLokasi()
    {
        $data = [
            'judul' => 'Pemetaan Lokasi',
            'page' => 'lokasi/v_pemetaan_lokasi',
            'lokasi' => $this->ModelLokasi->getAllData(),
        ];
        return view('v_template', $data);
    }
    public function update($id)
    {
        $kantin = $this->request->getPost('kantin') ? 1 : 0;
        $toilet = $this->request->getPost('toilet') ? 1 : 0;
        $parkir = $this->request->getPost('parkir') ? 1 : 0;

        $data = [
            'nama_lokasi'       => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi'     => $this->request->getPost('alamat_lokasi'),
            'jumlah_lapangan'   => $this->request->getPost('jumlah_lapangan'),
            'jam_mulai'         => $this->request->getPost('jam_mulai'),
            'jam_selesai'       => $this->request->getPost('jam_selesai'),
            'harga_sewa'        => $this->request->getPost('harga_sewa'),
            'harga_sewa_wk'        => $this->request->getPost('harga_sewa_wk'),
            'kontak_pemesanan'  => $this->request->getPost('kontak_pemesanan'),
            'metode_pemesanan'  => $this->request->getPost('metode_pemesanan'),
            'kantin'            => $kantin,
            'toilet'            => $toilet,
            'parkir'            => $parkir,
            'kecamatan'         => $this->request->getPost('kecamatan')
        ];

        $this->ModelLokasi->update($id, $data);
        return redirect()->to(base_url('lokasi'))->with('pesan', 'Data berhasil diperbarui!');
    }


    public function delete($id)
    {
        $this->ModelLokasi->delete($id);
        return redirect()->to(base_url('lokasi'))->with('pesan', 'Data berhasil dihapus!');
    }

    public function detail($id)
    {
        $model = new ModelLokasi(); // Pastikan kamu sudah load model ini
        $data['lokasi'] = $model->find($id);

        if (!$data['lokasi']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('user/detail_lokasi', $data);
    }
}
