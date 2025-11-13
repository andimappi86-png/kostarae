<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KostController extends Controller
{
    public function detail($id)
    {
        $kost = [
            1 => [
                'nama' => 'Kost Eksklusif Dekat UNM',
                'lokasi' => 'Makassar Selatan',
                'harga' => 'Rp 1.200.000',
                'rating' => 4.5,
                'deskripsi' => 'Kost eksklusif dengan fasilitas AC, Wifi, kamar mandi dalam…',
                'fasilitas' => ['Wifi', 'AC', 'Kasur', 'Lemari', 'Kamar Mandi Dalam'],
                'gambar' => 'kost1.jpg'
            ],
            2 => [
                'nama' => 'Kost Putri Modern IAIN',
                'lokasi' => 'Perintis Kemerdekaan',
                'harga' => 'Rp 950.000',
                'rating' => 4.7,
                'deskripsi' => 'Lingkungan aman, dekat kampus, bersih.',
                'fasilitas' => ['Wifi', 'AC', 'Laundry', 'CCTV'],
                'gambar' => 'kost2.jpg'
            ],
            3 => [
                'nama' => 'Kost Putra Nyaman IAS',
                'lokasi' => 'Tamalanrea',
                'harga' => 'Rp 800.000',
                'rating' => 4.2,
                'deskripsi' => 'Ruangan luas dan tenang.',
                'fasilitas' => ['Wifi', 'Kipas', 'Kasur', 'Parkir'],
                'gambar' => 'kost3.jpg'
            ],
            4 => [
                'nama' => 'Kost Premium UMPAR',
                'lokasi' => 'Panakkukang',
                'harga' => 'Rp 1.500.000',
                'rating' => 4.9,
                'deskripsi' => 'Kost premium lengkap + furniture lengkap.',
                'fasilitas' => ['Wifi', 'AC', 'TV', 'Full Furnished'],
                'gambar' => 'kost4.jpg'
            ],
        ];

        if (!isset($kost[$id])) {
            abort(404);
        }

        return view('kost.detail', [
            'kost' => $kost[$id]
        ]);
    }
}
