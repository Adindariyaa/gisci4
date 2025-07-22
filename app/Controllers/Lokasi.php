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

        // Validasi hanya untuk input teks
        $rules = [
            'nama_lokasi'       => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'alamat_lokasi'     => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'kecamatan'         => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'latitude'          => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi',
                    'decimal' => '{field} Harus berupa angka desimal.'
                ]
            ],
            'longitude'         => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi',
                    'decimal' => '{field} Harus berupa angka desimal.'
                ]
            ],
            'foto_lokasi' => [
                'label' => 'Foto Lokasi',
                'rules' => 'uploaded[foto_lokasi]|max_size[foto_lokasi,1024]|mime_in[foto_lokasi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} wajib diunggah.',
                    'max_size' => 'Ukuran maksimal 1MB.',
                    'mime_in' => 'Format harus JPG, JPEG, atau PNG.'
                ]
            ],
            'jumlah_lapangan'   => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'jam_mulai'         => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'jam_selesai'       => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
            'harga_sewa'        => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi',
                    'numeric' => '{field} Harus berupa angka'
                ]
            ],
            'harga_sewa_wk' => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi',
                    'numeric' => '{field} Harus berupa angka'
                ]
            ],
            'kontak_pemesanan'  => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi',
                    'numeric' => '{field} Harus berupa angka'
                ]
            ],
            'metode_pemesanan'  => [
                'label' => '',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib diisi'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', $validation->getErrors());
        }

        // Validasi foto lokasi secara manual
        $file = $this->request->getFile('foto_lokasi');
        $fotoNames = [];

        if ($file->getError() === 4) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', [
                'foto_lokasi' => 'Foto lokasi wajib diunggah.'
            ]);
        }

        if (!in_array($file->getMimeType(), ['image/jpeg', 'image/jpg', 'image/png'])) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', [
                'foto_lokasi' => 'Format harus JPG, JPEG, atau PNG.'
            ]);
        }

        if ($file->getSize() > 1024 * 1024) {
            return redirect()->to('Lokasi/inputLokasi')->withInput()->with('errors', [
                'foto_lokasi' => 'Ukuran maksimal 1MB.'
            ]);
        }

        $fotoName = $file->getRandomName();
        $file->move('foto', $fotoName);

        // Konversi checkbox
        $kantin = $this->request->getPost('kantin') ? 1 : 0;
        $toilet = $this->request->getPost('toilet') ? 1 : 0;
        $parkir = $this->request->getPost('parkir') ? 1 : 0;

        // Simpan ke database
        $data = [
            'nama_lokasi'        => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi'      => $this->request->getPost('alamat_lokasi'),
            'latitude'           => $this->request->getPost('latitude'),
            'longitude'          => $this->request->getPost('longitude'),
            'foto_lokasi'        => $fotoName, // disimpan sebagai string dipisah koma
            'jumlah_lapangan'    => $this->request->getPost('jumlah_lapangan'),
            'jam_mulai'          => $this->request->getPost('jam_mulai'),
            'jam_selesai'        => $this->request->getPost('jam_selesai'),
            'harga_sewa'         => str_replace('.', '', $this->request->getPost('harga_sewa')),
            'harga_sewa_wk'      => str_replace('.', '', $this->request->getPost('harga_sewa_wk')),
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

        $file = $this->request->getFile('foto_lokasi');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('foto', $newName);
            $data['foto_lokasi'] = $newName;
        }

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
