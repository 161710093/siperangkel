 <div class="modal"  tabindex="-1"  role="dialog" id="m_form">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form id="f_tpu">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="id" id="id">
          <input type="hidden" name="type" id="type">
          <div class="form-group">
            <label class="control-label">Nama</label> 
            <input type="text" name="nama" class="form-control"  id="nama">
          </div>
           <button type="reset" style="display:none;" id="reset"></button>
         </form>
       </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" onclick="save()">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
      </div>
    </div>
  </div>
</div>