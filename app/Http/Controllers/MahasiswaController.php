<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function daftarMahasiswa(){
        return "Form Pendaftaran Mahasiswa";
    }

    public function tabelMahasiswa(){
        return "Tabel Daftar Data Mahasiswa";
    }
    
    public function blogMahasiswa(){
        return "Blog Mahasiswa untuk berekspresi";
    }
}
