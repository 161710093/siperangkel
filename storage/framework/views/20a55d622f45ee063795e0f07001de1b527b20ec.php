<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css')); ?>">
<style type="text/css">
  .table thead tr th{
  vertical-align: middle;
  text-align: center;
  }
  .table tbody tr td{
  vertical-align: middle;
  text-align: center;
  }
  #data th, #data td {
  font-size: 11px;
  }
  .text-danger 
  {
  text-transform:capitalize;
  }
  .fc-time{
  display: none;
  }
</style>
<style type="text/css"></style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('title'); ?>
Data Barang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Ubah Barang
        <div class="float-right">
          <a class="btn btn-xs btn-outline-dark badge-pill" href="<?php echo e(route('barang.index')); ?>"><i class="zmdi zmdi-close-circle"></i> Batal</a>
        </div>
      </h2>
      <div class="card-body">
        <form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="post" enctype="multipart/form-data">
          <input name="_method" type="hidden" value="PATCH">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Barang</label> 
            <input type="text" name="nama_barang" class="form-control" value="<?php echo e($barang->nama_barang); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Persediaan</label> 
            <input type="text" name="persediaan" class="form-control number_only" value="<?php echo e($barang->persediaan); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Satuan</label> 
            <input type="text" name="satuan" class="form-control" value="<?php echo e($barang->satuan); ?>" required>
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Kondisi</label> 
            <input type="text" name="kondisi" class="form-control" value="<?php echo e($barang->kondisi); ?>" required>
          </div>
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Foto</label>
            <br>
            <?php if(isset($barang) && $barang->foto): ?>
            <p>
              <img src="<?php echo e(asset('assets/img/foto/'.$barang->foto )); ?>" style="max-height:125px;max-width:125px;margin-top:7px;" alt="">
            </p>
            <?php endif; ?> 
            <br>
            <input type="file" name="foto" value="<?php echo e($barang->foto); ?>">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-xs btn-outline-success badge-pill"><i class="zmdi zmdi-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<!-- Vendors: Data tables -->
<script src="<?php echo e(asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.uploadPreview.min.js')); ?>"></script>
<script></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>