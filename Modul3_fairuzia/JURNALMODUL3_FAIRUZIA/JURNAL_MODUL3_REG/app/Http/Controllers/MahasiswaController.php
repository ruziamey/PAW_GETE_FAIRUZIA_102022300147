<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'


        $mahasiswa=(object) [
            'nama'=> 'Fairuzia Meyla',
            'nim' => '102022300147',
            'email' => 'fairuziameyla@gmail.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' =>'Fakultas Rekayasa Industri',
            'foto'=> asset('images/Profile.jpg')
        ];
        return view ('profil', compact ('mahasiswa'));
    }
}

