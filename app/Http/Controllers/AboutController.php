<?php

namespace App\Http\Controllers;

class AboutController extends Controller{
    public function about(){
        $isi = [
            [
                'File' => 'About',
                'Fungsi' => 'Halaman ini: tujuan website, isi, teknologi, dan anggota kelompok',
            ],
            [
                'File' => 'Blog',
                'Fungsi' => 'Kisah hidup R.A. Kartini dan pencapaian semasa hidup maupun pasca wafat',
            ],
            [
                'File' => 'Home',
                'Fungsi' => 'Pengenalan singkat tentang R.A. Kartini dan fakta-fakta penting tentang dirinya',
            ],
        ];

        $teknologi = [
            [
                'Teknologi' => 'Laravel',
                'Fungsi' => 'Untuk routing, controller dan blade view. Masing-masing halaman memiliki view dan controllernya sendiri.',
            ],
            [
                'Teknologi' => 'Tailwind CSS',
                'Fungsi' => 'Untuk mengatur style seperti layout, tipografi, warna, dst.',
            ],
            [
                'Teknologi' => 'daisyUI',
                'Fungsi' => 'Sebagai template tailwind untuk navbar, footer dan components.',
            ],
        ];

        $anggota = [
            [
                'Nama' => 'Evelyn Tjandinegara',
                'Nim' => '2086022510001',
            ],
            [
                'Nama' => 'Jonathan Mathew Pidono',
                'Nim' => '2086022510008',
            ],
        ];
        return view('about', ['isi' => $isi, 'teknologi' => $teknologi, 'anggota' => $anggota]);
    }
}