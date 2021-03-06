<title>Laporan Peminjaman</title>
<center>
  <h4>Data Peminjaman</h4>
</center>
<table border="1" class="table table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Angota</th>
      <th>Nama Barang</th>
      <th>Jumlah Pinjam</th>
      <th>Jadwal</th>
      <th>Tanggal Peminjaman</th>
      <th>Batas Waktu Peminjaman</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $no = 1; ?>
    <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($data->Anggota->nama_anggota); ?></td>
      <td><?php echo e($data->Barang->nama_barang); ?></td>
      <td><?php echo e($data->jumlah_pinjam); ?></td>
      <th><?php echo e($data->jadwal); ?></th>
      <td><?php echo date('d/m/Y h:i:s', strtotime($data->created_at))?></td>
      <td><?php echo date('d/m/Y h:i:s', strtotime($data->tanggal_batas))?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table>
<br>
Laporan Peminjaman Di Ambil Dari Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($dari))?> Sampai Tanggal : <?php echo date('d/m/Y h:i:s', strtotime($sampai))?>