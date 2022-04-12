<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="row">
          <div class="col">
               <h2 class="mt-2">Detail Mahasiswa</h2>
               <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                         <div class="col-md-4">
                              <img src="/img/<?= $Mahasiswa['foto']; ?>" class="img-fluid rounded-start" alt="...">
                         </div>
                         <div class="col-md-8">
                              <div class="card-body">
                                   <h5 class="card-title"><?= $Mahasiswa['nama']; ?></h5>
                                   <p class="card-text"><b>Jurusan : </b><?= $Mahasiswa['jurusan']; ?></p>
                                   <a href="/Mahasiswa" class="btn btn-info">Back</a>
                                   <a href="" class="btn btn-warning">Edit</a>
                                   <a href="" class="btn btn-danger">Delete</a>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?= $this->endsection(); ?>