<div class="modal" tabindex="-1" role="dialog" id="m_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <form id="f_barang">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="type" id="type">
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Nama Barang</label> 
            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Persediaan</label> 
            <input type="number" name="persediaan" class="form-control" id="persediaan">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Kondisi</label> 
            <input type="text" name="kondisi" class="form-control" id="kondisi">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <div class="form-group">
            <label class="control-label"><font style="color:grey">Foto</label> 
            <input type="text" name="foto" class="form-control" id="foto">
            <!-- <span class="text-danger">error</span> -->
          </div>
          <button type="reset" style="display: none;" id="reset"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-xs btn-success" onclick="save()"><i class="zmdi zmdi-save"></i> Simpan</button>
        <button type="button" class="btn btn-xs btn-danger" data-dismiss="modal"><i class="zmdi zmdi-close-circle"></i> Batal</button>
      </div>
    </div>
  </div>
</div>