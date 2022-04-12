<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
     protected $MahasiswaModel;

     public function __construct()
     {
          $this->MahasiswaModel = new MahasiswaModel();
     }
     public function index()
     {
          // $Mahasiswa = $this->MahasiswaModel->findAll();
          $data = [
               'title' => 'Mahasiswa - CI4CRUD ',
               'Mahasiswa' => $this->MahasiswaModel->getMahasiswa()
          ];
          return view('mahasiswa/index', $data);
     }
     public function detail($slug)
     {
          $data = [
               'title' => 'Detail Mahasiswa',
               'Mahasiswa' => $this->MahasiswaModel->getMahasiswa($slug)
          ];
          return view('Mahasiswa/detail', $data);
     }

     public function create()
     {
          $data = [
               'title' => 'Form tambah data mahasiswa'
          ];
          return view('Mahasiswa/create', $data);
     }
}
