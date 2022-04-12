<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{

     protected $table      = 'tb_mahasiswa';
     protected $primaryKey = 'nrp';
     protected $returnType     = 'array';

     protected $useTimestamps = true;
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';

     public function getMahasiswa($slug = false)
     {
          if ($slug == false) {
               return $this->findAll();
          }
          return $this->where(['slug' => $slug])->first();
     }
}
