<?php

namespace App\Controllers;

class Pages extends BaseController
{
     public function index()
     {
          $data = [
               'title' => 'Home - CI4CRUD ',
               'tes'   => ['satu', 'dua', 'tiga']
          ];
          echo view('pages/home', $data);
     }
     public function about()
     {
          $data = [
               'title' => 'About - CI4CRUD '
          ];
          echo view('pages/about', $data);
     }
}
