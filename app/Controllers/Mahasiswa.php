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
          $Mahasiswa = $this->MahasiswaModel->findAll();
          $data = [
               'title' => 'Mahasiswa - CI4CRUD ',
               'Mahasiswa' => $Mahasiswa
          ];



          return view('mahasiswa/index', $data);
     }
}
