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
Data Anggota
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <h2 class="card-header">
        Anggota
        <div class="float-right">
          <a class="btn btn-xs btn-primary" href="<?php echo e(route('anggota.create')); ?>"><i class="zmdi zmdi-account-add"></i> Tambah</a>
          <a class="btn btn-xs btn-danger" href="<?php echo e(route('anggota.eksport')); ?>"><i class="zmdi zmdi-square-down"></i> PDF</a>
          <a class="btn btn-xs btn-success" href="<?php echo e(route('anggota.export')); ?>"><i class="zmdi zmdi-download"></i> Excel</a>
        </div>
      </h2>
      <div class="card-body">
        <table id="myTable" class="table table-hover table-bordered">
          <thead class="thead-default" style="background-color:#2196F3">
            <tr>
              <th><font face color="white">No</th>
              <th><font face color="white">Nomor Induk Siswa</th>
              <th><font face color="white">Nama Anggota</th>
              <th><font face color="white">Jurusan</th>
              <th><font face color="white">No HP</th>
              <th><font face color="white">Alamat</th>
              <th><font face color="white">Menjadi Anggota Sejak</th>
              <th><font face color="white">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td><?php echo e($data->nis); ?></td>
              <td><?php echo e($data->nama_anggota); ?></td>
              <td><?php echo e($data->jurusan); ?></td>
              <td><?php echo e($data->nope); ?></td>
              <td><?php echo e($data->alamat); ?></td>
              <td><?php echo e($data->created_at); ?></td>
              <td><a class="btn btn-xs btn-warning" href="<?php echo e(route('anggota.edit',$data->id)); ?>"><i class="zmdi zmdi-edit"></i> Ubah</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
          </tbody>
        </table>
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
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>