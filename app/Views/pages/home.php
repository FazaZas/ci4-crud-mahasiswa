<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="row">
          <div class="col">
               <h1>Home</h1>
               <?php
               var_dump($tes);
               ?>
          </div>
     </div>
</div>
<?= $this->endsection(); ?>