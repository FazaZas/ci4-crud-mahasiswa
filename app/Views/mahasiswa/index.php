<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="row">
          <div class="col">
               <h1 class="mt-2">Daftar Mahasiswa</h1>
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col">Foto</th>
                              <th scope="col">NRP</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($Mahasiswa as $m) : ?>
                              <tr>
                                   <th scope="row"><?= $i++; ?></th>
                                   <td><img src="/img/<?= $m['foto']; ?>" alt="" class="sampul"></td>
                                   <td><?= $m['nrp']; ?></td>
                                   <td><?= $m['nama']; ?></td>
                                   <td><a href="" class="btn btn-success">Detail</a></td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<?= $this->endsection(); ?>